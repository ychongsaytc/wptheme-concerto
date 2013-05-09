
			<div class="clearfix"></div>

		</div><!-- #content -->

	</div><!-- #main -->

	<div id="footer">
		<footer id="footer-inner" class="inner">
			<span class="copyright"><?php $nlt_code_siteinfo = nlt_opt('code_siteinfo'); if( ! empty( $nlt_code_siteinfo ) ) : echo html_entity_decode( $nlt_code_siteinfo ); else : ?>&copy; <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>.<?php endif; ?></span>
			<span class="poweredby">
				<?php _e( 'Powered by <a href="http://wordpress.org/" target="_blank">WordPress</a>. Concerto Theme by <a href="http://www.ychong.com/" title="Neverland" target="_blank">Neverland</a>.', 'nlt' ); ?>
			</span>
			<div class="clearfix"></div>
		</footer><!-- #footer-inner -->
	</div><!-- #footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
