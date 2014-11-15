    <footer class=" navbar-fixed-bottom">
		<p>R.J. Ammon Chiropractic © Copyright 2015 | All Rights Reserved</p>
    </footer>

<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./Flat-UI-2.2.1/dist/js/flat-ui.min.js"></script>
    
    <script src="./Flat-UI-2.2.1/docs/assets/js/application.js"></script>    
    
    <!-- for the testimonial widget -->
        	<script src="./js/jquery.cbpQTRotator.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>
<script>
	$(document).ready(function() {
		$('form').each(function() {
        	$('form').bootstrapValidator();
        });
	});
</script>

<!-- BODY and HTML tags open in the header.php file -->
</body>
</html>

