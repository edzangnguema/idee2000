<div class="employes index">
	<h2><?php __('Employes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('titre');?></th>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('nom');?></th>
			<th><?php echo $this->Paginator->sort('prenom');?></th>
			<th><?php echo $this->Paginator->sort('genre');?></th>
			<th><?php echo $this->Paginator->sort('categorie');?></th>
			<th><?php echo $this->Paginator->sort('date_embauche');?></th>
			<th><?php echo $this->Paginator->sort('date_naissance');?></th>
			<th><?php echo $this->Paginator->sort('lieu_naissance');?></th>
			<th><?php echo $this->Paginator->sort('numero_assurance');?></th>
			<th><?php echo $this->Paginator->sort('nbre_enfant');?></th>
			<th><?php echo $this->Paginator->sort('adresse');?></th>
			<th><?php echo $this->Paginator->sort('telephone1');?></th>
			<th><?php echo $this->Paginator->sort('telephone2');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('photo');?></th>
			<th><?php echo $this->Paginator->sort('departement_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($employes as $employe):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $employe['Employe']['id']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['titre']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['code']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['nom']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['prenom']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['genre']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['categorie']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['date_embauche']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['date_naissance']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['lieu_naissance']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['numero_assurance']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['nbre_enfant']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['adresse']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['telephone1']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['telephone2']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['email']; ?>&nbsp;</td>
		<td><?php echo $employe['Employe']['photo']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employe['Departement']['id'], array('controller' => 'departements', 'action' => 'view', $employe['Departement']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $employe['Employe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $employe['Employe']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $employe['Employe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employe['Employe']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employe', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Departements', true), array('controller' => 'departements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departement', true), array('controller' => 'departements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaires', true), array('controller' => 'commentaires', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentaire', true), array('controller' => 'commentaires', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents', true), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document', true), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilisateurs', true), array('controller' => 'utilisateurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilisateur', true), array('controller' => 'utilisateurs', 'action' => 'add')); ?> </li>
	</ul>
</div>