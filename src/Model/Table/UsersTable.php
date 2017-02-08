<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class UsersTable extends Table {
	public function initialize(array $config) {
		$this->addBehavior('Timestamp');
	}

	public function validationDefault(Validator $validator) {
        $validator
            ->notEmpty('name')
            ->requirePresence('name')
            ->notEmpty('password')
            ->requirePresence('password')
            ->notEmpty('email')
            ->requirePresence('email');
        return $validator;
    }

    //Check Users Login
    public function checkUsersLogin($email, $password) {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password ='$password'";
        $result = $this->query($sql);
        if(isset($result)){
              return true;
        }
        return false;

    }
	
}
