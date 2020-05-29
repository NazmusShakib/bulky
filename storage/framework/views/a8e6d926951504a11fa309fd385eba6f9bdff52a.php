<?php $__env->startSection('content'); ?>
    <div class="container-fluid app-body">
        <h3>History</h3>

        <div id="app-init">
            <history-component></history-component>
        </div>

    </div>


    <script src="<?php echo e(asset('js/v-app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>