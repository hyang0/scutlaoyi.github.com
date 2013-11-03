<!-- File:/app/View/Posts/edit.ctp -->

<h1>Edit Post:</h1>
<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('body');
	echo $this->Form->input('id', array('type'=>'hidden'));
	echo $this->Form->end('save change');
	echo $this->Html->link("return", array("controller"=>'posts', 'action'=>'index'));
?>
