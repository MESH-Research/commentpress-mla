<!-- footer.php -->

<div id="footer" class="clearfix">

<div id="footer_inner">

	<?php

	// are we using the page footer widget?
	if ( !dynamic_sidebar( 'cp-license-8' ) ) {

		// compat with wplicense plugin
		if ( function_exists( 'isLicensed' ) AND isLicensed() ) {

			// show the license (buggy, use wp_footer() instead)
			//licenseHtml( $display = true );

		} else {

			// show copyright
			?>

			<p><strong>Modern Language Association</strong><br>
			85 Broad Street, suite 500<br>
			New York, NY 10004-2434</p>

			<?php

		}

	}

	?>

</div><!-- /footer_inner -->

</div><!-- /footer -->



</div><!-- /container -->



<?php wp_footer() ?>



</body>



</html>
