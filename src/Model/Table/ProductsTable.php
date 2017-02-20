<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class ProductsTable extends Table {
	public function initialize(array $config) {	
		$this->hasOne('Categories');
	}

	public function validationDefault(Validator $validator) {
        $validator
            ->notEmpty('name')
            ->requirePresence('name')
            ->notEmpty('category_id')
            ->requirePresence('category_id')
            ->notEmpty('image_url')
            ->requirePresence('image_url')
            ->notEmpty('price')
            ->requirePresence('price')
            ->notEmpty('quantity')
            ->requirePresence('quantity')
            ->notEmpty('status')
            ->requirePresence('status')
            ->notEmpty('tags')
            ->requirePresence('tags')
            ->notEmpty('description')
            ->requirePresence('description');
        return $validator;
    }
	public function getDataOrder() {
		$sql = 'SELECT product_id, quantity FROM `order_product` ORDER BY quantity DESC LIMIT 5';
		$result = $this->query($sql);
		return $result;
	}
}
