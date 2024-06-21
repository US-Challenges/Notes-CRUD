

<?php $__env->startSection('title', 'Create Note'); ?>

<?php $__env->startSection('body'); ?>
    <form class="container mt-3 p-4" method="POST" action="<?php echo e(route('note.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Note title</label>
            <input type="text" class="form-control" name="title" id="title">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger mt-1" role="alert">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Note description</label>
            <input type="text" class="form-control" name="description" id="description">
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger mt-1" role="alert">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Save note</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ulisi\Personal-Projects\crud\resources\views/note/create.blade.php ENDPATH**/ ?>