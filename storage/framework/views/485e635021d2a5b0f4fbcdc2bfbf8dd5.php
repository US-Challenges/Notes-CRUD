

<?php $__env->startSection('title', 'Notes'); ?>

<?php $__env->startSection('body'); ?>
    <div class="container mx-auto mt-3 p-4 row">
        <?php $__empty_1 = true; $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="card col-12 col-sm-6 col-md-4">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($note->title); ?></h5>
                    <p class="card-text"><?php echo e($note->description); ?></p>
                    <a href="<?php echo e(route('note.edit', ['note_id' => $note->id])); ?>" class="btn btn-primary">Edit note</a>
                    <form method="POST" action="<?php echo e(route('note.destroy', ['note_id' => $note->id])); ?>" class="d-inline">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger">Remove note</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h2 class="text-center">No data.</h2>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ulisi\Personal-Projects\crud\resources\views/note/index.blade.php ENDPATH**/ ?>