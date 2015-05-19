<?php
/* @var $this PodrazdelenieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Podrazdelenies',
);

$this->menu=array(
	array('label'=>'Create Podrazdelenie', 'url'=>array('create')),
	array('label'=>'Manage Podrazdelenie', 'url'=>array('admin')),
);
?>

<h1>Podrazdelenies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
