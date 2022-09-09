<?php $__env->startSection('page_title','Order Placed'); ?>
<?php $__env->startSection('container'); ?>

  <!-- product category -->
<section id="aa-product-category">
   <div class="container">
      <div class="row" style="text-align:center;">
        <br/><br/><br/>
            <h2>Your order has been placed</h2>
            <h2>Order Id:- <?php echo e(session()->get('ORDER_ID')); ?></h2>
        <br/><br/><br/>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ecom\my_ecom\resources\views/front/order_placed.blade.php ENDPATH**/ ?>