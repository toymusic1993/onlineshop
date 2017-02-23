<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class ProductsController extends AppController {
    var $helpers  = array('Paginator','Html');
    var $paginate = array('limit' => 15);
	public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
    }
	// Index
	public function index() {
		$this->loadModel('Products');
		
		$this->loadModel('Categories');
		$list_category = $this->Categories->find();
		$this->set('list_category', $list_category);
			
		$list_products = $this->paginate();
		$this->set('list_products', $list_products);
		
		$this->loadModel('Order_Product');
		$query2 = $this->Order_Product->find();
		$best_sellers = $query2->select(['product_id','quantity' => $query2->func()->
			sum('quantity')])->group('product_id')->order(['quantity' => 'DESC'])->limit(5);
		
		$a = array();
		foreach($best_sellers as $result) {
			$a[] = $result->product_id;
		}
			$c = $this->Products->find()->where(['id IN ' => $a]);
		
		$this->set('c',$c);
		// get data best seller
		
		
		
	}
	//Category
	public function categories($id = null) {
		$this->loadModel('Categories');
		$list_category = $this->Categories->find();
		$this->set('list_category', $list_category);

		$info_category = $this->Categories->find()->select(['name', 'description'])->where(
			['id' => $id]);
		$this->set('info_category', $info_category);

		$this->loadModel('Products');
		$products = $this->Products->find('all')->where(['category_id' => $id]);
		$this->set('products', $this->paginate($products));	
	}
	
	// Add Products
	public function addProducts() {
		$this->loadModel('Categories');
		$list_category = $this->Categories->find();
		$this->set('list_category', $list_category);
		
	  	$products = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $products = $this->Products->patchEntity($products, $this->request->data);
            if ($this->Products->save($products)) {
				$this->Flash->success(__('Add Done'));
                return $this->redirect(['controller'=>'users','action' => 'adminproducts']);	
            }
			$this->Flash->error(__("Add Fail Because Product's Name Is Exists"));
        }
        $this->set('products', $products);
	}

	// Edit Products
	public function editProducts($id = null) {
		$this->loadModel('Categories');
		$list_category = $this->Categories->find();
		$this->set('list_category', $list_category);
		
		$products = $this->Products->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Products->patchEntity($products, $this->request->data);
            if ($this->Products->save($products)) {
                $this->Flash->success(__('Fix Done'));
                return $this->redirect(['controller'=>'users','action' => 'adminproducts']);
            }
			$this->Flash->error(__('Fix Fail'));
        }
		$this->set('products', $products);
	}

	// Delete Products
	public function deleteProducts($id = null) {
	    $this->request->allowMethod(['post', 'delete']);
		$products = $this->Products->get($id);
		if ($this->Products->delete($products)) {
		    
        	return $this->redirect(['controller'=>'users', 'action' => 'adminproducts']);
		}
	}

	//Details Products
	public function detail ($id = null) {
		$this->loadModel('Categories');
		$list_category = $this->Categories->find();
		$this->set('list_category', $list_category);

		$products = $this->Products->get($id);
		$this->set('products', $products);
		$get_category_id = $this->Products->find()->select('category_id')->where(['id'=>$id]);
		//get data user's comment
		$review = $this->loadModel('Product_Reviews');
		$review_data = $review->find()->select(['comment', 'rate'])->where(
			['product_id' => $id])->limit(5);
			
		$same_products = $this->Products->find()
			->where(['category_id' => $get_category_id])->order('rand()')->limit(5);
		$this->set('review_data', $review_data);
		$this->set('same_products',$same_products);
	}
	
	//Checkout
	public function checkout($id = null) {
		$session  = $this->request->session();	 
		$this->loadModel('Categories');
		$list_category = $this->Categories->find();
		$this->set('list_category', $list_category);
		
		$products = $this->Products->get($id);
		if ($session->check('cart.'.$id)) {
			$item = $session->read('cart.'.$id);
			$item['quantity'] += 1;
			$item['amount']    = $item['quantity'] * $item['price'];
		} else {
			$item = array(
			'id' => $products->id,
			'image' => $products->image_url,
			'name' => $products->name,
			'price' => $products->price,
			'quantity' => 1,
			'amount'   => $products->price
			);
		}
		$session->write('cart.'.$id,$item);
		$cart = $session->read('cart');
		$totalamount = 0;
		foreach ($cart as $product) {
			$totalamount += $product['amount'];
		}
		$session->write('payment.total',$totalamount);
		
// Now you can read a array from Session
		
		$this->set('show', $session);
		$this->loadModel('Orders');
		$this->loadModel('Order_Product');
		$order = $this->Orders->newEntity();
		if($this->request->is('post')) {
			$order = $this->Orders->patchEntity($order, $this->request->data);
			if($this->Orders->save($order)) {
				return $this->redirect(['action' => 'index']);
			}
		}
	}
	public function deleteCart($id = null) {
		$session  = $this->request->session();	
		$session->delete($id);
	}
}
