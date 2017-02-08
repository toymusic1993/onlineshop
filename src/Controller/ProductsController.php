<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class ProductsController extends AppController {
    var $helpers = array('Paginator','Html');
    var $paginate = array();
	
	// Index
	public function index() {
		$products = TableRegistry::get('Products');
		$query1 = $products->find();
		$this->set('data1',$query1);

		$categories = TableRegistry::get('Categories');
		$query2 = $categories->find();
		$this->set('data2',$query2);
	}
	
	//Category
	public function category() {
		$products = TableRegistry::get('Products');
		$query   = $products->find('all')->contain('Categories');
		$this->set('data',$query);
		$this->loadModel('Products');
		$this->loadModel('Categories');
		$recentArticles = $this->Products->find('all', [
			'id' => 1,
			'name' => 'saotrucnuado'
		]);
		pr($recentArticles);
		die();
	}
	
	public function numberPages() {
		$this->paginate = array('limit' => 2);
		$data = $this->paginate('Products');
		$this->set('data',$data);
	}
	
	// Admin Products
	public function adminProducts() {
		$products = TableRegistry::get('Products');
		$query = $products->find();
		$this->set('data',$query);
	}

	// Add Products
	public function addProducts() {
	  	$products = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $products = $this->Products->patchEntity($products, $this->request->data);
            if ($this->Products->save($products)) {
                $this->Flash->success(__('Lưu Sản Phẩm Thành Công.'));
                return $this->redirect(['action' => 'adminproducts']);
            }
            $this->Flash->error(__('Lưu Sản Phẩm Thất Bại'));
        }
        $this->set('products', $products);
	}

	// Edit Products
	public function editProducts($id = null) {
        $products = $this->Products->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Products->patchEntity($products, $this->request->data);
            if ($this->Products->save($products)) {
                $this->Flash->success(__('Sửa Sản Phẩm Thành Công'));
                return $this->redirect(['action' => 'adminproducts']);
            }
			$this->Flash->error(__('Sửa Sản Phẩm Thất Bại'));
        }
		$this->set('products', $products);
	}

	// Delete Products
	public function deleteProducts($id = null) {
	    $this->request->allowMethod(['post','delete']);
		$products = $this->Products->get($id);
		if ($this->Products->delete($products)) {
		    $this->Flash->success(__('Sản Phẩm Có ID : {0} Đã Bị Xóa.', h($id)));
        	return $this->redirect(['action' => 'adminproducts']);
		}
	}
}
