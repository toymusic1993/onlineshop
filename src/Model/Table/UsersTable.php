<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class UsersTable extends Table {
	public function initialize(array $config) {
		$this->table('users');
        $this->entityClass('App\Model\Entity\user');
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
    
}
