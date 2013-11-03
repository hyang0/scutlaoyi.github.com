<?php

class BitchController extends AppController
{
	public $scaffold;
	public $components = array('Paginator');

	public $paginate = array(
			'limit' => 5,
			'order' => array(
				'Bitch.name' => 'asc'));
}
?>
