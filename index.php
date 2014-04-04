	<?php function root_uri(){ return''; } function root_url(){ echo ''; } require_once(root_uri().'elements.php'); // Define root path ?>
<?php require_once (root_url() . 'header.php'); ?>

<h1>Atmosphere makes designing responsive online stores and websites dead simple.</h1>
<p class="lead">A fine mix of everything good to develop superior web applications.</p>
<div class="mbl">
    <a href="https://github.com/superamazing/atmosphere/archive/master.zip" class="btn btn-primary"><i class="fa fa-download"></i> Download</a>
    <a href="#docs" class="btn btn-info"><i class="fa fa-book"></i> Docs</a>
</div><!-- end mbl -->
<div class="row">
	<div class="col-xs-12 col-sm-4 prt-sm">
  	<div class="visible-xs">
    	<?php docs_toc('xs'); ?>
    </div><!-- end hidden-xs -->
  	<div class="hidden-xs">
    	<?php docs_toc(); ?>
    </div><!-- end hidden-xs -->
  </div><!-- end col-xs-12 col-sm -->
  <div class="col-xs-12 col-sm-8 plt-sm">
  	<?php docs(); ?>
  </div><!-- end col-xs-12 col-sm-9 -->
</div><!-- end row -->

		
<?php require_once (root_url() . 'footer.php');