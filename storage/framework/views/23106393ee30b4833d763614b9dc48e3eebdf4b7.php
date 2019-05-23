    
    <?php $__env->startSection('content'); ?>
    <h1>HELLO I AM WILSON</h1>
    <?php for($i=1;$i<=10;$i++): ?>
    <?php echo e($i); ?> <br/> 
    <?php endfor; ?>


    <br/>
    <?php
    echo date('Y-m-d h:i:s');
    // {{ }} works as echo in blade engine. You can also use plain php like here.
    ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('title'); ?>
    This is a title.
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('footer'); ?>
    <div class="col100">&copy; 2018, All Rights Reserved.</div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>