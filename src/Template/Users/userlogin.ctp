	<h1 class="text-center">User Login</h1>
	<div class="users form">
	     <?= $this->Form->create
          ('login', array('type' => 'post')); ?>
    	 <fieldset>
	          <?= $this->Form->input('email') ?>
	          <?= $this->Form->input('password') ?>
    	 </fieldset>
		 <?= $this->Form->submit('Login',array('class'=>'button')); ?>
		 <?= $this->Form->end() ?>
    </div>
