
<?php $__env->startSection('content'); ?>
<?php $__errorArgs = ['catalog_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<p><?php echo e($message); ?></p>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<p><?php echo e($msg); ?></p>
  <form method="post" action="/return_complete">
   <?php echo csrf_field(); ?>
   <tr><th>資料ID </th><td><input type="text"
     name="catalog_id"></td></tr>
     <input type="button" value="＋">
    <input type="submit" value="返却">
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/returns/returns.blade.php ENDPATH**/ ?>