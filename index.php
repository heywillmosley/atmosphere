	<?php function root_uri(){ return''; } function root_url(){ echo ''; } require_once(root_uri().'elements.php'); // Define root path ?>
<?php require_once (root_url() . 'header.php'); ?>
<style>
.stickem-container {
  position: relative;
}

.stickit {
    position: fixed;
    top: 60px;
}

.stickit-end {
    bottom: 40px;
    position: absolute;
    right: 0;
}
</style>

<h1>Atmosphere makes designing responsive online stores and websites dead simple.</h1>
<p class="lead">A fine mix of everything good to develop superior web applications.</p>
<div class="mbl">
    <a href="https://github.com/superamazing/atmosphere/archive/master.zip" class="btn btn-primary"><i class="fa fa-download"></i> Download</a>
    <a href="#docs" class="btn btn-info"><i class="fa fa-book"></i> Docs</a>
</div><!-- end mbl -->

<div class="container">
    <div class="row stickem-container">
        <div class="col-xs-12 col-sm-4 prt-sm">
         	<div class="hidden-xs">
          	<div class="stickem aside">
          		<?php docs_toc('xs'); ?>
          	</div><!-- end stickem -->
        	</div><!-- end hidden-xs -->
        </div>
        <div class="content col-xs-12 col-sm-8 plt-sm">
        	<?php docs(); ?>
          
      	</div>
    </div>
</div>

<div class="container">
  <div class="stickem-container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 prt-sm">
        <div class="visible-xs">
          <?php docs_toc('xs'); ?>
        </div><!-- end hidden-xs -->
        <div class="hidden-xs">
          
        </div><!-- end hidden-xs -->
      </div><!-- end col-xs-12 col-sm -->
      <div class="col-xs-12 col-sm-8 plt-sm">
        <?php docs(); ?>
      </div><!-- end col-xs-12 col-sm-9 -->
    </div><!-- end row -->
	</div><!-- end stickem-container -->
</div><!-- end container -->
		
<?php require_once (root_url() . 'footer.php');