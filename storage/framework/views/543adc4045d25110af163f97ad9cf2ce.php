<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Phishing Campaigns</h2>
    <a href="<?php echo e(route('campaigns.create')); ?>" class="btn btn-primary">Create Campaign</a>
    <ul>
        <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($campaign->subject); ?> - <a href="<?php echo e($campaign->phishing_link); ?>">View Link</a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\PRASHRAY KUMAR\Desktop\Programming\PhisingSim\resources\views/campaigns/index.blade.php ENDPATH**/ ?>