<!-- Footer
================================================== -->

	</div> <!-- /.span9 -->
	</div> <!-- /.row -->
	<footer>
		<hr>
		<p>
			<a href="http://typebeautiful.ly" target="_TOP">&copy; Typebeautiful.ly 2012</a>
			<?php
				if ( empty($setTranslate) ) $setTranslate = new Translate();
				$setTranslate->languageSelector();
			?>
		</p>
	</footer>

</div> <!-- /.container -->

	<!-- javascript -->

	<!--<script src="javascripts/bootstrap.js"></script>-->
	<!--<script src="javascripts/texthandling.js"></script>-->
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
	<script src="assets/js/bootstrap-transition.js"></script>
	<script src="assets/js/bootstrap-collapse.js"></script>
	<script src="assets/js/bootstrap-modal.js"></script>
	<script src="assets/js/bootstrap-dropdown.js"></script>
	<script src="assets/js/bootstrap-button.js"></script>
	<script src="assets/js/bootstrap-tab.js"></script>
	<script src="assets/js/bootstrap-alert.js"></script>
	<script src="assets/js/bootstrap-tooltip.js"></script>
	<script src="assets/js/jquery.ba-hashchange.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>
	<script src="assets/js/jquery.jigowatt.js"></script>

  </body>
</html>
<?php ob_flush(); ?>