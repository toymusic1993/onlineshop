<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class ProductsController extends AppController {
    var $helpers  = array('Paginator','Html');
    var $paginate = array('limit' => 15);

	// Index
	public function index() {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('list_category', $query);
			
		$list_products = $this->paginate();
		$this->set('list_products', $list_products);

		//get data Best Seller
		$this->loadModel('Order_Product');
		$query2 = $this->Order_Product->find();
		$result = $query2->select(['product_id','quantity' => $query2->func()->
			sum('quantity')])->group('product_id')->order(['quantity'=>'DESC'])->limit(5);
		
		$best_sellers = array();

		foreach ($result as $get_id) {
			$best_sellers[] = $this->Products->find()->where(['id' => $get_id->product_id])->toArray();
		}
		$this->set('best_sellers', $best_sellers);
		//pr($best_sellers);die();
	}
	
	//Category
	public function categories($id = null) {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$query_name = $this->Categories->find()->select(['name', 'description'])->where(
			['id' => $id]);
		$this->set('data', $query);
		$this->set('get_name', $query_name);

		$this->loadModel('Products');
		$query = $this->Products->find('all')->where(['category_id' => $id]);
		$this->set('data1', $this->paginate($query));	
	}
	
	// Add Products
	public function addProducts() {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('list_category', $query);
		
	  	$products = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $products = $this->Products->patchEntity($products, $this->request->data);
            if ($this->Products->save($products)) {
                $this->Flash->success(__('Lưu Sản Phẩm Thành Công.'));
                return $this->redirect(['controller'=>'users','action' => 'adminproducts']);	
            }
            $this->Flash->error(__('Lưu Sản Phẩm Thất Bại'));
        }
        $this->set('products', $products);
	}

	// Edit Products
	public function editProducts($id = null) {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('list_category', $query);
        $products = $this->Products->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Products->patchEntity($products, $this->request->data);
            if ($this->Products->save($products)) {
                return $this->redirect(['controller' => 'users','action' => 'adminproducts']);
            }
			$this->Flash->error(__('Sửa Sản Phẩm Thất Bại'));
        }
		$this->set('products', $products);
	}

	// Delete Products
	public function deleteProducts($id = null) {
	    $this->request->allowMethod(['post', 'delete']);
		$products = $this->Products->get($id);
		if ($this->Products->delete($products)) {
		    $this->Flash->success(__('Sản Phẩm Có ID : {0} Đã Bị Xóa.', $id));
        	return $this->redirect(['controller'=>'users', 'action' => 'adminproducts']);
		}
	}

	//Details Products
	public function detail ($id = null) {
		$this->loadModel('Categories');
		$query_categories = $this->Categories->find();
		$this->set('list_category', $query_categories);

		$products = $this->Products->get($id);
		$this->set('products', $products);

		$preview = $this->loadModel('Product_Reviews');
		$get = $preview->find()->select(['comment', 'rate'])->where(
			['product_id' => $id])->limit(5);
		$this->set('result', $get);
	}
	
	//Checkout
	public function checkout($id = null) {
		$session  = $this->request->session();	 
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('list_category', $query);
		
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
	}
}
