<?php function root_uri(){ return'../'; } function root_url(){ echo '../'; } require_once(root_uri().'elements.php'); // Define root path ?>
<?php require_once (root_uri() . 'header.php'); ?>

<div class="row">
	<img style="width:100%" src="http://placehold.it/1800x600" />
</div><!-- end row -->
<div class="max-width-960">
  <div class="row">
    <div class="col-xs-12 col-xs-4">
      <img style="width:100%" src="http://placehold.it/300x400" />
    </div><!-- end col-xs-12 col-xs-4 -->
    <div class="col-xs-12 col-xs-4">
      <img style="width:100%" src="http://placehold.it/300x400" />
    </div><!-- end col-xs-12 col-xs-4 -->
    <div class="col-xs-12 col-xs-4">
      <img style="width:100%" src="http://placehold.it/300x400" />
    </div><!-- end col-xs-12 col-xs-4 -->
  </div><!-- end row -->
</div><!-- end max-width-960 -->
		
<?php require_once (root_uri() . 'footer.php');