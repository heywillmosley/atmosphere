<?php function root_uri(){ return''; } function root_url(){ echo ''; } require_once(root_uri().'elements.php'); // Define root path ?>
<?php require_once (root_url() . 'header.php'); ?>

<h1>Atmosphere makes designing responsive online stores and websites dead simple</h1>
<p class="lead">A fine mix of Super Amazing, <a href="http://getbootstrap.com">Bootstrap</a> &amp; <a href="http://foundation.zurb.com">Foundation</a>.</p>
<div class="mbl">
    <a href="https://github.com/superamazing/atmosphere/archive/master.zip" class="btn btn-primary">Download Atmosphere</a>
    <a href="#docs" class="btn btn-info">Docs</a>
</div><!-- end mbl -->
<div id="docs" class="docs-section">
    <h1 class="docs-section-heading">Docs</h1>
    <div class="section-heading">Setup</div>
    <div class="panel">
      <div id="typography" class="docs-section">
            <h1 id="getting-started" class="docs-section-heading">Getting Started with Atmosphere</h1>
            <p>Simply download Atmosphere.</p>
            <h2>HTML Markup</h2>
            <div class="highlight">
              <pre class="brush: xml">
                  &lt;!doctype html>
                    &lt;!--[if lt IE 7]> &lt;html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"> &lt;![endif]-->
                    &lt;!--[if IE 7]>    &lt;html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> &lt;![endif]-->
                    &lt;!--[if IE 8]>    &lt;html class="no-js lt-ie9 ie8" lang="en"> &lt;![endif]-->
                    &lt;!--[if IE 9]>    &lt;html class="no-js lt-ie10 ie9" lang="en"> &lt;![endif]-->
                    &lt;!--[if gt IE 9]>&lt;!--> &lt;html class="no-js" lang="en"> &lt;!--&lt;![endif]-->
                    
                    &lt;head>
                        &lt;meta charset="utf-8">
                        &lt;!-- &lt;meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> in HTACCESS FILE to Avoid Validation Error -->
                        &lt;title>Atmosphere&lt;/title>
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1" />
                        &lt;meta name="keywords" content=""/>  
                        &lt;meta name="author" content="William Mosley, III &lt;will@livesuperamazing.com>">
                    
                        &lt;!-- Favicons -->
                        &lt;link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicons/favicon-114.png">
                        &lt;link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicons/favicon-72.png">
                        &lt;link rel="shortcut icon" href="img/favicons/favicon-16.png">
                        &lt;!--[if IE]>&lt;link rel="shortcut icon" href="img/favicons/favicon-16.icon">&lt;![endif]-->
                        &lt;!-- or, set /favicon-16.ico for IE10 win -->
                        
                        &lt;link rel="stylesheet" type="text/css" href="dist/css/atmosphere-site.min.css">
                        &lt;script language="javascript" type="text/javascript" src="dist/js/site-header.min.js">&lt;/script>
                    &lt;/head>        
                    
                    &lt;body>
                    
                        &lt;!-- body content here -->
                    
                        &lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">&lt;/script>
                        &lt;script src="dist/js/site-footer.min.js">&lt;/script>
                        &lt;script>
                          $(document).foundation();
                        &lt;/script>
                    &lt;/body>
                    &lt;/html>
                </pre>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
    </div><!-- end panel -->
    <div class="section-heading">CSS</div>
    <div class="panel">
        <div id="typography" class="docs-section">
            <h1 class="docs-section-heading">Typography</h1>
            <h2 id="typography-headings">Headings</h2>
            <p>Styles for <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>.</p>
            <div class="example">
                <h1>h1. Super Amazing Heading</h1>
                <h2>h2. Super Amazing Heading</h2>
                <h3>h3. Super Amazing Heading</h3>
                <h4>h4. Super Amazing Heading</h4>
                <h5>h5. Super Amazing Heading</h5>
                <h6>h6. Super Amazing Heading</h6>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                    <h1>h1. Super Amazing Heading</h1>
                    <h2>h2. Super Amazing Heading</h2>
                    <h3>h3. Super Amazing Heading</h3>
                    <h4>h4. Super Amazing Heading</h4>
                    <h5>h5. Super Amazing Heading</h5>
                    <h6>h6. Super Amazing Heading</h6>

                ]]></script>
            </div><!-- end highlight -->
            <h2 id="typography-body-copy">Body Copy/Paragraphs</h2>
            <p>All body and paragraph copy is set to a base font size of <code>14px</code>s.
            <div class="example">
                <p>'Please would you tell me,' said Alice, a little timidly, for she was not quite sure whether it was good manners for her to speak first, 'why your cat grins like that?'</p>
                <p>'It's a Cheshire cat,' said the Duchess, 'and that's why. Pig!</p>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                    <p>...</p>

                ]]></script>
            </div><!-- end highlight -->
            <h3>Do even more with paragraphs</h3>
            <p>Atmosphere gives writers better control over their copy. Show a lead or deemphasize a paragraph.</p>
            <div class="example">
                <p class="lead">'Please would you tell me,' said Alice, a little timidly, for she was not quite sure whether it was good manners for her to speak first, 'why your cat grins like that?'</p>
                <p>'It's a Cheshire cat,' said the Duchess, 'and that's why. Pig!</p>
                <p class="secondary">'She said the last word with such sudden violence that Alice quite jumped; but she saw in another moment that it was addressed to the baby, and not to her, so she took courage, and went on again:—</p>
                <p class="tertiary">'I didn't know that Cheshire cats always grinned; in fact, I didn't know that cats COULD grin.'</p>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                    <p class="lead">'Please would you tell me,' said Alice, a little timidly, for she was not quite sure whether it was good manners for her to speak first, 'why your cat grins like that?'</p>
                    <p>'It's a Cheshire cat,' said the Duchess, 'and that's why. Pig!</p>
                    <p class="secondary">'She said the last word with such sudden violence that Alice quite jumped; but she saw in another moment that it was addressed to the baby, and not to her, so she took courage, and went on again:—</p>
                    <p class="tertiary">'I didn't know that Cheshire cats always grinned; in fact, I didn't know that cats COULD grin.'</p>

                ]]></script>
            </div><!-- end highlight -->
            <h2 id="typography-links">Links</h2>
            <p>Make links with the <code>&lt;a&gt;</code> tag.</p>
            <div class="example">
                <div>Read more about <a href="#">Alice &amp; Wonderland</a>. The default color is Atmosphere's primary color. This is easily changeable by overriding the <code>a</code> tag</div>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <a href="#">...</a>
                ]]></script>
            </div><!-- end highlight -->
            <h2 id="typography-captions">Captions</h2>
            <p>This is the description of what this element is and does.</p>
            <div class="example">
                <div class="caption">This is a caption</div>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <div class="caption">This is a caption</div>
                ]]></script>
            </div><!-- end highlight -->
            <h2 id="typography-sup-sub">Sup &amp; Sub</h2>
            <p><code>Sup</code> and <code>Sub</code> tags are used for superscripted and subscripted text like exponents and footnotes.</p>
            <div class="example">
                <p>Sample copy<sup>Superscript</sup></p>
                <p>H<sub>2</sub>0</p>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <sup>Superscript</sup>
                   <sub>Subscript</sub>
                ]]></script>
            </div><!-- end highlight -->
            <h2 id="typography-emphasis">Emphasis</h2>
            <h3>Small Text</h3>
            <p>De-emphasize text.</p>
            <div class="example">
                <small>'They all can,' said the Duchess; 'and most of 'em do.'</small>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <small>...</small>
                ]]></script>
            </div><!-- end highlight -->
            <h3>Bold Text</h3>
            <p>Make text bold.</p>
            <div class="example">
                <strong>'I don't know of any that do,' Alice said very politely, feeling quite pleased to have got into a conversation.</strong>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <strong>...</strong>
                ]]></script>
            </div><!-- end highlight -->
            <h3>Italic Text</h3>
            <p>Make text italic.</p>
            <div class="example">
                <em>'You don't know much,' said the Duchess; 'and that's a fact.'</em>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <em>...</em>
                ]]></script>
            </div><!-- end highlight -->
            <div id="grid" class="docs-section">
                <h1 class="docs-section-heading" id="grid">Grid</h1>
                <p>Atmosphere uses Bootstrap's popular grid system. Get the documentation for it <a href="http://getbootstrap.com/css/#grid">here</a>.</p>
                
            </div><!-- end doc-section -->
        </div><!-- end docs-section -->
    </div><!-- end panel -->
    <div class="section-heading">Components</div>
    <div class="panel">
      <div class="docs-section">
          <h1 id="item" class="docs-section-heading">Item</h1>
            <p>Creates element that shows basic details about an item ( or product ) such as thumbnail, title, and price. Can be combined to make a product or book catalog.</p>
            <h2>Show one line of products, and click more to see more</h2>
            <div class="example">
                <?php item(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
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
                ]]></script>
            </div><!-- end highlight -->
            <h2>Show all Items</h2>
            <div class="example">
            	<?php item('all'); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
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
                        </div><!-- item-container -->
                    </div><!-- end item-container-up -->
                </div><!-- end item-wrapper -->
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
        <div class="docs-section">
          <h1 id="specs" class="docs-section-heading">Specs</h1>
            <p>Specs are informative blocks used to describe a product, book, or any element that needs more than a basic description.</p>
            <div class="example">
                <?php specs(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <div class="specs">
											<div class="specs-wrapper">
												<div class="specs-banner"></div>
												<div class="specs-info">
													<div class="specs-cover-container">
														<img class="specs-cover-image" src="path/to/image" alt="" />
													</div><!-- end specs-cover-container -->
													<div class="specs-info-container">
														<div>
															<div class="specs-document-title">Title</div>
															<div class="specs-document-subtitle primary">Author</div>
															<div class="specs-document-subtitle">2006</div>
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
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
        <div class="docs-section">
          <h1 id="feature" class="docs-section-heading">Feature</h1>
            <p>Feature creates an element to showcase a product or feature. Similar to Apple's showcase of their products. @Dependencies Shadow</p>
            <div class="example">
                <?php feature(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   &lt;div class=&quot;feature-container&quot;&gt;
                    &lt;div class=&quot;feature&quot;&gt;
                        &lt;div class=&quot;feature-title&quot;&gt;Completely Customizable&lt;/div&gt;
                        &lt;img class=&quot;feature-image&quot; src=&quot;http://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Raffael_stcatherina.jpg/441px-Raffael_stcatherina.jpg&quot; alt=&quot;&quot; /&gt;
                        &lt;div class=&quot;feature-text&quot;&gt;
                            &lt;div class=&quot;feature-text-container&quot;&gt;
                                &lt;div class=&quot;feature-item-title&quot;&gt;The sharpest 7” tablet screen ever.&lt;/div&gt;
                                &lt;div class=&quot;feature-item-content&quot;&gt;
                                    The world's highest-resolution 7&quot; tablet puts over 2.3 million pixels in the palm of your hand. With 323 pixels packed into every inch, you can read text that’s sharper than the printed page, see images more vivid than the highest quality photo magazine, and watch videos come to life in vibrant 1080p HD. 
                                &lt;/div&gt;&lt;!-- end feature-item-content --&gt;
                                &lt;div class=&quot;feature-item-title&quot;&gt;Sound that surrounds.&lt;/div&gt;
                                &lt;div class=&quot;feature-item-content&quot;&gt;
                                    Nexus 7 features dual stereo speakers and surround sound powered by Fraunhofer &sup1; (the MP3 inventors), so you get rich and immersive audio. Hear it all more clearly with finely tuned volume boost technology that makes dialog and sound crisp and easier on the ears.
                                &lt;/div&gt;&lt;!-- end feature-item-content --&gt;
                                &lt;div class=&quot;feature-item-title&quot;&gt;Fast and smooth.&lt;/div&gt;
                                &lt;div class=&quot;feature-item-content&quot;&gt;
                                    Nexus 7 is made by ASUS and packs a serious punch. With a quad-core Qualcomm Snapdragon™ S4 Pro processor and 2GB of RAM, everything runs faster, and high-performance rendering ensures 3D graphics are smooth and dynamic. 
                                &lt;/div&gt;&lt;!-- end feature-item-content --&gt;
                            &lt;/div&gt;&lt;!-- end feature-text-container --&gt;
                        &lt;/div&gt;&lt;!-- end feature-text --&gt;
                    &lt;/div&gt;&lt;!-- end feature --&gt;
                    &lt;div class=&quot;feature feature-left&quot;&gt;
                        &lt;div class=&quot;feature-title&quot;&gt;Better than Awesome&lt;/div&gt;
                        &lt;img class=&quot;feature-image&quot; src=&quot;http://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Antonio_Bisquert_%281906-1990%29.JPG/386px-Antonio_Bisquert_%281906-1990%29.JPG&quot; alt=&quot;&quot; /&gt;
                        &lt;div class=&quot;feature-text&quot;&gt;
                            &lt;div class=&quot;feature-text-container&quot;&gt;
                                &lt;div class=&quot;feature-item-title&quot;&gt;The sharpest 7” tablet screen ever.&lt;/div&gt;
                                &lt;div class=&quot;feature-item-content&quot;&gt;
                                    The world's highest-resolution 7&quot; tablet puts over 2.3 million pixels in the palm of your hand. With 323 pixels packed into every inch, you can read text that’s sharper than the printed page, see images more vivid than the highest quality photo magazine, and watch videos come to life in vibrant 1080p HD. 
                                &lt;/div&gt;&lt;!-- end feature-item-content --&gt;
                                &lt;div class=&quot;feature-item-title&quot;&gt;Sound that surrounds.&lt;/div&gt;
                                &lt;div class=&quot;feature-item-content&quot;&gt;
                                    Nexus 7 features dual stereo speakers and surround sound powered by Fraunhofer &sup1; (the MP3 inventors), so you get rich and immersive audio. Hear it all more clearly with finely tuned volume boost technology that makes dialog and sound crisp and easier on the ears.
                                &lt;/div&gt;&lt;!-- end feature-item-content --&gt;
                            &lt;/div&gt;&lt;!-- end feature-text-container --&gt;
                        &lt;/div&gt;&lt;!-- end feature-text --&gt;
                    &lt;/div&gt;&lt;!-- end feature --&gt;
                &lt;/div&gt;&lt;!-- end feature-container --&gt;
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
        <div class="docs-section">
          <h1 id="cart" class="docs-section-heading">Cart</h1>
            <p>A responsive element that creates a cart with cart items, subtotal, and call to action buttons.</p>
            <div class="example">
                <?php cart(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   git@github.com:superamazing/atmosphere.git
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
        <div class="docs-section">
          <h1 id="helper" class="docs-section-heading">Helpers/Utilities</h1>
            <p>Helper elements are small snippets of code that help with common tasks.</p>
            <h2>Docs Section</h2>
            <p>Docs section gives a clear division between pages/documents and can feature actions to support those pages/documents</p>
            <div class="example">
                <?php docs_section(); ?>
          	</div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <div class="docs-section">
										<h2 class="docs-section-heading">Shop</h2>
										<div class="docs-section-actions">
											<a href="#" class="btn btn-default btn-sm">Action</a>
											<a href="#" class="btn btn-info btn-sm">Action</a>
										</div><!-- end docs-section-actions -->
									</div><!-- end docs-section -->
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
    </div><!-- end panel -->
    
    <div class="section-heading">Javascript</div>
    <div class="panel">
        <div id="journey" class="docs-section">
          <h1 class="docs-section-heading">Journey</h1>
            <p>Journey is a completely customizable responsive navigation system.</p>
            <div class="example">
                <div class="alert alert-info">Atmosphere is using the Journey component as its navigation</div>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <div class="journey journey-expand-visible-sm">
										<div id="expand-left" class="journey-expand journey-expand-left">
											<ul class="journey-main-nav">
												<li class="section-heading">Section</li>
												<li><a>Link</a></li>
												<li class="journey-expand-sub-nav">
													<ul>
														<li><a>Link</a></li>
														<li><a>Link</a></li>
														<li><a>Link</a></li>
														<li><a>Link</a></li>
													</ul>
												</li>
												<li><a>Link</a></li>
												<li><a>Link</a></li>
												<li><a>Link</a></li>
											</ul>
										</div><!-- end journey-expand -->
										<ul class="journey-bar">
											<li class="journey-action journey-menu-trigger">
												<a class="journey-left-trigger-open" href="#"></a>
															<a class="journey-left-trigger-close" href="#"></a>	
											</li><!-- end journey-action -->
											<li class="journey-app">
												<a href="index.html">
													<div class="journey-app-icon journey-app-icon-text">
														J
													</div>
													<div class="journey-wordcrumb">
														<div class="journey-app-wordmark">		
															Journey
														</div><!-- end journey-app-wordmark -->
													</div><!-- end journey-breadcrumb -->
												</a>
											</li>
										</ul><!-- end journey-bar -->
										<div class="journey-content-container">
											Content
										</div><!-- journey-content-container -->
									</div><!-- end journey -->
															]]></script>
													</div><!-- end highlight -->
													<h2 id="journey" class="docs-section-heading">Add a Cart Dropdown</h2>
													<div class="example">
															<div class="alert alert-info">Add demo</div>
													</div><!-- end example -->
													<div class="highlight">
															<script type="syntaxhighlighter" class="brush: html"><![CDATA[
																 <div id="expand-cart" class="journey-expand journey-expand-cart">
										<ul>
											<li>
												<h5>Your Shopping Cart is empty.</h5>
												<p class="secondary">Fill it up with CDs, movies, name brand clothing, electronics, and more.</p>
												<p class="secondary">If you already have an account, <a href="#">sign in</a>.</p>
												<a href="#" class="btn btn-default btn-block btn-sm ">View Cart</a>
											</li>
										</ul>
									</div><!-- end journey-expand -->
															]]></script>
													</div><!-- end highlight -->
													<h2 id="journey" class="docs-section-heading">Add a Wishlist Dropdown</h2>
													<div class="example">
															<div class="alert alert-info">Add demo</div>
													</div><!-- end example -->
													<div class="highlight">
															<script type="syntaxhighlighter" class="brush: html"><![CDATA[
																 <div id="expand-wishlist" class="journey-expand journey-expand-wishlist">
										<ul>
											<li>
												<h5>Your Wishlist is empty.</h5>
												<p class="secondary">Fill it up with CDs, movies, name brand clothing, electronics, and more.</p>
												<p class="secondary">If you already have an account, <a href="#">sign in</a>.</p>
												<a href="#" class="btn btn-default btn-block btn-sm ">View Wishlist</a>
											</li>
										</ul>
									</div><!-- end journey-expand -->
															]]></script>
													</div><!-- end highlight -->
													<h2 id="journey" class="docs-section-heading">Add a Compare Dropdown</h2>
													<div class="example">
															<div class="alert alert-info">Add demo</div>
													</div><!-- end example -->
													<div class="highlight">
															<script type="syntaxhighlighter" class="brush: html"><![CDATA[
																 <div id="expand-compare" class="journey-expand journey-expand-compare">
										<ul>
											<li>
												<h5>You have no items to compare.</h5>
											</li>
										</ul>
									</div><!-- end journey-expand -->
															]]></script>
													</div><!-- end highlight -->
													<h2 id="journey" class="docs-section-heading">Add an Overflow Dropdown</h2>
													<div class="example">
															<div class="alert alert-info">Add demo</div>
													</div><!-- end example -->
													<div class="highlight">
															<script type="syntaxhighlighter" class="brush: html"><![CDATA[
																 <div id="expand-overflow" class="journey-expand journey-expand-overflow">
										<ul>
											<li class="journey-action pull-right-sm visible-xs">
												<a href="#" onclick="toggleVisibilityOne('expand-wishlist', 'journey-expand');">Wishlist<span class="badge">24</span></a>
											</li><!-- end journey-action -->
											<li class="journey-action pull-right-sm visible-xs">
												<a href="#" onclick="toggleVisibilityOne('expand-compare', 'journey-expand');">Compare Products</span><span class="badge">3</span></a>
											</li><!-- end journey-action -->  
										</ul>
									</div><!-- end journey-expand -->
															]]></script>
													</div><!-- end highlight -->
													<h2 id="journey" class="docs-section-heading">Add a Global Nav Element</h2>
													<div class="example">
															<div class="alert alert-info">Add demo</div>
													</div><!-- end example -->
													<div class="highlight">
															<script type="syntaxhighlighter" class="brush: html"><![CDATA[
																 <div id="expand-global" class="journey-expand journey-expand-global">
										<ul>
											<li><a href="#">Store</a></li>
										</ul>
									</div><!-- end journey-expand -->
															]]></script>
													</div><!-- end highlight -->
													<h2 id="journey" class="docs-section-heading">Add Top Dropdown Element</h2>
													<div class="example">
															<div class="alert alert-info">Add demo</div>
													</div><!-- end example -->
													<div class="highlight">
															<script type="syntaxhighlighter" class="brush: html"><![CDATA[
																 <div id="expand-top" class="journey-expand journey-expand-top">
										<ul class="journey-search-bar">
											<li class="has-form">
												<form role="form">
													<div class="row postfix">
													<div class="col-xs-10 pan">
														<input type="text" class="form-control has-btn" placeholder="Search...">
													</div><!-- end col-xs-10 -->
													<div class="col-xs-2 pan">
														<button type="submit" class="btn btn-default btn-block postfix"><i class="fa fa-search fa-lg"></i></button>
													</div><!-- end col-xs-2 -->
													</div><!-- end row --> 
												</form>
											</li>
										</ul>
									</div><!-- end journey-expand -->
                ]]></script>
            </div><!-- end highlight -->
            <h2 id="journey" class="docs-section-heading">Add padding to your <code>Journey Content Container</code></h2>
            <div class="example">
                <div class="alert alert-info">Add demo</div>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
                   <div class="journey-content-container">
      <div class="journey-content-fluffy">
        Content
      </div><!-- end journey-content-fluffy -->
    </div><!-- end journey-content-container -->
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end doc-section -->
        <div id="typography" class="docs-section">
            <h1 class="docs-section-heading">Exhibit</h1>
            <p>Exhibit is a responsive slider that showcases featured content.</p>
            <div class="example">
                <?php exhibit(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
      
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end doc-section -->
    </div><!-- end panel -->
</div><!-- end docs -->
		
<?php require_once (root_url() . 'footer.php');