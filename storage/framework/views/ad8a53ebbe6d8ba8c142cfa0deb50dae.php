<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Create New Campaign</h2>
    <form action="<?php echo e(route('campaigns.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label>Subject:</label>
            <input type="text" name="subject" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email Body:</label>
            <textarea name="email_body" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label>Phishing Link:</label>
            <input type="url" name="phishing_link" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create Campaign</button>
        <a href="<?php echo e(route('campaigns.index')); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\PhisingSim\resources\views/campaigns/create.blade.php ENDPATH**/ ?>