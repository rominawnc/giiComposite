

<?php
/* @var $this TestController */
/* @var $model Test */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	$model->id=>array('view','id'=>$model->id,'idtwo'=>$model->idtwo),
	'Update',
);
 ?>
<?php
$this->menu=array(
	array('label'=>'List Test', 'url'=>array('index')),
	array('label'=>'Create Test', 'url'=>array('create')),
	array('label'=>'View Test', 'url'=>array('view','id'=>$model->id,'idtwo'=>$model->idtwo)),
	array('label'=>'Manage Test', 'url'=>array('admin')),
);
?>

<h1>Update Test 0 - 1</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>