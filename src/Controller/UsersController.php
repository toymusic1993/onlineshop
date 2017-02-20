<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\ORM\Table;


class UsersController extends AppController {
	public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
    }
	
	// Registry
	public function registry() {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('data', $query);
		
	    $users = $this->Users->newEntity();
		if ($this->request->is('post')){
		    $users = $this->Users->patchEntity($users,$this->request->data);
			if ($this->Users->save($users)){
			    $this->Flash->success(__('Đăng Kí Thành Công.'));
                return $this->redirect(['controller'=>'products','action' => 'index']);
			}
		   	$this->Flash->error(__('Đăng Kí Thất Bại.'));
		}
		$this->set('users', $users);
	}

	// Admin Home
	public function adminHome() {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('data', $query);
		
	    $this->paginate = array('limit' => 10);
		$list_orders = $this->paginate('Orders');
		$this->set('data', $list_orders);	
		
		//Number Of Orders
		$orders = TableRegistry::get('Orders');
		$query = $orders->find('all');
		$query->select('Orders.id');
		$total = $query->count();
		$this->set('total_orders',$total);
		
		//Number Of Products
		$this->loadModel('Products');
		$query = $this->Products->find();
		$query->select('Products.id');
		$totalproducts = $query->count();
		$this->set('total_products',$totalproducts);
		
		//Number Of Users
		$users = TableRegistry::get('Users');
		$query = $users->find('all');
		$query->select('Users.id');
		$totalusers = $query->count();
		$this->set('total_users',$totalusers);
	}
	
	// Admin Products
	public function adminProducts() {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('data', $query);
		$this->paginate = array('limit' => 10);
		$list_products = $this->paginate('Products');
		$this->set('data1', $list_products);	
	}
	
	// Admin Categories
	public function adminCategories() {
	    $this->paginate = array('limit' => 10);
		$list_categories = $this->paginate('Categories');
		$this->set('data', $list_categories);	
	}

	// Users
	public function adminUsers() {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('data', $query);
		
		$this->paginate = array('limit' => 10);
		$list_users = $this->paginate('Users');
		$this->set('data', $list_users);	
	}
	
	//Add Users
	public function addUsers() {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('data', $query);
		
		$users = $this->Users->newEntity();
		if ($this->request->is('post')) {
			$users = $this->Users->patchEntity($users, $this->request->data);
			if ($this->Users->save($users)) {
				$this->Flash->success(__('Thêm Tài Khoản Thành Công'));
				return $this->redirect(['action'=>'adminUsers']);
			}
			$this->Flash->error(__('Thêm Tài Khoản Thất Bại'));
		}
		$this->set('users',$users);
	}
	
	// Edit Users
	public function editUsers($id = null) {
		$this->loadModel('Categories');
		$query = $this->Categories->find();
		$this->set('data', $query);
		
        $users = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($users, $this->request->data);
            if ($this->Users->save($users)) {
                $this->Flash->success(__('Fix Done'));
                return $this->redirect(['action' => 'adminUsers']);
            }
			$this->Flash->error(__('Fix Fail'));
        }
		$this->set('users', $users);
	}

	// Delete Products
	public function deleteUsers($id = null) {
	    $this->request->allowMethod(['post','delete']);
		$users = $this->Users->get($id);
		if ($this->Users->delete($users)) {
		    $this->Flash->success(__('User has ID : {0} is deleted.', h($id)));
        	return $this->redirect(['action' => 'adminUsers']);
		}
	}
	
	//Admin Login
	public function login() {
	    if ($this->request->is('post')) {
		    $user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect(['controller'=>'users','action'=>'adminhome']);
			}
				return $this->Flash->error(__('Sai Thông Tin Đăng Nhập'));
		}
	}
}
	
	
	
