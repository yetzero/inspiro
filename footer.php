<?php ?>

	</div><!-- .page -->

	<footer id="colophon">
		<p>&copy; 2015 - Inspiro</p>
		<p><a href="https://www.facebook.com/Inspiro.cl" class="icon-facebook-square" title="Inspiro en Facebook"></a> <a href="https://twitter.com/InspiroDesignCL" class="icon-twitter-square" title="Inspiro en Twitter"></a></p>
	</footer>
	
<?php wp_footer(); ?>

</body>
<script>
	var buttonToggle = document.getElementById("menu-toggle");
	var menu = document.getElementById("mobile-navigation");
	var close = document.getElementById("menu-close");
	var menuActive = false;
	
	buttonToggle.addEventListener("click", function(event){
		event.preventDefault();
		if(menuActive == false){
			menu.classList.add("active");
			menuActive = true;
		}
	});
	
	close.addEventListener("click", function(event){
		event.preventDefault( );
		if(menuActive == true){
			menu.classList.remove("active");
			menuActive = false;
		}
	})
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46692862-3', 'auto');
  ga('send', 'pageview');

</script>
</html>
