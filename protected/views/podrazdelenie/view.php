<?php
/* @var $this PodrazdelenieController */
/* @var $model Podrazdelenie */

$this->breadcrumbs=array(
	'Podrazdelenies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Podrazdelenie', 'url'=>array('index')),
	array('label'=>'Create Podrazdelenie', 'url'=>array('create')),
	array('label'=>'Update Podrazdelenie', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Podrazdelenie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Podrazdelenie', 'url'=>array('admin')),
);
?>

<h1>View Podrazdelenie #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'adress',
		'tell',
		'region',
	),
)); ?>
