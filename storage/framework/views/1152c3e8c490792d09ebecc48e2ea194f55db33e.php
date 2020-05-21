

 <?php $__env->startSection('content'); ?>
 <!-- 検索ボックス -->
 <form method="post" action="/member_search_result">
  <?php echo csrf_field(); ?>
<input type="text" name="user_email" value="<?php echo e($user_email['user_email']); ?>" required>
   <input type="submit" value="検索">
 </form>
<!-- <div><?php echo e($user_email['user_email']); ?></div> -->
 検索結果

  <table>
    <tr><th>会員ID</th><td></td></tr>
    <tr><th>名前</th><td></td></tr>
    <tr><th>生年月日</th><td></td></tr>
    <tr><th>住所</th><td></td></tr>
    <tr><th>電話番号</th><td></td></tr>
    <tr><th>メールアドレス</th><td></td></tr>
  </table>
  <form method="post" action="/member_edit">
   <input type="submit" value="編集する">
    </form>
  <form method="post" action="/member_withdrawal">
   <input type="submit" value="退会する">
   </form>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.webbookapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/member_search_result.blade.php ENDPATH**/ ?>