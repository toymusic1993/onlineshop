<?php

namespace App\View;

use BootstrapUI\View\UIView;
use Cake\View\View;
use BootstrapUI\View\UIViewTrait;
class AppView extends View {
	use UIViewTrait;
    public function initialize() {
    	$this->initializeUi(['layout'=>false]);
    }
}
