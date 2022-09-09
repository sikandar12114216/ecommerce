<?php $__env->startSection('page_title','Checkout'); ?>
<?php $__env->startSection('container'); ?>

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->         

  
  <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form id="frmPlaceOrder">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <?php if(session()->has('FRONT_USER_LOGIN')==null): ?>
                    <input type="button" value="Login" class="aa-browse-btn" data-toggle="modal" data-target="#login-modal">  
                    <br/><br/>
                    OR
                    <br/><br/>
                    <?php endif; ?>
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion">
                            User Details Address
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-4">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder=" Name*" value="<?php echo e($customers['name']); ?>" name="name" required>
                              </div>                             
                            </div>
                            <div class="col-md-4">
                              <div class="aa-checkout-single-bill">
                                <input type="email" placeholder="Email Address*" value="<?php echo e($customers['email']); ?>" name="email" required>
                              </div>                             
                            </div>
                            <div class="col-md-4">
                              <div class="aa-checkout-single-bill">
                                <input type="tel" placeholder="Phone*" value="<?php echo e($customers['mobile']); ?>" name="mobile" required>
                              </div>
                            </div>
                          </div> 
                            
                            
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea cols="8" rows="3" name="address" required placeholder="Enter Address*"><?php echo e($customers['address']); ?></textarea>
                              </div>                             
                            </div>                            
                          </div>   
                          <div class="row">
                            <div class="col-md-4">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="City / Town*" value="<?php echo e($customers['city']); ?>" name="city" required>
                              </div>
                            </div>
							<div class="col-md-4">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="State*" value="<?php echo e($customers['state']); ?>" name="state" required>
                              </div>                             
                            </div>
                            <div class="col-md-4">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Postcode / ZIP*" value="<?php echo e($customers['zip']); ?>" name="zip" required>
                              </div>
                            </div>
                          </div>   
                                       
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Summary</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $totalPrice=0;
                        ?>
                        <?php $__currentLoopData = $cart_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php 
                        $totalPrice=$totalPrice+($list->price*$list->qty)
                        ?>

                        <tr>
                          <td><?php echo e($list->name); ?>  <strong> x  <?php echo e($list->qty); ?></strong>
                          <br/>
                          <span class="cart_color"><?php echo e($list->color); ?></span>
                          </td>
                          <td><?php echo e($list->price*$list->qty); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                      <tfoot>
                        <tr class="hide show_coupon_box">
                          <th>Coupon Code <a href="javascript:void(0)" onclick="remove_coupon_code()" class="remove_coupon_code_link">Remove</a></th>
                          <td id="coupon_code_str"></td>
                        </tr>
                         <tr>
                          <th>Total</th>
                          <td id="total_price">INR <?php echo e($totalPrice); ?></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <h4>Coupon Code</h4>
                    <div class="aa-payment-method coupon_code">                    
                      <input type="text" placeholder="Coupon Code" class="aa-coupon-code apply_coupon_code_box" name="coupon_code" id="coupon_code">
                      <input type="button" value="Apply Coupon" class="aa-browse-btn apply_coupon_code_box" onclick="applyCouponCode()">   
                      <div id="coupon_code_msg"></div>           
                    </div>
                  <br/>
                  <h4>Payment Method</h4>
                  <div class="aa-payment-method">                    
                    <label for="cod"><input type="radio" id="cod" name="payment_type" value="COD" checked> Cash on Delivery </label>
                    <label for="instamojo">
                    <input type="radio" id="instamojo" name="payment_type" value="Gateway"> Via Instamojo </label>
                    
                    <input type="submit" value="Place Order" class="aa-browse-btn" id="btnPlaceOrder">                
                  </div>

                  <div id="order_place_msg"></div>
                </div>
              </div>
            </div>
            <?php echo csrf_field(); ?>  
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ecom\my_ecom\resources\views/front/checkout.blade.php ENDPATH**/ ?>