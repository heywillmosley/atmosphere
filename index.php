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

<?php front_stage(); ?>
<div class="max-width-960">
<div class="container">
    <div class="row stickem-container">
        <div class="col-xs-12 col-sm-4 prt-sm">
        	<div class="visible-xs">
          	<h2>Table of Contents</h2>
          	<?php docs_toc('xs'); ?>
        	</div><!-- end hidden-xs -->
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

		
<?php require_once (root_url() . 'footer.php');