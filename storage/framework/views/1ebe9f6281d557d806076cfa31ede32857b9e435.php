
<?php $__env->startSection('content'); ?>
  <form method="post" action="/return_complete">
   <?php echo csrf_field(); ?>
   <tr><th>資料ID </th><td><input type="text"
     name="user_email" required></td></tr>
     <input type="button" value="＋">
    <input type="submit" value="返却">
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/returns.blade.php ENDPATH**/ ?>