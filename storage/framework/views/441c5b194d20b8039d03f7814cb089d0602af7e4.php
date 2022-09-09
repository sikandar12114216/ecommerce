<?php $__env->startSection('page_title',$product[0]->name); ?>
<?php $__env->startSection('container'); ?>


  <!-- catg header banner section -->
  <!--<section id="aa-catg-head-banner">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>T-Shirt</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>         
          <li><a href="#">Product</a></li>
          <li class="active">T-shirt</li>
        </ol>
      </div>
     </div>
   </div>
  </section>-->
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="<?php echo e(asset('storage/media/'.$product[0]->image)); ?>" class="simpleLens-lens-image"><img src="<?php echo e(asset('storage/media/'.$product[0]->image)); ?>" class="simpleLens-big-image"></a></div>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                          <a data-big-image="<?php echo e(asset('storage/media/'.$product[0]->image)); ?>" data-lens-image="<?php echo e(asset('storage/media/'.$product[0]->image)); ?>" class="simpleLens-thumbnail-wrapper" href="#"><img src="<?php echo e(asset('storage/media/'.$product[0]->image)); ?>" width="70px">
                          </a>   

                          <?php if(isset($product_images[$product[0]->id][0])): ?>

                            <?php $__currentLoopData = $product_images[$product[0]->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <a data-big-image="<?php echo e(asset('storage/media/'.$list->images)); ?>" data-lens-image="<?php echo e(asset('storage/media/'.$list->images)); ?>" class="simpleLens-thumbnail-wrapper" href="#"><img src="<?php echo e(asset('storage/media/'.$list->images)); ?>" width="70px">
                            </a>  
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          <?php endif; ?>
                                                   
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3><?php echo e($product[0]->name); ?></h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">Rs <?php echo e($product_attr[$product[0]->id][0]->price); ?>&nbsp;&nbsp;</span>
                      <span class="aa-product-view-price"><del>Rs <?php echo e($product_attr[$product[0]->id][0]->mrp); ?></del></span>

                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>

                       <?php if($product[0]->lead_time!=''): ?>
                       <p class="lead_time">
                       <?php echo e($product[0]->lead_time); ?>

                       </p>
                       <?php endif; ?> 

                    </div>
                    <p>
                    <?php echo $product[0]->short_desc; ?>

                    </p>

                    <?php if($product_attr[$product[0]->id][0]->size_id>0): ?>
                    <h4>Size</h4>
                    <div class="aa-prod-view-size">
                    <?php
                      $arrSize=[];
                      foreach($product_attr[$product[0]->id] as $attr){
                        $arrSize[]=$attr->size;
                      }  
                      $arrSize=array_unique($arrSize);
                     
                    ?>
                    <?php $__currentLoopData = $arrSize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  

                    <?php if($attr!=''): ?>
                      <a href="javascript:void(0)" onclick="showColor('<?php echo e($attr); ?>')" id="size_<?php echo e($attr); ?>" class="size_link"><?php echo e($attr); ?></a>
                      <?php endif; ?>  

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </div>
                    <?php endif; ?>
                    
                    
                    <?php if($product_attr[$product[0]->id][0]->color_id>0): ?>
                    
                    <h4>Color</h4>
                    <div class="aa-color-tag">
                      <?php $__currentLoopData = $product_attr[$product[0]->id]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                      
                      <?php if($attr->color!=''): ?>

                      <a href="javascript:void(0)" class="aa-color-<?php echo e(strtolower($attr->color)); ?> product_color size_<?php echo e($attr->size); ?>"  onclick=change_product_color_image("<?php echo e(asset('storage/media/'.$attr->attr_image)); ?>","<?php echo e($attr->color); ?>")></a>
                      <?php endif; ?>  

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </div>
                    <?php endif; ?>    

                    <div class="aa-prod-quantity">
                      <form action="">
                        <select id="qty" name="qty">
                          <?php for($i=1;$i<11;$i++): ?>
                            <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                          <?php endfor; ?>
                        </select>
                      </form>
                      <p class="aa-prod-category">
                      Model: <a href="#"><?php echo e($product[0]->model); ?></a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="javascript:void(0)" onclick="add_to_cart('<?php echo e($product[0]->id); ?>','<?php echo e($product_attr[$product[0]->id][0]->size_id); ?>','<?php echo e($product_attr[$product[0]->id][0]->color_id); ?>')">Add To Cart</a>
                    </div>
                    <div id="add_to_cart_msg"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#technical_specification" data-toggle="tab">Technical Specification</a></li>
                <li><a href="#uses" data-toggle="tab">Uses</a></li>
                <li><a href="#warranty" data-toggle="tab">Warranty</a></li>
                <li><a href="#review" data-toggle="tab">Reviews</a></li>                
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <?php echo $product[0]->desc; ?>

                </div>
                <div class="tab-pane fade" id="technical_specification">
                  <?php echo $product[0]->technical_specification; ?>

                </div>
                <div class="tab-pane fade" id="uses">
                  <?php echo $product[0]->uses; ?>

                </div>
                <div class="tab-pane fade" id="warranty">
                  <?php echo $product[0]->warranty; ?>

                </div>
                <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>2 Reviews for T-Shirt</h4> 
                   <ul class="aa-review-nav">

                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                      
                   </ul>
                   <h4>Add a review</h4>
                   <div class="aa-your-rating">
                     <p>Your Rating</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                   <!-- review form -->
                   <form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Your Review</label>
                        <textarea class="form-control" rows="3" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>  
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      </div>

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                 </div>
                </div>            
              </div>
            </div>
            <!-- Related product -->
            <div class="aa-product-related-item">
              <h3>Related Products</h3>
              <ul class="aa-product-catg aa-related-item-slider">
               
              <?php if(isset($related_product[0])): ?>
                    <?php $__currentLoopData = $related_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productArr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <figure>
                        <a class="aa-product-img" href="<?php echo e(url('product/'.$productArr->slug)); ?>"><img src="<?php echo e(asset('storage/media/'.$productArr->image)); ?>" alt="<?php echo e($productArr->name); ?>"></a>
                        <a class="aa-add-card-btn" href="<?php echo e(url('product/'.$productArr->slug)); ?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                            <h4 class="aa-product-title"><a href="<?php echo e(url('product/'.$productArr->slug)); ?>"><?php echo e($productArr->name); ?></a></h4>
                            <span class="aa-product-price">Rs <?php echo e($related_product_attr[$productArr->id][0]->price); ?></span><span class="aa-product-price"><del>Rs <?php echo e($related_product_attr[$productArr->id][0]->mrp); ?></del></span>
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
          </div>
        </div>
      </div>
    </div>
  </section>
  <form id="frmAddToCart">
    <input type="hidden" id="size_id" name="size_id"/>
    <input type="hidden" id="color_id" name="color_id"/>
    <input type="hidden" id="pqty" name="pqty"/>
    <input type="hidden" id="product_id" name="product_id"/>           
    <?php echo csrf_field(); ?>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ecom\my_ecom\resources\views/front/product.blade.php ENDPATH**/ ?>