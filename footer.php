</div><!-- end max-width-960 -->
<footer class="global-footer phs">
<p class="mbs">&copy; Super Amazing 2014</p>
</footer><!-- end footer -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php root_url(); ?>dist/js/site-footer.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php root_url(); ?>vendor/foundation-5.2.1.custom/js/foundation.min.js"></script>


<script>
  $(".exhibit").exhibit({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 7000,          // Integer: Time between slide transitions, in milliseconds
  pager: true,           // Boolean: Show pager, true or false
  nav: true,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "exhibit",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
</script>

<script>
  $(document).foundation();
</script>

<script type="text/javascript">
     SyntaxHighlighter.all()
</script>

<script>
		$(document).ready(function() {
			$('.container').stickem();
		});
	</script>
</body>
</html>