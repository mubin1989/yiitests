<?php
/* @var $this PodrazdelenieController */
/* @var $model Podrazdelenie */

$this->breadcrumbs=array(
	'Podrazdelenies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Podrazdelenie', 'url'=>array('index')),
	array('label'=>'Create Podrazdelenie', 'url'=>array('create')),
	array('label'=>'View Podrazdelenie', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Podrazdelenie', 'url'=>array('admin')),
);
?>

<h1>Update Podrazdelenie <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>