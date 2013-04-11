<?php global $concerto_options; ?>

			<div class="clearfix"></div>

		</div><!-- #content -->

	</div><!-- #main -->

	<div id="footer">
		<footer id="footer-inner" class="inner">
			<span class="copyright"><?php if( ! empty( $concerto_options['code_siteinfo'] ) ) : echo html_entity_decode( $concerto_options['code_siteinfo'] ); else : ?>&copy; <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>.<?php endif; ?></span>
			<span class="poweredby">
				<?php _e( 'Powered by <a href="http://wordpress.org/" title="WordPress">WordPress</a>. Concerto by <a href="http://www.ychong.com/" title="Neverland">Neverland</a>.', 'concerto' ); ?>
			</span>
			<div class="clearfix"></div>
		</footer><!-- #footer-inner -->
	</div><!-- #footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
