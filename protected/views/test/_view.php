<?php
/* @var $this TestController */
/* @var $data Test */
?>

<div class="view">




	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtwo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id.'-'.$data->idtwo), array('view', 'id'=>$data->id,'idtwo'=>$data->idtwo)); ?>
	<br />


</div>