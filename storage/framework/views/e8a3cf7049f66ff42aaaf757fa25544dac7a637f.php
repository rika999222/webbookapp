

<?php $__env->startSection('title', 'トップメニュー画面'); ?>

<?php $__env->startSection('content'); ?>
<button name="member_resister" onclick="location.href='./member_resister'">会員登録</button>
<button name="member_search" onclick="location.href='./member_search'">会員検索</button>
<button name="document_search" onclick="location.href='./document_search'">資料検索</button>
<button name="document_add" onclick="location.href='/.document_add'">資料追加</button>
<button name="document_add" onclick="location.href='/.circulation'">貸出</button>
<button name="returns" onclick="location.href='/.returns'">返却</button>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.webbookapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/after_login_top.blade.php ENDPATH**/ ?>