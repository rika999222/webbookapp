
<?php $__env->startSection('content'); ?>
  <form method="post" action="/member_search_result">
   <?php echo csrf_field(); ?>
   <input type="text" name="user_email" required>
    <input type="submit" value="検索">
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/member_search.blade.php ENDPATH**/ ?>