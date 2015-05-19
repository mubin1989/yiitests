<?php
/* @var $this PodrazdelenieController */
/* @var $model Podrazdelenie */

$this->breadcrumbs=array(
	'Podrazdelenies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Podrazdelenie', 'url'=>array('index')),
	array('label'=>'Manage Podrazdelenie', 'url'=>array('admin')),
);
?>

<h1>Create Podrazdelenie</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>