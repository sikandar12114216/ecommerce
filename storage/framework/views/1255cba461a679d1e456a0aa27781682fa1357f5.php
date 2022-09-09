<?php $__env->startSection('page_title','Home Page'); ?>
<?php $__env->startSection('container'); ?>

<section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <?php $__currentLoopData = $home_banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
            <li>
              <div class="seq-model">
                <img data-seq src="<?php echo e(asset('storage/media/banner/'.$list->image)); ?>" />
              </div>
              <?php if($list->btn_txt!=''): ?>
              <div class="seq-title">
                <a data-seq target="_blank" href="<?php echo e($list->btn_link); ?>" class="aa-shop-now-btn aa-secondary-btn"><?php echo e($list->btn_txt); ?></a>
              </div>
              <?php endif; ?>
            </li>     
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <div class="col-md-12 no-padding">
                <div class="aa-promo-right">
                  <?php $__currentLoopData = $home_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="<?php echo e(asset('storage/media/category/'.$list->category_image)); ?>" alt="img">                      
                      <div class="aa-prom-content">
                        <h4><a href="<?php echo e(url('category/'.$list->category_slug)); ?>"><?php echo e($list->category_name); ?></a></h4>                        
                      </div>
                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                 <?php $__currentLoopData = $home_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class=""><a href="#cat<?php echo e($list->id); ?>" data-toggle="tab"><?php echo e($list->category_name); ?></a></li>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <?php
                    $loop_count=1;
                    ?>
                    <?php $__currentLoopData = $home_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $cat_class="";
                    if($loop_count==1){
                      $cat_class="in active"; 
                      $loop_count++;
                    }
                    ?>
                    <div class="tab-pane fade <?php echo e($cat_class); ?>" id="cat<?php echo e($list->id); ?>">
                      <ul class="aa-product-catg">
                      <?php if(isset($home_categories_product[$list->id][0])): ?>
                       <?php $__currentLoopData = $home_categories_product[$list->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productArr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="<?php echo e(url('product/'.$productArr->slug)); ?>"><img src="<?php echo e(asset('storage/media/'.$productArr->image)); ?>" alt="<?php echo e($productArr->name); ?>"></a>
                            <a class="aa-add-card-btn" href="javascript:void(0)" onclick="home_add_to_cart('<?php echo e($productArr->id); ?>','<?php echo e($home_product_attr[$productArr->id][0]->size); ?>','<?php echo e($home_product_attr[$productArr->id][0]->color); ?>')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="<?php echo e(url('product/'.$productArr->slug)); ?>"><?php echo e($productArr->name); ?></a></h4>
                              <span class="aa-product-price">Rs <?php echo e($home_product_attr[$productArr->id][0]->price); ?></span><span class="aa-product-price"><del>Rs <?php echo e($home_product_attr[$productArr->id][0]->mrp); ?></del></span>
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
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="#"><img src="<?php echo e(asset('front_assets/img/fashion-banner.jpg')); ?>" alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#tranding" data-toggle="tab">Tranding</a></li>
                <li><a href="#discounted" data-toggle="tab">Discounted</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men featured category -->
                <div class="tab-pane fade in active" id="featured">
                  <ul class="aa-product-catg aa-featured-slider">
                    <!-- start single product item -->
                    
                    
                    <?php if(isset($home_featured_product[$list->id][0])): ?>
                       <?php $__currentLoopData = $home_featured_product[$list->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productArr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="<?php echo e(url('product/'.$productArr->slug)); ?>"><img src="<?php echo e(asset('storage/media/'.$productArr->image)); ?>" alt="<?php echo e($productArr->name); ?>"></a>
                            <a class="aa-add-card-btn" href="javascript:void(0)" onclick="home_add_to_cart('<?php echo e($productArr->id); ?>','<?php echo e($home_product_attr[$productArr->id][0]->size); ?>','<?php echo e($home_product_attr[$productArr->id][0]->color); ?>')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="<?php echo e(url('product/'.$productArr->slug)); ?>"><?php echo e($productArr->name); ?></a></h4>
                              <span class="aa-product-price">Rs <?php echo e($home_featured_product_attr[$productArr->id][0]->price); ?></span><span class="aa-product-price"><del>Rs <?php echo e($home_featured_product_attr[$productArr->id][0]->mrp); ?></del></span>
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
                </div>
                <!-- / popular product category -->
                
                <!-- start tranding product category -->
                <div class="tab-pane fade" id="tranding">
                 <ul class="aa-product-catg aa-tranding-slider">
                    <!-- start single product item -->
                    <?php if(isset($home_tranding_product[$list->id][0])): ?>
                       <?php $__currentLoopData = $home_tranding_product[$list->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productArr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="<?php echo e(url('product/'.$productArr->slug)); ?>"><img src="<?php echo e(asset('storage/media/'.$productArr->image)); ?>" alt="<?php echo e($productArr->name); ?>"></a>
                            <a class="aa-add-card-btn" href="javascript:void(0)" onclick="home_add_to_cart('<?php echo e($productArr->id); ?>','<?php echo e($home_product_attr[$productArr->id][0]->size); ?>','<?php echo e($home_product_attr[$productArr->id][0]->color); ?>')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="<?php echo e(url('product/'.$productArr->slug)); ?>"><?php echo e($productArr->name); ?></a></h4>
                              <span class="aa-product-price">Rs <?php echo e($home_tranding_product_attr[$productArr->id][0]->price); ?></span><span class="aa-product-price"><del>Rs <?php echo e($home_tranding_product_attr[$productArr->id][0]->mrp); ?></del></span>
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
                </div>
                <!-- / featured product category -->

                <!-- start discounted product category -->
                <div class="tab-pane fade" id="discounted">
                  <ul class="aa-product-catg aa-discounted-slider">
                    <!-- start single product item -->
                    
                    <?php if(isset($home_discounted_product[$list->id][0])): ?>
                       <?php $__currentLoopData = $home_discounted_product[$list->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productArr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                          <figure>
                            <a class="aa-product-img" href="<?php echo e(url('product/'.$productArr->slug)); ?>"><img src="<?php echo e(asset('storage/media/'.$productArr->image)); ?>" alt="<?php echo e($productArr->name); ?>"></a>
                            <a class="aa-add-card-btn" href="javascript:void(0)" onclick="home_add_to_cart('<?php echo e($productArr->id); ?>','<?php echo e($home_product_attr[$productArr->id][0]->size); ?>','<?php echo e($home_product_attr[$productArr->id][0]->color); ?>')"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="<?php echo e(url('product/'.$productArr->slug)); ?>"><?php echo e($productArr->name); ?></a></h4>
                              <span class="aa-product-price">Rs <?php echo e($home_discounted_product_attr[$productArr->id][0]->price); ?></span><span class="aa-product-price"><del>Rs <?php echo e($home_discounted_product_attr[$productArr->id][0]->mrp); ?></del></span>
                            </figcaption>
                          </figure>                          
                        </li>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                        <?php else: ?>
                        <li>
                          <figure>
                            No data found
                          </figure>
                        <li>
                        <?php endif; ?>                                                                                     
                  </ul>
                </div>
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  
  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <?php $__currentLoopData = $home_brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="#"><img src="<?php echo e(asset('storage/media/brand/'.$list->image)); ?>" alt="<?php echo e($list->name); ?>"></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->
  <input type="hidden" id="qty" value="1"/>
  <form id="frmAddToCart">
    <input type="hidden" id="size_id" name="size_id"/>
    <input type="hidden" id="color_id" name="color_id"/>
    <input type="hidden" id="pqty" name="pqty"/>
    <input type="hidden" id="product_id" name="product_id"/>           
    <?php echo csrf_field(); ?>
  </form>                  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ecom\my_ecom\resources\views/front/index.blade.php ENDPATH**/ ?>