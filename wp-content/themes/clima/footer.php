</div> <!-- end #container -->
<footer role="contentinfo" class="footer-general">

	<div id="inner-footer" class="clearfix">

		<div id="widget-footer" class="clearfix row-fluid">
			<ul class="menuInstitucional">
				<a href="<?php echo home_url(); ?>/institucional"><li class="InstitucionalBtn">INSTITUCIONAL</li></a>
				<a href="<?php echo home_url(); ?>/mapa-sitio"><li class="MapaBtn">MAPA DEL SITIO</li></a>
				<a href="<?php echo home_url(); ?>/faq"><li class="FAQBtn">FAQ</li></a>
				<a href="<?php echo home_url(); ?>/glosario"><li class="GlosarioBtn">GLOSARIO</li></a>
				<a href="<?php echo home_url(); ?>/suscripcion"><li class="SuscripcionBtn">SUSCRIPCIÓN</li></a>
			</ul>
		</div>

		<nav class="clearfix">
			<?php  bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
		</nav>



	</div> <!-- end #inner-footer -->

</footer> <!-- end footer -->
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  			<![endif]-->
  		<div id="fb-root"></div>
  		<script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=1416538475270198&version=v2.0";
  			fjs.parentNode.insertBefore(js, fjs);
  		}(document, 'script', 'facebook-jssdk'));</script>
  			<?php wp_footer(); // js scripts are inserted using this function ?>
  		</body>

 <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAvM4HoaMDCGAl_A4WVG-m5XQyaEQ_FuMo&sensor=SET_TO_TRUE_OR_FALSE">
 </script>


</html>