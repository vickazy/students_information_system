<div class="row">
    <div class="col-md-10">
        <div class="studentsClasses form">
            <?php
echo $this->Form->create('StudentsClass', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => ''
));
?>
            <fieldset>
                <legend><?php echo __('Add Students Class'); ?></legend>
                	<?php
		echo $this->Form->input('teachers_id');
		echo $this->Form->input('students_id');
		echo $this->Form->input('details');
	?>
            </fieldset>
            <button type="submit" class="btn btn-primary btn-large">Submit</button>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
    <div class="col-md-2">
        <div style="margin-bottom:10px;">
            <?php echo $this->Html->link(__('<i class="icon icon-chevron-left"></i> Back to Index'), array('action' => 'index'),array('class'=>'btn btn-block btn-primary','escape'=>false)); ?> </li>
        </div>
        <div class="widget">
            <div class="widget-header">
                <i class="icon-th-list"></i>
                <h3><?php echo __('Actions'); ?></h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
                <ul class="nav nav-list nav-stacked">
                                        <li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Students Classes'), array('action' => 'index'),array('escape'=>false)); ?></li>
                    		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Teachers'), array('controller' => 'teachers', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Teachers'), array('controller' => 'teachers', 'action' => 'add'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> List Students'), array('controller' => 'students', 'action' => 'index'),array('escape'=>false)); ?> </li>
		<li><?php echo $this->Html->link(__('<i class="icon icon-th-list"></i> New Students'), array('controller' => 'students', 'action' => 'add'),array('escape'=>false)); ?> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
