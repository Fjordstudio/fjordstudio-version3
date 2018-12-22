<p class="colophon">
	&copy; Katrine-Marie Burmeister, <?php echo date('F Y'); ?>
</p>

<div class="social">
	<ul>
		<li class="linkedin"><a title="LinkedIn" href="https://www.linkedin.com/in/katrine-marie-burmeister-98047368" target="_blank"></a></li>
		<li class="github"><a href="https://github.com/Katrine-Marie" title="GitHub" target="_blank"></a></li>
		<li class="codepen"><a title="CodePen" href="http://codepen.io/Katrine-Marie" target="_blank"></a></li>
	</ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://fjordstudio.dk/assets/js/velocity/velocity.min.js"></script>
<script src="https://fjordstudio.dk/resume/js/filtering.js"></script>
<script>
  window.addEventListener("load", function(){
		
		// Menu toggle icons
		$('#nav-icon2, #nav-icon3').click(function(){
			$(this).toggleClass('open');
			$(this).parent("li").toggleClass('dropdown-open');
		});
		$('#nav-icon2').on('click', function(){
			$(this).parent('li').parent('ul').toggleClass('mobile-menu');
		});
		
		
    // SVG signature animation  
    $('.home #katrine path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear"
    });
    $('.home #marie path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear",
      delay:620
    });
    $('.home #burmeister path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear",
      delay:1200
    });
  });
</script>
</body>
</html>