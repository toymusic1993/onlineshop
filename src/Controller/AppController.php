<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller {
	public function initialize() {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
			'loginAction' => [
				'controller' => 'Users',
				'action' => 'login'
			],
			'authenticate' => [
				'Form' => [
					'userModel' => 'Users',
					'field' => [
						'username' => 'email',
						'password' => 'password'
					]
				]
			]
		]);
    }

    public function beforeFilter(Event $event) { 
        $this->Auth->allow([
			'index', 'detail', 'userlogin', 'checkout', 'categories', 
			'adminlogin', 'adminhome', 'adminproducts', 'addproducts',
			'deleteproducts', 'editproducts','adminusers', 'addusers', 
			'editusers', 'deleteusers']);
    }
}
