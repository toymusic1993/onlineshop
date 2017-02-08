<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class UsersController extends AppController {
	// Registry
	public function registry() {
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
	    $products = TableRegistry::get('Orders');
		$query = $products->find();
		$this->set('data',$query);
	}
	// Users
	public function adminUsers() {
		$users = TableRegistry::get('Users');
		$query = $users->find();
		$this->set('data',$query);
	}
	
	//Add Users
	public function addUsers() {
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
	
	// Login
	public function login() {
	    if ($this->request->is('post')){
		    $users = $this->request->data;
			if ($users) {
			    $email = $users['email'];
				$password = $users['password'];
				$flag = $this->Users->checkUsersLogin($email, $password);
				if ($flag) {
				    $this->Flash->success(__('Đăng Nhập Thành Công.'));
					return $this->redirect(['controller'=>'products','action'=>'index']);
				}
				return $this->Flash->error(__('Sai Thông Tin Đăng Nhập'));

			}
		}
	}
}
