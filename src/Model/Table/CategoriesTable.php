<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class CategoriesTable extends Table {
	public function initialize(array $config) {
		$this->belongsToMany('Products', [
			'joinTable' => 'category_id', 
		]);
	}

}
