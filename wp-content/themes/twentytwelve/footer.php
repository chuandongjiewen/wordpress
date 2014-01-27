<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
		    <div class="footer_top mau">
		        	友情链接：
		        <a href="#">广外导航</a>
		        <a href="#">广东外语外贸大学</a>
		        <a href="#">广外quanta</a>
		        <a href="#">译言网</a>
		        <a href="#">北京外国语大学</a>
		        <a href="#">上海外国语大学</a>
		        <a href="#">中山大学外国语学院</a>
		        <a href="#">中国教育在线小语种频道</a>
		    </div>
		    <div class="footer_bottom mau">
		        <span class="fl">Copyright @ 2006 版权所有 广东外语外贸大学西方语言学院</span>
		        <img class="fr" alt="Powered by Quanta Center" src="<?php bloginfo('template_directory')?>/images/quanta.png" />
		    </div>
			<?php do_action( 'twentytwelve_credits' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>