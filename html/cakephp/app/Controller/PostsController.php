<?php
class PostsController extends AppController
{
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session', 'Paginator');

	public function index()	
	{
		if(!empty($this->request->params['requested']))
		{
			return $this->Post->find('all');
		}
		$this->set('posts', $this->Post->find('all'));
		//$this->set('posts', $this->Paginator->paginate(array('limit'=>5)));
	}

	public function view($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException(__("Invalid Post!"));
		}

		$post = $this->Post->findById($id);
		if(!$post)
		{
			throw new NotFoundException(__("Id out of range!"));
		}
		///////////////////////////////////
		//Testing code!
		$allPost = $this->requestAction(array('action'=>'index'));
		$this->set("allPost", $allPost);
		////////////////////////////////////
		$this->set("post", $post);
	}

	public function add()
	{
		if($this->request->is('post'))
		{
			$this->Post->create();
			$this->request->data['Post']['user_id'] = 
				$this->Auth->user('id');
			if($this->Post->save($this->request->data))
			{
				$this->Session->setFlash(__("Your post has been saved."));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__("unable to add your post."));
		}
	}
	public function edit($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException(__("Invalid Post!"));
		}
		$post = $this->Post->findById($id);
		if(!$post)
		{
			throw new NotFoundException(__("Not found the exact id!"));
		}

		if($this->request->is('post')|| $this->request->is('put'))
		{
			$this->Post->id = $id;
			if($this->Post->save($this->request->data))
			{
				$this->Session->setFlash(__("Your post has been updated!"));
				return $this->redirect(array('controller'=>'posts','action'=>'index'));
			}
			$this->Session->setFlash(__("Unable to update your post"));
		}
		if(!$this->request->data)
		{
			$this->request->data = $post;
		}
	}
	public function delete($id = null)
	{
		if($this->request->is('get'))
		{
			throw new MethodNotAllowedException();
		}
		if(!$id)
		{
			throw new NotFoundException(__("Invalid Post!"));
		}
		$post = $this->Post->findById($id);
		if(!$post)
		{
			throw new NotFoundException(__("Index out of range!"));
		}

		$this->Post->id = $id;
		if($this->Post->delete($id))
		{
			$this->Session->setFlash(__("Your post has been deleted"));
			return $this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__("Unable to delete your post"));
	}
	public function isAuthorized($user)
	{
		if($this->action == 'add')
		{
			return true;
		}

		if(in_array($this->action, array('edit', 'delete')))
		{
			$postId = $this->request->params['pass'][0];
			if($this->Post->isOwnedBy($postId, $user['id']))
			{
				return true;
			}
		}
		return parent::isAuthorized($user);
	}
}
?>
