<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class ProductsTable extends Table {

    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('products');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Creators', [
            'foreignKey' => 'creator_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('OrderProduct', [
            'foreignKey' => 'product_id'
        ]);
        $this->hasMany('ProductReviews', [
            'foreignKey' => 'product_id'
        ]);
    }
    public function validationDefault(Validator $validator) {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name')
            ->notEmpty('name');

        $validator
			->requirePresence('image_url')
            ->notEmpty('image_url');

        $validator
            ->requirePresence('description')
            ->notEmpty('description');

        $validator
            ->numeric('price')
            ->allowEmpty('price');

        $validator
            ->integer('quantity')
            ->allowEmpty('quantity');

        $validator
            ->allowEmpty('tags');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    public function buildRules(RulesChecker $rules) {
        /* $rules->add($rules->existsIn(['creator_id'], 'Creators')); */
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
