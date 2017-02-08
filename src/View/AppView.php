<?php

namespace App\View;

use BootstrapUI\View\UIView;
use Cake\View\View;

class AppView extends View {

    // In your AppView.php
	public function initialize() {
		$this->loadHelper('Paginator', ['templates' => 'paginator-templates']);
	}
}
