<?php

/**
 * Table of Contents
 */
function docs_toc($size = FALSE)
{ ?>
	
  <ul id="docs-toc" class="<?php if( !$size ) echo ''; ?> nav-vertical">
  	<li><a href="#getting-started"><strong>Getting Started</strong></a></li>
    <li><a href="#css"><strong>CSS</strong></a></li>
    <ul>
    	<li><a target="_blank" href="http://necolas.github.io/normalize.css/">Nicolas Gallagher/Normalize.css</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/css/#grid">Bootstrap/Grid System</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/css/grid-media-queries">Bootstrap/Media queries</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/css/#code">Bootstrap/Code</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/css/#tables">Bootstrap/Tables</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/css/#forms">Bootstrap/Forms</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/css/#buttons">Bootstrap/Buttons</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/css/#helper-classes">Bootstrap/Helper classes</a></li>
    </ul>
    <li><a target="_blank" href="http://fontawesome.io/"><strong>Fonts</strong></a></li>
    <ul>
    	<li><a target="_blank" href="http://fontawesome.io/">Dave Gandy/Font Awesome</a></li>
    </ul>
    <li><a href="#components"><strong>Components</strong></a></li>
    <ul>
    	<li><a href="#item">Item</a></li>
      <li><a href="#specs">Specs</a></li>
      <li><a href="#feature">Feature</a></li>
      <li><a href="#cart">Cart</a></li>
      <li><a href="#itinerary">Itinerary</a></li>
      <li><a href="#author-image">Author Image</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#dropdowns">Bootstrap/Dropdowns</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#btn-groups">Bootstrap/Button groups</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#btn-dropdowns">Bootstrap/Button dropdowns</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#input-groups">Bootstrap/Input groups</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#navs">Bootstrap/Navs</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#breadcrumbs">Bootstrap/Breadcrumbs</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#pagnation">Bootstrap/Pagination</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#labels">Bootstrap/Labels</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#badges">Bootstrap/Badges</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#page-header">Bootstrap/Page header</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#alerts">Bootstrap/Alerts</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#media">Bootstrap/Media object</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#list-group">Bootstrap/List group</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#panels">Bootstrap/Panels</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/components/#wells">Bootstrap/Wells</a></li>
      <li><a href="#helper">Helper/Utilities</strong></a></li>
      <ul>
        <li><a href="#docs-section">Docs Section</a></li>
        <li><a href="#pretty-page">Pretty Page</a></li>
      </ul>
    </ul>
    <li><a href="#javascript"><strong>Javascript</strong></a></li>
    <ul>
    	<li><a target="_blank" href="http://jquery.com/">Jquery</a></li>
    	<li><a target="_blank" href="http://wicky.nillia.ms/enquire.js/">Wicky Nillia/Enquire.js</a></li>
      <li><a href="#jaunt">Jaunt</a></li>
      <li><a href="#journey">Journey</a></li>
      <li><a href="#exhibit">Exhibit</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/javascript/#transitions">Bootstrap/Transitions</a></li>
      <li><a target="_blank" href="http://getbootstrap.com/javascript/#dropdown">Bootstrap/Dropdown</a></li>
      <li><a target="_blank" href="http://foundation.zurb.com/docs/components/interchange.html">Foundation/Interchange</a></li>
      <li><a target="_blank" href="http://foundation.zurb.com/docs/components/reveal.html">Foundation/Reveal</a></li>
      <li><a target="_blank" href="http://foundation.zurb.com/docs/components/orbit.html">Foundation/Orbit</a></li>
      <li><a target="_blank" href="http://foundation.zurb.com/docs/components/accordion.html">Foundation/Accordion</a></li>
      <li><a target="_blank" href="http://foundation.zurb.com/docs/components/equalizer.html">Foundation/Equalizer</a></li>
      <li><a target="_blank" href="http://alexgorbatchev.com/SyntaxHighlighter/">Alex Gorbatchev/Syntax Highlighter</a></li>
      <li><a target="_blank" href="http://viget.com/inspire/jquery-stick-em">Trevor Davis/jQuery-Stickem</a></li>
    </ul>
  </ul>
	

<?php }

/**
 * Docs
 */
 function docs()
 { ?>
	
 <div id="docs" class="docs-section">
    <h1 class="docs-section-heading">Docs</h1>
    <?php getting_started() ?>
    <div id="css" class="section-heading">CSS</div>
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
    <div id="components" class="section-heading">Components</div>
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
          <h1 id="cart" class="docs-section-heading">Navigation</h1>
        	<p>Simple elements to make navigation a sinch.</p>
          <h2>Vertical Nav</h2>
          <p>An element that displays a list of vertically without bullets or numbers. Atmosphere uses this navigation schema to list out the elements implemented.
            <div class="example">
                <?php nav_vertical(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php nav_vertical(); ?>
                ]]></script>
            </div><!-- end highlight -->
            <h2>Horizontal Nav</h2>
          <p>An element that displays an inline list.
            <div class="example">
                <?php nav_horizontal(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php nav_horizontal(); ?>
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
<?php cart(); ?>
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
        <div class="docs-section">
          <h1 id="helper" class="docs-section-heading">Helpers/Utilities</h1>
            <p>Helper elements are small snippets of code that help with common tasks.</p>
            <h2 id="docs-section">Docs Section</h2>
            <p>Docs section gives a clear division between pages/documents and can feature actions to support those pages/documents</p>
            <div class="example">
                <?php docs_section(); ?>
          	</div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php docs_section(); ?>
                ]]></script>
            </div><!-- end highlight -->
            <h2 id="pretty-page">Pretty Page</h2>
            <p>Pretty makes long pages of text prettier and more readable.</p>
            <div class="example">
                <?php pretty_page(); ?>
          	</div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php pretty_page(); ?>
                ]]></script>
            </div><!-- end highlight -->
            <h3>With <code>Docs Section</code></h3>
            <p>Combine with <code>Docs Section</code> for an even prettier page.</p>
            <div class="example">
                <?php pretty_page('with-docs-section'); ?>
          	</div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php pretty_page('with-docs-section'); ?>
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
        <div id="itinerary" class="docs-section">
            <h1 class="docs-section-heading">Itinerary</h1>
            <p>Itinerary showcases your schedule in style.</p>
            <div class="example">
							<?php itinerary(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php itinerary(); ?>
                ]]></script>
            </div><!-- end highlight -->
            <h2 class="docs-section-heading">Itinerary without event details.</h2>
            <div class="example">
							<?php itinerary('no-details'); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php itinerary('no-details'); ?>
                ]]></script>
            </div><!-- end highlight -->
            <h2 class="docs-section-heading">Itinerary event without an image.</h2>
            <div class="example">
							<?php itinerary('no-img'); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php itinerary('no-img'); ?>
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end doc-section -->
        <div id="author-image" class="docs-section">
          <h1 id="helper" class="docs-section-heading">Author Image</h1>
            <p>An element that helps style author images. Mulitple sizes, rounded or square.</p>
            <div class="example">
                <?php author_img(); ?>
          	</div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<div class="author-img">
	<img src="http://placekitten.com/g/300/300" />
</div><!-- end author-img -->
                ]]></script>
            </div><!-- end highlight -->
            <h2>Rounded</h2>
            <div class="example">
                <div class="author-img author-img author-img-rounded">
                  <img src="http://placekitten.com/g/300/300" />
                </div><!-- end author-img -->
          	</div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<div class="author-img author-img author-img-rounded">
	<img src="http://placekitten.com/g/300/300" />
</div><!-- end author-img -->
                ]]></script>
            </div><!-- end highlight -->
            <h2>Author image in a media element</h2>
            <div class="example">
<div class="media">
  <div class="pull-left">
    <div class="author-img author-img-rounded">
  <img src="http://placekitten.com/g/300/300" />
</div><!-- end author-img -->
  </div><!-- end pull-left -->
  <div class="media-body">
    <h3 class="mvn">Tom Smith</h3>
    <p class="mtn">non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem.</p>
  </div><!-- end media-body -->
</div><!-- end media -->
          	</div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<div class="media">
  <div class="pull-left">
    <div class="author-img author-img-rounded">
  <img src="http://placekitten.com/g/300/300" />
</div><!-- end author-img -->
  </div><!-- end pull-left -->
  <div class="media-body">
    <h3 class="mvn">Medium <code>author-img author-img-rounded</code></h3>
    <p class="mtn">non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem.</p>
  </div><!-- end media-body -->
</div><!-- end media -->
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end docs-section -->
    </div><!-- end panel -->
    
    <div id="javascript" class="section-heading">Javascript</div>
    <div class="panel">
        <div id="jaunt" class="docs-section">
            <h1 class="docs-section-heading">Jaunt</h1>
            <p>Jaunt is a simple responsive global navigation element that's easy to customize and implement.</p>
            <div class="example">
                <h3>Atmosphere's navigation is using <code>Jaunt</code>.</h3>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php jaunt(); ?>
                ]]></script>
            </div><!-- end highlight -->
            <h2>Keep Jaunt visible as you scroll</h2>
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<ul class="jaunt jaunt-fixed">
	...
</ul>
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end doc-section -->
        <div id="journey" class="docs-section">
          <h1 class="docs-section-heading">Journey</h1>
            <p>Journey is a completely customizable responsive navigation system.</p>
            <div class="example">
              <?php journey(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php journey(); ?>
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
        <div id="exhibit" class="docs-section">
            <h1 class="docs-section-heading">Exhibit</h1>
            <p>Exhibit is a responsive slider that showcases featured content.</p>
            <div class="example">
                <?php exhibit(); ?>
            </div><!-- end example -->
            <div class="highlight">
                <script type="syntaxhighlighter" class="brush: html"><![CDATA[
<?php exhibit(); ?>
                ]]></script>
            </div><!-- end highlight -->
        </div><!-- end doc-section -->
    </div><!-- end panel -->
</div><!-- end docs -->
	 
 <?php } // end docs
 
 
 /**
  * Getting Started
	*/
function getting_started()
{ ?>

<div class="section-heading">Setup</div>
  <div class="panel">
    <div id="getting-started" class="docs-section">
          <h1 class="docs-section-heading">Getting Started with Atmosphere</h1>
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
                      &lt;script language="javascript" type="text/javascript" src="vendor/foundation-5.2.1.custom/js/foundation.min.js">&lt;/script>
                      &lt;script>
                        $(document).foundation();
                      &lt;/script>
                  &lt;/body>
                  &lt;/html>
              </pre>
          </div><!-- end highlight -->
      </div><!-- end docs-section -->
  </div><!-- end panel -->

<?php }
 

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
 * Exhibit
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
	
	
/**
* Jaunt
*/
function jaunt($type = 'default')
{ ?>
	<ul class="jaunt">
      <li class="jaunt-logo">
        <a href="#">
          <img src="http://placehold.it/190x50" /> 
        </a>
      </li><!-- end jaunt-logo -->
      <li class="jaunt-trigger"><a href="#"><i class="fa fa-bars"></i></a></li>
      <li class="jaunt-cta">
        <a href="#" class="btn btn-default btn-sm">Main Action</a>
      </li><!-- end jaunt-cta -->
      <li class="jaunt-links">
        <ul>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li class="divider-mobile"></li><!-- /.divider-mobile -->
          <li class="mail-mobile small"><a href="#">Small Link</a></li><!-- /.divider-mobile -->
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
      </li><!-- end jaunt-links -->
    </ul><!-- end jaunt -->
    <div class="jaunt-clearfix"></div>

<?php } // end pretty_page()

/**
* Itinerary

*/
function itinerary($type = 'default')
{ ?>

<?php if( $type == 'default'): ?>
  <div class="itinerary">
    <div class="itinerary-calendar">Arrival Day: Saturday, July 14</div>
    <div class="itinerary-event">
      <div class="itinerary-event-time">9:00am-4:00pm</div><!-- end itinerary-event-time -->
      <div class="itinerary-event-content">
        <div class="itinerary-event-title">Batman Convention</div>
        <div class="itinerary-event-presenter">
          <div class="itinerary-event-presenter-name"><a href="#">Dick "Robin" Grayson</a></div> <div class="itinerary-event-presenter-occupation">Side Kick, Dynamic Duo</div>
        </div><!-- end itinerary-event-presenter -->
        <div class="itinerary-event-details">
          <img class="itinerary-event-details-img" src="http://placehold.it/100x100"/>
          <div class="itinerary-event-details-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod imperdiet purus, vel cursus erat imperdiet non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem. Cras et convallis urna, non molestie elit. Fusce lacinia tempor porta. Ut sed blandit ante. Phasellus cursus tristique euismod. Donec mauris est, rutrum ut bibendum sed, lobortis sit amet ligula. Morbi commodo erat non leo vehicula, vel ultricies ante semper. Suspendisse auctor ultricies urna, non aliquam purus aliquam sed. Sed dictum tellus tellus, ac interdum sem placerat eget.</p>
          </div><!-- end itinerary-event-details-content -->
        </div><!-- end itinerary-event-details -->
      </div><!-- end itinerary-event-content -->
   	</div><!-- end itinerary-event -->
   	<div class="itinerary-event">
      <div class="itinerary-event-time">5:00pm-10:00pm</div><!-- end itinerary-event-time -->
      <div class="itinerary-event-content">
        <div class="itinerary-event-title">Combat Training</div>
        <div class="itinerary-event-presenter">
          <div class="itinerary-event-presenter-name"><a href="#">Bruce Wayne</a></div> <div class="itinerary-event-presenter-occupation">Super Hero, Dynamic Duo</div>
        </div><!-- end itinerary-event-presenter -->
        <div class="itinerary-event-details">
          <img class="itinerary-event-details-img" src="http://placehold.it/100x100"/>
          <div class="itinerary-event-details-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod imperdiet purus, vel cursus erat imperdiet non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis</p>
            <ol>
            	<li>est, rutrum ut bibendum sed, lo</li>
              <li>est, rutrum ut bibendum sed, lo</li>
              <li>est, rutrum ut bibendum sed, lo</li>
            </ol>
          </div><!-- end itinerary-event-details-content -->
        </div><!-- end itinerary-event-details -->
      </div><!-- end itinerary-event-content -->
    </div><!-- end itinerary-event -->
    <div class="itinerary-calendar">Sunday, July 15</div>
    <div class="itinerary-event">
      <div class="itinerary-event-time">8:00am-12:00am</div><!-- end itinerary-event-time -->
      <div class="itinerary-event-content">
        <div class="itinerary-event-title">Spider Man Parade</div>
        <div class="itinerary-event-presenter">
          <div class="itinerary-event-presenter-name"><a href="#">Peter Parker</a></div> <div class="itinerary-event-presenter-occupation">Super Hero</div>
        </div><!-- end itinerary-event-presenter -->
        <div class="itinerary-event-details">
          <img class="itinerary-event-details-img" src="http://placehold.it/100x100"/>
          <div class="itinerary-event-details-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod imperdiet purus, vel cursus erat imperdiet non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem. Cras et convallis urna, non molestie elit. Fusce lacinia tempor porta. Ut sed blandit ante. Phasellus cursus</p>
            <p>tristique euismod. Donec mauris est, rutrum ut bibendum sed, lobortis sit amet ligula. Morbi commodo erat non leo vehicula, vel ultricies ante semper. Suspendisse auctor ultricies urna, non aliquam purus aliquam sed. Sed dictum tellus tellus, ac interdum sem placerat eget.</p>
            <ul>
            	<li>est, rutrum ut bibendum sed, lo</li>
              <li>est, rutrum ut bibendum sed, lo</li>
              <li>est, rutrum ut bibendum sed, lo</li>
            </ul>
          </div><!-- end itinerary-event-details-content -->
        </div><!-- end itinerary-event-details -->
      </div><!-- end itinerary-event-content -->
    </div><!-- end itinerary-event -->
  </div><!--end itinerary -->
<?php elseif( $type == 'no-details'): ?>
<div class="itinerary">
  <div class="itinerary-calendar">Arrival Day: Saturday, July 14</div>
  <div class="itinerary-event">
    <div class="itinerary-event-time">9:00am-4:00pm</div><!-- end itinerary-event-time -->
    <div class="itinerary-event-content">
      <div class="itinerary-event-title">Batman Convention</div>
      <div class="itinerary-event-presenter">
        <div class="itinerary-event-presenter-name"><a href="#">Dick "Robin" Grayson</a></div> <div class="itinerary-event-presenter-occupation">Side Kick, Dynamic Duo</div>
      </div><!-- end itinerary-event-presenter -->
    </div><!-- end itinerary-event-content -->
 	</div><!-- end itinerary-event -->
 	<div class="itinerary-event">
    <div class="itinerary-event-time">5:00pm-10:00pm</div><!-- end itinerary-event-time -->
    <div class="itinerary-event-content">
      <div class="itinerary-event-title">Combat Training</div>
      <div class="itinerary-event-presenter">
        <div class="itinerary-event-presenter-name"><a href="#">Bruce Wayne</a></div> <div class="itinerary-event-presenter-occupation">Super Hero, Dynamic Duo</div>
      </div><!-- end itinerary-event-presenter -->
    </div><!-- end itinerary-event-content -->
  </div><!-- end itinerary-event -->
  <div class="itinerary-calendar">Sunday, July 15</div>
  <div class="itinerary-event">
    <div class="itinerary-event-time">8:00am-12:00am</div><!-- end itinerary-event-time -->
    <div class="itinerary-event-content">
      <div class="itinerary-event-title">Spider Man Parade</div>
      <div class="itinerary-event-presenter">
        <div class="itinerary-event-presenter-name"><a href="#">Peter Parker</a></div> <div class="itinerary-event-presenter-occupation">Super Hero</div>
      </div><!-- end itinerary-event-presenter -->
    </div><!-- end itinerary-event-content -->
  </div><!-- end itinerary-event -->
</div><!--end itinerary -->
<?php elseif( $type == 'no-img'): ?> 
<div class="itinerary"> 
  <div class="itinerary-event">
      <div class="itinerary-event-time">8:00am-12:00am</div><!-- end itinerary-event-time -->
      <div class="itinerary-event-content">
        <div class="itinerary-event-title">Spider Man Parade</div>
        <div class="itinerary-event-presenter">
          <div class="itinerary-event-presenter-name"><a href="#">Peter Parker</a></div> <div class="itinerary-event-presenter-occupation">Super Hero</div>
        </div><!-- end itinerary-event-presenter -->
        <div class="itinerary-event-details">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod imperdiet purus, vel cursus erat imperdiet non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem. Cras et convallis urna, non molestie elit. Fusce lacinia tempor porta. Ut sed blandit ante. Phasellus cursus</p>
        </div><!-- end itinerary-event-details -->
      </div><!-- end itinerary-event-content -->
    </div><!-- end itinerary-event -->
 </div><!-- end itinerary -->
<?php endif; ?>

<?php } // end itinerary()


/**
 * Author Image
 */
 function author_img()
 { ?>
 <div class="media">
  <div class="pull-left">
    <div class="author-img author-img-xs">
  <img src="http://placekitten.com/g/300/300" />
</div><!-- end author-img -->
  </div><!-- end pull-left -->
  <div class="media-body">
    <h3 class="mvn">X-small <code>author-img author-img-xs</code></h3>
    <p class="mtn">non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem.</p>
  </div><!-- end media-body -->
</div><!-- end media -->
<div class="media">
  <div class="pull-left">
    <div class="author-img author-img-sm">
  <img src="http://placekitten.com/g/300/300" />
</div><!-- end author-img -->
  </div><!-- end pull-left -->
  <div class="media-body">
    <h3 class="mvn">Small <code>author-img author-img-sm</code></h3>
    <p class="mtn">non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem.</p>
  </div><!-- end media-body -->
</div><!-- end media -->
<div class="media">
  <div class="pull-left">
    <div class="author-img author-img-rounded">
  <img src="http://placekitten.com/g/300/300" />
</div><!-- end author-img -->
  </div><!-- end pull-left -->
  <div class="media-body">
    <h3 class="mvn">Medium <code>author-img author-img-rounded</code></h3>
    <p class="mtn">non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem.</p>
  </div><!-- end media-body -->
</div><!-- end media -->
<div class="media">
  <div class="pull-left">
    <div class="author-img author-img-lg">
  <img src="http://placekitten.com/g/300/300" />
</div><!-- end author-img -->
  </div><!-- end pull-left -->
  <div class="media-body">
    <h3 class="mvn">Large <code>author-img author-img-lg</code></h3>
    <p class="mtn">non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem.</p>
  </div><!-- end media-body -->
</div><!-- end media -->
<div class="media">
  <div class="pull-left">
    <div class="author-img author-img-xl author-img-rounded">
      <img src="http://placekitten.com/g/300/300" />
    </div><!-- end author-img -->
  </div><!-- end pull-left -->
  <div class="media-body">
    <h3 class="mvn">X-large <code>author-img author-img-xl author-img-rounded</code></h3>
    <p class="mtn">non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem.</p>
  </div><!-- end media-body -->
</div><!-- end media -->
 
 <?php } // end author_img()
 
 
 function journey()
 { ?>
 
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
  	<p>non. Aliquam imperdiet, libero eget rhoncus placerat, nibh turpis aliquet sem, quis porttitor leo turpis quis arcu. Etiam sit amet mauris ut tellus tincidunt malesuada ut vitae sem.</p>
    <ul>
      <li><a>Link</a></li>
      <li><a>Link</a></li>
      <li><a>Link</a></li>
      <li><a>Link</a></li>
    </ul>
    <ol>
      <li><a>Link</a></li>
      <li><a>Link</a></li>
      <li><a>Link</a></li>
      <li><a>Link</a></li>
    </ol>
  </div><!-- journey-content-container -->
</div><!-- end journey -->
 
 <?php }
 
 
 function nav_vertical()
 { ?>
 <ul class="nav-vertical">
 	<li><a>Link</a></li>
      <li><a>Link One</a></li>
      <li><a>Link Two</a></li>
      <ul>
        <li><a>Sub Link One</a></li>
        <li><a>Sub Link Two</a></li>
        <ul>
          <li><a>Super Sub Link One</a></li>
          <li><a>Super Sub Link Two</a></li>
        </ul>
      </ul>
      <li><a>Link Three</a></li>
      <li><a>Link Four</a></li>
      <li><a>Link Five</a></li>
 </ul>
 <?php } // end nav_vertical_nav
 
  function nav_horizontal()
 { ?>
 <ul class="nav-horizontal">
 	<li><a>Link</a></li>
  <li><a>Link One</a></li>
  <li><a>Link Two</a></li>
  <li><a>Link Three</a></li>
  <li><a>Link Four</a></li>
  <li><a>Link Five</a></li>
 </ul>
 <?php } // end nav_horizontal
 
 