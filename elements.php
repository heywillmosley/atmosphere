<?php

/**
 * Item
 */
function item($type = 'default'){ ?>	
  <?php if ($type == 'default'): ?>
	<div class="item-wrapper">
    <div class="item-header">
        <div class="item-container-title">Fresh Produce</div>
        <a href="#" class="btn btn-info">See More</a>
    </div><!-- end item-container-header -->
    <div class="item-container-one-up">
        <div class="item-container">
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Cucurbita_2011_G1.jpg/320px-Cucurbita_2011_G1.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details relative">
                    <div class="item-title"><a href="#">Pumpkins<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Avocado_with_cross_section_edit.jpg/640px-Avocado_with_cross_section_edit.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Egg Plants<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Citrus_paradisi_%28Grapefruit%2C_pink%29_white_bg.jpg/320px-Citrus_paradisi_%28Grapefruit%2C_pink%29_white_bg.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Oranges<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Oranges<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Raspberries05.jpg/320px-Raspberries05.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Raspberries<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
        </div><!-- item-container -->
    </div><!-- end item-container-up -->
</div><!-- end item-wrapper -->

<?php elseif ($type == 'all'): ?>

	<div class="item-wrapper">
    <div class="item-header">
        <div class="item-container-title">Fresh Produce</div>
        <a href="#" class="btn btn-info">See More</a>
    </div><!-- end item-container-header -->
    <div>
        <div class="item-container">
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Cucurbita_2011_G1.jpg/320px-Cucurbita_2011_G1.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details relative">
                    <div class="item-title"><a href="#">Pumpkins<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Avocado_with_cross_section_edit.jpg/640px-Avocado_with_cross_section_edit.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Egg Plants<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Citrus_paradisi_%28Grapefruit%2C_pink%29_white_bg.jpg/320px-Citrus_paradisi_%28Grapefruit%2C_pink%29_white_bg.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Oranges<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Oranges<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Raspberries05.jpg/320px-Raspberries05.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Raspberries<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Cucurbita_2011_G1.jpg/320px-Cucurbita_2011_G1.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details relative">
                    <div class="item-title"><a href="#">Pumpkins<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Avocado_with_cross_section_edit.jpg/640px-Avocado_with_cross_section_edit.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Egg Plants<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Citrus_paradisi_%28Grapefruit%2C_pink%29_white_bg.jpg/320px-Citrus_paradisi_%28Grapefruit%2C_pink%29_white_bg.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Oranges<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Oranges<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
            <div class="item">
                <a href="#" class="item-click"></a>
                <div class="item-cover">
                    <div class="item-cover-darken-on-hover"><a href="#"></a></div>
                    <img class="item-cover-image item-cover-image-landscape" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Raspberries05.jpg/320px-Raspberries05.jpg" alt="" />
                </div><!-- end item-cover -->
                <div class="item-details">
                    <div class="item-title"><a href="#">Raspberries<span class="paragraph-end"></span></a></div>
                    <div class="item-subtitle primary">Subtitle<span class="paragraph-end"></span></div>
                    <div class="item-rating-price-container">
                        <div class="item-rating">
                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </div><!-- end item-rating -->
                        <div class="item-price">
                            <a href="#" class="btn btn-default btn-sm">$19.99</a>
                        </div><!-- end item-price -->
                    </div><!-- end item-price-rating-container -->
                </div><!-- end item-details -->
            </div><!-- end item -->
        </div><!-- item-container -->
    </div><!-- end item-container-up -->
</div><!-- end item-wrapper -->
<?php endif; ?>
<? } // end item

/**
 * Specs
 */
function specs()
{ ?>
	<div class="specs">
    <div class="specs-wrapper">
        <div class="specs-banner"></div>
        <div class="specs-info">
            <div class="specs-cover-container">
                <img class="specs-cover-image" src="http://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/First_Folio.jpg/298px-First_Folio.jpg" alt="" />
            </div><!-- end specs-cover-container -->
            <div class="specs-info-container">
                <div>
                    <div class="specs-document-title">Comedies, Histories, &amp; Tragedies</div>
                    <div class="specs-document-subtitle primary">William Shakespeare</div>
                    <div class="specs-document-subtitle">1623</div>
                </div>
                <div class="specs-actions">
                    <a href="#" class="btn-info btn">$12.99</a>
                    <a href="#" class="btn btn-default">Add to Wishlist</a>
                </div><!-- end specs-action -->
                <div class="specs-info-divider"></div>
                <div class="specs-meta">
                    Pages: 223
                </div>
                <div class="specs-star-rating"></div>
                <div class="specs-sharing-section">

                </div><!-- end specs-sharing-section -->
            </div><!-- end specs-info-container -->
        </div><!-- end specs-info -->
        <div class="specs-section description">
            <div class="specs-section-heading">Description</div>
            <div class="specs-section-body">
                Description text...
            </div><!-- end specs-section-body -->
        </div><!-- end specs-section description -->
    </div><!-- end specs-wrapper -->
    <div class="specs-section-divider"></div>
    <div class="specs-wrapper">
        ...
    </div><!-- end specs-wrapper -->
</div><!-- end specs -->
	
<?php } // end specs()


/**
 * Feature
 */
function feature()
{ ?>
	<div class="feature-container">
    <div class="feature">
        <div class="feature-title">Completely Customizable</div>
        <img class="feature-image" src="http://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Raffael_stcatherina.jpg/441px-Raffael_stcatherina.jpg" alt="" />
        <div class="feature-text">
            <div class="feature-text-container">
                <div class="feature-item-title">The sharpest 7” tablet screen ever.</div>
                <div class="feature-item-content">
                    The world's highest-resolution 7" tablet puts over 2.3 million pixels in the palm of your hand. With 323 pixels packed into every inch, you can read text that’s sharper than the printed page, see images more vivid than the highest quality photo magazine, and watch videos come to life in vibrant 1080p HD. 
                </div><!-- end feature-item-content -->
                <div class="feature-item-title">Sound that surrounds.</div>
                <div class="feature-item-content">
                    Nexus 7 features dual stereo speakers and surround sound powered by Fraunhofer ¹ (the MP3 inventors), so you get rich and immersive audio. Hear it all more clearly with finely tuned volume boost technology that makes dialog and sound crisp and easier on the ears.
                </div><!-- end feature-item-content -->
                <div class="feature-item-title">Fast and smooth.</div>
                <div class="feature-item-content">
                    Nexus 7 is made by ASUS and packs a serious punch. With a quad-core Qualcomm Snapdragon™ S4 Pro processor and 2GB of RAM, everything runs faster, and high-performance rendering ensures 3D graphics are smooth and dynamic. 
                </div><!-- end feature-item-content -->
            </div><!-- end feature-text-container -->
        </div><!-- end feature-text -->
    </div><!-- end feature -->
    <div class="feature feature-left">
        <div class="feature-title">Better than Awesome</div>
        <img class="feature-image" src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Antonio_Bisquert_%281906-1990%29.JPG/386px-Antonio_Bisquert_%281906-1990%29.JPG" alt="" />
        <div class="feature-text">
            <div class="feature-text-container">
                <div class="feature-item-title">The sharpest 7” tablet screen ever.</div>
                <div class="feature-item-content">
                    The world's highest-resolution 7" tablet puts over 2.3 million pixels in the palm of your hand. With 323 pixels packed into every inch, you can read text that’s sharper than the printed page, see images more vivid than the highest quality photo magazine, and watch videos come to life in vibrant 1080p HD. 
                </div><!-- end feature-item-content -->
                <div class="feature-item-title">Sound that surrounds.</div>
                <div class="feature-item-content">
                    Nexus 7 features dual stereo speakers and surround sound powered by Fraunhofer ¹ (the MP3 inventors), so you get rich and immersive audio. Hear it all more clearly with finely tuned volume boost technology that makes dialog and sound crisp and easier on the ears.
                </div><!-- end feature-item-content -->
            </div><!-- end feature-text-container -->
        </div><!-- end feature-text -->
    </div><!-- end feature -->
</div><!-- end feature-container -->
	
<?php } // end feature()


/**
 * Cart
 */
 function cart()
 { ?>
	 <div class="cart">
      <div class="cart-items">
          <form class="cart-items-table custom">
              <div class="cart-item">
                  <div class="cart-item-image-container">
                      <img class="cart-item-image" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Ladies_safety_bicycles1889.gif/320px-Ladies_safety_bicycles1889.gif" alt="" />
                  </div><!-- end cart-item-image -->
                  <div class="cart-item-details">
                      <a href="#"><div class="cart-item-title">Fuji Classic Track Bike Black/Purple 49cm (XS/S)</div></a>
                      <div class="cart-item-edit-customizations">
                          <a href="#">Edit customizations</a>
                      </div>
                      <div class="cart-item-meta">
                          Ships in 5 - 7 business days
                      </div><!-- end cart-item-meta -->
                      <div class="cart-item-quantity-selector">
                          Qty: <input type="text" value="1" />
                      </div><!-- end cart-item-count -->
                  </div><!-- end cart-item-content -->
                  <div class="cart-item-price">$319.95</div>
                  <a class="cart-item-trash-it" href="#"><i class="fa fa-trash-o"></i></a>
              </div><!-- end cart-item -->
              <div class="cart-item">
                  <div class="cart-item-image-container">
                      <img class="cart-item-image" src="http://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/Various_chocolate_types.jpg/320px-Various_chocolate_types.jpg" alt="" />
                  </div><!-- end cart-item-image -->
                  <div class="cart-item-details">
                      <a href="#"><div class="cart-item-title">Gift Box of Premium Chocolates</div></a>
                      <div class="cart-item-edit-customizations">
                          <a href="#">Edit customizations</a>
                      </div>
                      <div class="cart-item-meta">
                          Ships in 5 - 7 business days
                      </div><!-- end cart-item-meta -->
                      <div class="cart-item-quantity-selector">
                           Qty: <input type="text" value="1" />
                      </div><!-- end cart-item-count -->
                  </div><!-- end cart-item-content -->
                  <div class="cart-item-price">$19.99</div>
                  <a class="cart-item-trash-it" href="#"><i class="fa fa-trash-o"></i></a>
              </div><!-- end cart-item -->
              <div class="cart-item">
                  <div class="cart-item-image-container">
                      <img class="cart-item-image" src="http://upload.wikimedia.org/wikipedia/commons/thumb/6/65/XBox_One_-_Gamescom_2013.jpeg/320px-XBox_One_-_Gamescom_2013.jpeg" alt="" />
                  </div><!-- end cart-item-image -->
                  <div class="cart-item-details">
                      <a href="#"><div class="cart-item-title">Xbox One</div></a>
                      <div class="cart-item-edit-customizations">
                          <a href="#">Edit customizations</a>
                      </div>
                      <div class="cart-item-meta">
                          Ships in 5 - 7 business days
                      </div><!-- end cart-item-meta -->
                      <div class="cart-item-quantity-selector">
                          Qty: <input type="text" value="1" />
                      </div><!-- end cart-item-count -->
                  </div><!-- end cart-item-content -->
                  <div class="cart-item-price">$548.99</div>
                  <a class="cart-item-trash-it" href="#"><i class="fa fa-trash-o"></i></a>
              </div><!-- end cart-item -->
          </form><!-- end cart-items-table -->
      </div><!-- end cart-items -->
      <div class="cart-update">
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-times"></i> Clear Shopping Cart</a>
          <a href="#" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Update Shopping Cart</a>
      </div><!-- end cart-update  -->
      <div class="cart-summary-row">
          <div class="cart-summary">
            <div class="cart-discount">
                <div class="cart-discount-heading"><strong>Discount Codes</strong> - Enter your coupon code if you have one.</div>
                  <input type="text" />
                  <a class="btn btn-default btn-sm">Apply Coupon</a>
              </div><!-- end cart-discount -->
              <div class="cart-total-content">
                <div>
                      <span class="cart-subtotal-label">Subtotal</span>
                      <span class="cart-subtotal-price">$888.93</span>
                  </div>
                  <div>
                      <span class="cart-subtotal-label">Grand Total Excl. Tax</span>
                      <span class="cart-subtotal-price">$888.93</span>
                  </div>
                  <div>
                      <span class="cart-subtotal-label">Tax</span>
                      <span class="cart-subtotal-price">$22.22</span>
                  </div>
                  <div>
                      <span class="cart-total-label">Grand Total Incl. Tax</span>
                      <span class="cart-total-price">$953.38</span>
                  </div>
                  <div class="cart-tax-message">
                      Tax and shipping will be calculated at checkout.
                  </div><!-- end cart-tax-message -->
  
              </div><!-- end subtotal-content -->
              <div class="cart-shipping-content">
                  Ships in 1 - 2 business days.
              </div><!-- end shipping-content -->
              <div class="empty-cart-content hide">
                  Your cart is empty.
              </div><!-- end empty-cart-content -->
          </div><!-- end cart-summary -->
      </div><!-- end cart-summary-row -->
      <div class="cart-checkout-actions">
          <a href="#" class="btn btn-default">Continue Shopping</a>
          <a href="#" class="btn btn-info">Proceed to Checkout</a>
      </div><!-- end cart-checkout-actions -->
      <div class="legal-note pam text-right">
          By clicking "Proceed" you agree to the <a href="#">Sale Terms &amp; Agreements.</a>
      </div>
  </div><!-- end cart -->
	 
 <?php } // end cart
 
 
 /**
 * Docs Section
 */
 function docs_section()
 { ?>
<div class="docs-section">
    <h2 class="docs-section-heading">Shop</h2>
    <div class="docs-section-actions">
        <a href="#" class="btn btn-default btn-sm">Action</a>
        <a href="#" class="btn btn-info btn-sm">Action</a>
    </div><!-- end docs-section-actions -->
</div><!-- end docs-section -->
 
 <?php } // end docs_section()
 
 
/**
 * Journey
 */
 function journey()
 { ?>
    
 
 <?php } // end journey()
 
 
/**
 * Journey
 */
 function exhibit()
 { ?>
    <div class="exhibit-container">
      <ul class="exhibit">
          <li>
              <img src="http://upload.wikimedia.org/wikipedia/commons/c/c7/Saturn_north_polar_vortex_false_color.jpg" alt="">
              <div class="exhibit-content darken" style="background-color: transparent;">
                  <div class="exhibit-title" style="color:#FFF">Travel <span class="x-small">the</span> Galaxy</div>
                  <div class="exhibit-subtitle" style="color:#FFF">Transport now available.</div>
                  <a href="#" class="btn btn-default" style="color:#FFF; border-color: #FFF">Pricing Options</a>
              </div><!-- end content -->
          </li>
          <li>
              <img src=" http://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Atlantis_taking_off_on_STS-27.jpg/1024px-Atlantis_taking_off_on_STS-27.jpg" alt="" />
              <div class="exhibit-content darken" style="background-color: transparent;">
                  <div class="exhibit-title" style="color:#FFF">The Future is Here</div>
                  <div class="exhibit-subtitle" style="color:#FFF">Jump aboard the X00R900. It's lightening fast. Literally.</div>
                  <a href="#" class="btn btn-default" style="color:#FFF; border-color:#FFF;">Explore</a>
              </div><!-- end content -->
          </li>
          <li>
              <div class="exhibit-content darken" style="background-color: transparent;">
                  <div class="exhibit-title" style="color:#FFF">Mingle <span class="x-small">With</span> <span class="small">Intergalactic</span> Species</div>
                  <div class="exhibit-subtitle" style="color:#FFF">Rooming available.</div>
  
                  <a href="#" class="btn btn-default" style="color:#FFF; border-color:#FFF;">Learn More</a>
              </div><!-- end content -->
              <img src="http://upload.wikimedia.org/wikipedia/commons/b/bf/NGC_1808HSTCenter.jpg" alt=""> This is a caption!
          </li>
          <li>
              <div class="exhibit-content darken" style="background-color: transparent;">
                  <div class="exhibit-title" style="color:#FFF">Meet <span class="x-small">the</span> Galileo Crew</div>
                  <div class="exhibit-subtitle" style="color:#FFF">Specialist in high speed travel. Masters of war.</div>
  
                  <a href="#" class="btn btn-default" style="color:#FFF; border-color:#FFF;">Learn More</a>
              </div><!-- end content -->
              <img src="http://upload.wikimedia.org/wikipedia/commons/a/a0/S122e007794.jpg" alt=""> This is a caption!
          </li>
  
  
      </ul>
  </div><!-- end exhibit container -->
 
 <?php } // end journey()
 
 
 /**
  * Pretty Page
	*/
	function pretty_page($type = 'default')
	{ ?>
  	<?php if( $type == 'default') : ?>
<div class="pretty-page">
  <h1>Headline</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus porttitor mauris, laoreet ultricies nunc fermentum at. Vestibulum fringilla mi sed ligula pharetra, sed tincidunt mauris imperdiet. Aenean nec nulla ut mi pulvinar tempus. Proin sagittis tortor tortor, sed blandit quam egestas ac. Aliquam ultricies eu felis quis mollis. Duis sodales sit amet leo at volutpat. Nam feugiat leo ac sem consectetur rhoncus. Phasellus venenatis ante non odio pellentesque hendrerit. Duis vehicula velit urna, at congue eros elementum fermentum. Vestibulum at enim convallis, fermentum lectus volutpat, feugiat sapien.<p>

  <p>Phasellus scelerisque quam eget velit iaculis gravida. Mauris ac tortor enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus nec adipiscing justo. Suspendisse nec lorem tortor. Morbi id diam tortor. Sed venenatis porttitor ipsum eget elementum. Proin nec ligula condimentum, ultrices nulla vitae, tempus ligula. Mauris metus lorem, iaculis at dictum vitae, egestas sed purus. Vestibulum id aliquam purus. Phasellus sit amet leo consequat, auctor felis quis, faucibus mi.</p>
</div><!-- end pretty-page -->
		<?php elseif( $type == 'with-docs-section') : ?>
<div class="pretty-page">
  <div class="docs-section">
    <h2 class="docs-section-heading">Shop</h2>
    <div class="docs-section-actions">
        <a href="#" class="btn btn-default btn-sm">Action</a>
        <a href="#" class="btn btn-info btn-sm">Action</a>
    </div><!-- end docs-section-actions -->
</div><!-- end docs-section -->
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi rhoncus porttitor mauris, laoreet ultricies nunc fermentum at. Vestibulum fringilla mi sed ligula pharetra, sed tincidunt mauris imperdiet. Aenean nec nulla ut mi pulvinar tempus. Proin sagittis tortor tortor, sed blandit quam egestas ac. Aliquam ultricies eu felis quis mollis. Duis sodales sit amet leo at volutpat. Nam feugiat leo ac sem consectetur rhoncus. Phasellus venenatis ante non odio pellentesque hendrerit. Duis vehicula velit urna, at congue eros elementum fermentum. Vestibulum at enim convallis, fermentum lectus volutpat, feugiat sapien.<p>

  <p>Phasellus scelerisque quam eget velit iaculis gravida. Mauris ac tortor enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus nec adipiscing justo. Suspendisse nec lorem tortor. Morbi id diam tortor. Sed venenatis porttitor ipsum eget elementum. Proin nec ligula condimentum, ultrices nulla vitae, tempus ligula. Mauris metus lorem, iaculis at dictum vitae, egestas sed purus. Vestibulum id aliquam purus. Phasellus sit amet leo consequat, auctor felis quis, faucibus mi.</p>
</div><!-- end pretty-page -->    
    <?php endif; ?>   
	<?php } // end pretty_page()