<div class="tips view">
<h2><?php  echo __('Tip');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($tip['Tip']['user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tip'), array('action' => 'edit', $tip['Tip']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tip'), array('action' => 'delete', $tip['Tip']['id']), null, __('Are you sure you want to delete # %s?', $tip['Tip']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tips'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tip'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
