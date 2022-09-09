<?php $__env->startSection('page_title','Search'); ?>
<?php $__env->startSection('container'); ?>

  <!-- product category -->
<section id="aa-product-category">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-8">
            <div class="aa-product-catg-content">
               <div class="aa-product-catg-body">
                  <ul class="aa-product-catg">
                     <!-- start single product item -->
                     
                     <?php if(isset($product[0])): ?>
                       <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productArr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                        <li>
                          <figure>
                            <a class="aa-product-img" href="<?php echo e(url('product/'.$productArr->slug)); ?>"><img src="<?php echo e(asset('storage/media/'.$productArr->image)); ?>" alt="<?php echo e($productArr->name); ?>"></a>
                            <a class="aa-add-card-btn" href="javascript:void(0)" onclick="home_add_to_cart('<?php echo e($productArr->id); ?>','<?php echo e($product_attr[$productArr->id][0]->size); ?>','<?php echo e($product_attr[$productArr->id][0]->color); ?>')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="<?php echo e(url('product/'.$productArr->slug)); ?>"><?php echo e($productArr->name); ?></a></h4>
                              <span class="aa-product-price">Rs <?php echo e($product_attr[$productArr->id][0]->price); ?></span><span class="aa-product-price"><del>Rs <?php echo e($product_attr[$productArr->id][0]->mrp); ?></del></span>
                            </figcaption>
                          </figure>                          
                        </li>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        <?php else: ?>
                        <li>
                          <figure>
                            No data found
                          <figure>
                        <li>
                        <?php endif; ?>
                     
                  </ul>
                  <!-- quick view modal -->                  
               </div>
            </div>
         </div>
         
      </div>
   </div>
</section>
<!-- / product category -->

<input type="hidden" id="qty" value="1"/>
  <form id="frmAddToCart">
    <input type="hidden" id="size_id" name="size_id"/>
    <input type="hidden" id="color_id" name="color_id"/>
    <input type="hidden" id="pqty" name="pqty"/>
    <input type="hidden" id="product_id" name="product_id"/>           
    <?php echo csrf_field(); ?>
  </form>  

 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ecom\my_ecom\resources\views/front/search.blade.php ENDPATH**/ ?>