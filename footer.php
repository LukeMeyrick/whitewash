<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
		<footer class="footer" id="footer">
			<a class="footer__logo"></a>
			<div class="footer__social-con">
				<a class="footer__social-con__icon social-con__icon social-con__icon--fb" target="_blank" href="http://www.facebook.com/share.php?u=http://whitewash.au/?p=6707"><span class="centered copy">f</span></a>
				<a class="footer__social-con__icon social-con__icon social-con__icon--twit" target="_blank" href="https://twitter.com/intent/tweet?text=Together%20we%20can%20add%20the%20colour%20back%20to%20our%20Great%20Barrier%20Reef%2C%20sign%20the%20petition!%20&url=whitewash.au&via=CoralAlliance&hashtags=addsomecolour"><span class="centered copy">t</span></a>
			</div>
		</footer>

	</div>

	<?php wp_footer(); ?>


<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/minified/main.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->

</body>

</html>
