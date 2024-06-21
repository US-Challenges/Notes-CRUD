<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success alert-dismissible fade show container mx-auto my-2" role="alert">
        <?php echo e($message); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\ulisi\Personal-Projects\crud\resources\views/layouts/partials/message.blade.php ENDPATH**/ ?>