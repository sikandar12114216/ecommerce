<?php $__env->startSection('page_title','Cart Page'); ?>
<?php $__env->startSection('container'); ?>

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->         

  <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
              <?php if(isset($list[0])): ?>
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr id="cart_box<?php echo e($data->attr_id); ?>">
                        <td><a class="remove" href="javascript:void(0)" onclick="deleteCartProduct('<?php echo e($data->pid); ?>','<?php echo e($data->size); ?>','<?php echo e($data->color); ?>','<?php echo e($data->attr_id); ?>')"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="<?php echo e(url('product/'.$data->slug)); ?>"><img src="<?php echo e(asset('storage/media/'.$data->image)); ?>" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="<?php echo e(url('product/'.$data->slug)); ?>"><?php echo e($data->name); ?></a>
                        <?php if($data->size!=''): ?>
                        <br/>SIZE: <?php echo e($data->size); ?>

                        <?php endif; ?>
                        <?php if($data->color!=''): ?>
                        <br/>COLOR: <?php echo e($data->color); ?>

                        <?php endif; ?>
                        </td>
                        <td>Rs <?php echo e($data->price); ?></td>
                        <td><input id="qty<?php echo e($data->attr_id); ?>" class="aa-cart-quantity" type="number" value="<?php echo e($data->qty); ?>" onchange="updateQty('<?php echo e($data->pid); ?>','<?php echo e($data->size); ?>','<?php echo e($data->color); ?>','<?php echo e($data->attr_id); ?>','<?php echo e($data->price); ?>')"></td>
                        <td id="total_price_<?php echo e($data->attr_id); ?>">Rs <?php echo e($data->price*$data->qty); ?></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          
                          <a class="aa-cartbox-checkout aa-primary-btn" href="<?php echo e(url('/checkout')); ?>"><input class="aa-cart-view-btn" type="button" value="Checkout"></a>
                        </td>
                      </tr>
                      </tbody>
                  </table>
                </div>
                <?php else: ?>
                  <h3>Cart empty</h3>
                <?php endif; ?>  
             </form>
             <!-- Cart Total view -->
           
		   </div>
         </div>
       </div>
     </div>
   </div>
 </section>   
 <input type="hidden" id="qty" value="1"/>
  <form id="frmAddToCart">
    <input type="hidden" id="size_id" name="size_id"/>
    <input type="hidden" id="color_id" name="color_id"/>
    <input type="hidden" id="pqty" name="pqty"/>
    <input type="hidden" id="product_id" name="product_id"/>           
    <?php echo csrf_field(); ?>
  </form>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ecom\my_ecom\resources\views/front/cart.blade.php ENDPATH**/ ?>