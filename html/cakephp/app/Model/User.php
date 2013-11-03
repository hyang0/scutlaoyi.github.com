<?php
App::uses('AuthComponent', 'Controller/component');
class User extends AppModel
{
	public $validate = array(
			'username' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'The name should not be empty'
					)
				),
			'password' => array(
				'require' => array(
					'rule' => array('notEmpty'),
					'message' => 'password should not be empty'
					)
				),
			'role' => array(
				'valid' => array(
					'rule' => array('inList', array('admin', 'author')),
					'message' => 'please enter a valid role',
					'allowEmpty' => False
					)
				)
			);
	public function beforeSave($options = array())
	{
		if(isset($this->data[$this->alias]['password']))
		{
			$this->data[$this->alias]['password'] = 
				AuthComponent::password($this->data[$this->alias]['password']);
		}
	}
}
?>
