<!-- File: /app/View/Posts/index.ctp -->
<h1>Blog posts</h1>
<table>
	<tr>
		<th>Title</th>
		<th>Created</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>

	<!-- Loop through the posts array -->

	<?php foreach($posts as $post): ?>
	<tr>
		<td><?php echo $this->Html->link($post['Post']['title'], array('controller'=>'posts', 'action'=>'view', $post['Post']['id'])); ?></td>
		<td><?php echo $post['Post']['created']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('controller'=>'posts', 'action'=>'edit', $post['Post']['id']));?></td>
		<td><?php echo $this->Form->postLink('Delete', array('controller'=>'posts', 'action'=>'delete', $post['Post']['id']), array('confirm'=>'Are you sure?')); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
	<?php echo $this->Html->link
	('Add Post', array('controller'=>'posts', 'action'=>'add')); ?>
</table>
