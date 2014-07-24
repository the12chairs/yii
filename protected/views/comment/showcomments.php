List all comments

<div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($model); ?>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'name'); ?>
<?php echo CHtml::activeTextField($model,'name'); ?>
</div>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'email'); ?>
<?php echo CHtml::activeTextField($model,'email'); ?>
</div>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'comment'); ?>
<?php echo CHtml::activeTextField($model,'comment'); ?>
</div>
 
 
<div class="row submit">
<?php echo CHtml::submitButton('Post'); ?>
</div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->