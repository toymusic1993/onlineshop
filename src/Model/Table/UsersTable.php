<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table {
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Orders', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ProductReviews', [
            'foreignKey' => 'user_id'
        ]);
    }

    public function validationDefault(Validator $validator) {
      
        $validator
            ->requirePresence('name')
            ->notEmpty('name');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->requirePresence('password')
            ->notEmpty('password');
        return $validator;
    }
	
    public function buildRules(RulesChecker $rules) { // check email exists
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
