<div class="tickets index">
	<h2><?php __('Tickets');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('urgency');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('ticket_department_id');?></th>
			<th><?php echo $this->Paginator->sort('added');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tickets as $ticket):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ticket['Ticket']['id']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['title']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['content']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['urgency']; ?>&nbsp;</td>
		<td><?php echo $ticket['Ticket']['status']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ticket['TicketDepartment']['name'], array('controller' => 'ticket_departments', 'action' => 'view', $ticket['TicketDepartment']['id'])); ?>
		</td>
		<td><?php echo $ticket['Ticket']['added']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ticket['Ticket']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ticket['Ticket']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticket['Ticket']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Ticket', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ticket Departments', true), array('controller' => 'ticket_departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Department', true), array('controller' => 'ticket_departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ticket Replies', true), array('controller' => 'ticket_replies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ticket Reply', true), array('controller' => 'ticket_replies', 'action' => 'add')); ?> </li>
	</ul>
</div>