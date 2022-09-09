<?php $__env->startSection('page_title','Category'); ?>
<?php $__env->startSection('container'); ?>

  <!-- product category -->
<section id="aa-product-category">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
            <div class="aa-product-catg-content">
               <div class="aa-product-catg-head">
                  <div class="aa-product-catg-head-left">
                     <form action="" class="aa-sort-form">
                        <label for="">Sort by</label>
                        <select name="" onchange="sort_by()" id="sort_by_value">
                           <option value="" selected="Default">Default</option>
                           <option value="name">Name</option>
                           <option value="price_desc">Price - Desc</option>
                           <option value="price_asc">Price - Asc</option>
                           <option value="date">Date</option>
                        </select>
                     </form>
                     <?php echo e($sort_txt); ?>

                  </div>
                  <div class="aa-product-catg-head-right">
                     <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                     <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                  </div>
               </div>
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
         <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
            <aside class="aa-sidebar">
               <!-- single sidebar -->
               <div class="aa-sidebar-widget">
                  <h3>Category</h3>
                  <ul class="aa-catg-nav">
                     <?php $__currentLoopData = $categories_left; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_left): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($slug==$cat_left->category_slug): ?>
                           <li><a href="<?php echo e(url('category/'.$cat_left->category_slug)); ?>" class="left_cat_active"><?php echo e($cat_left->category_name); ?></a></li>
                        <?php else: ?>
                           <li><a href="<?php echo e(url('category/'.$cat_left->category_slug)); ?>"><?php echo e($cat_left->category_name); ?></a></li>
                        <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
               </div>
               <div class="aa-sidebar-widget">
                  <h3>Shop By Price</h3>
                  <!-- price range -->
                  <div class="aa-sidebar-price-range">
                     <form action="">
                        <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                        </div>
                        <span id="skip-value-lower" class="example-val">30.00</span>
                        <span id="skip-value-upper" class="example-val">100.00</span>
                        <button class="aa-filter-btn" type="button" onclick="sort_price_filter()">Filter</button>
                     </form>
                  </div>
               </div>
               <!-- single sidebar -->
               <div class="aa-sidebar-widget">
                  <h3>Shop By Color</h3>
                  <div class="aa-color-tag">
                     <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                     <?php if(in_array($color->id,$colorFilterArr)): ?>
                        <a class="aa-color-<?php echo e(strtolower($color->color)); ?> active_color" href="javascript:void(0)" onclick="setColor('<?php echo e($color->id); ?>','1')"></a>
                     <?php else: ?>
                        <a class="aa-color-<?php echo e(strtolower($color->color)); ?>" href="javascript:void(0)" onclick="setColor('<?php echo e($color->id); ?>','0')"></a>
                     <?php endif; ?>


                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
               </div>
            </aside>
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

  <form id="categoryFilter">
    <input type="hidden" id="sort" name="sort" value="<?php echo e($sort); ?>"/>
    <input type="hidden" id="filter_price_start" name="filter_price_start" value="<?php echo e($filter_price_start); ?>"/>
    <input type="hidden" id="filter_price_end" name="filter_price_end" value="<?php echo e($filter_price_end); ?>"/>
    <input type="hidden" id="color_filter" name="color_filter" value="<?php echo e($color_filter); ?>"/>
  </form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ecom\my_ecom\resources\views/front/category.blade.php ENDPATH**/ ?>