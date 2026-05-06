<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Phishing Logs</h2>
        <table class="table">
            <thead>
                <th>Email</th>
                <th>IP Address</th>
                <th>User Agent</th>
                <th>Date</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($log->email); ?></td>
                        <td><?php echo e($log->ip_address); ?></td>
                        <td><?php echo e($log->user_agent); ?></td>
                        <td><?php echo e($log->created_at); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\PhisingSim\resources\views/dashboard.blade.php ENDPATH**/ ?>