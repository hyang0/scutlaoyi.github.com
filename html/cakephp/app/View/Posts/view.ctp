<!-- File: /app/View/Posts/view.ctp -->
<?php 
foreach($allPost as $onePost):
echo $onePost['Post']['id'];
	endforeach;
?>
<br/>

<?php echo h($post['Post']['title']); ?></h1>

<p><small>Created:<?php echo h($post['Post']['created']); ?></small></p>

<p><?php echo $post['Post']['body']; ?> </p>
<?php echo $this->Html->link("return", array('controller'=>'posts', 'action'=>'index')); ?>
