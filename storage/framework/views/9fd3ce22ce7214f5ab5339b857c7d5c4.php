

<?php $__env->startSection('title', 'Edit Note'); ?>

<?php $__env->startSection('body'); ?>
    <form class="container mt-3 p-4" method="POST" action="<?php echo e(route('note.update', ['note_id' => $note->id])); ?>">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Note title</label>
            <input type="text" class="form-control" name="title" id="title" value="<?php echo e($note->title); ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Note description</label>
            <input type="text" class="form-control" name="description" id="description" value="<?php echo e($note->description); ?>">
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Update note</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ulisi\Personal-Projects\crud\resources\views/note/edit.blade.php ENDPATH**/ ?>