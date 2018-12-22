<div class="container home">
	<?php require_once('includes/menu.php'); ?>
	<div class="screen">
		<h1>I love the web, I love good design, and I love bringing the two together!</h1>
		<p>
			My name is Katrine-Marie Burmeister and I am a web developer.
		</p>
		<p>
			I can wrangle many aspects of development whether backend or frontend - I have experience with API development, custom CMS systems and whatnot - but my passion is squarely for frontend development. 
		</p>
		<p>This is because the frontend is such a diverse field that constantly evolves, and lets you try your hand at anything from build setups to refactoring to documentation to fine-tuning a checkout flow or animating an icon... No two projects are identical and there's constant opportunities to learn and grow as a developer. I couldn't ask for more.
		</p>
		<p>
			I currently have about 8 years of experience working with the web - both as a freelancer and full-time, have completed an education in web development and done consulting. And I am constantly on the lookout for new opportunities.
		</p>
		<p>
			So - do you have a cool web project in mind? Tell me about it. Let's see what we can make of it together.
		</p>
		<p>
			<br>
			Look around this site to get to know me better, or go directly to the <a href="/resume/contact">contact form</a> if you wish to get in touch.
		</p>
		<div id="signature">
		<svg x="0px" y="0px" width="1000px" height="500px" viewBox="0 0 1000 500" style="enable-background:new 0 0 1000 500;" xml:space="preserve">
			<g id="katrine">
				<path d="M189.5,117.5l-44,301c0,0,95-299,148-286c0,0-160,218-111,226
					c0,0,43-11.5,85-97.25s-51,56.25-39,77.25s22-33,22-33s-38,219,126-155c0,0-3-60-50,99.5s3,99.5-6,45.5c0,0,24,24,33,20s-6,81,35,8
					c0,0,10,12,24,4"/>
			</g>
			<g id="marie">
				<path d="M412.5,385.5c0,0,152-249,149-261s-102,134-86,242c0,0-3,50,101-182
					c0,0-82,140-66,167s38-78,66-75c0,0-101,147,0,39c0,0-34,57,23-1c0,0-5,18,19-3"/>
			</g>
			<g id="burmeister">
				<path d="M709.299,142.5c0,0-65,130-63,229c0,0,25-188,103-229c0,0,35-26-79,144
					c0,0,188-194-9,85c0,0-7,32,69-65c0,0-53.869,109,24.065-9c0,0-51.065,133,50.935-18c102-151,11-84,0-15.5
					c-11,68.5-36,156.5,28,58.5c0,0,2,17,7,12"/>
			</g>
			</svg>

		</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://fjordstudio.dk/assets/js/velocity/velocity.min.js"></script>
<script>
  window.addEventListener("load", function(){
//       var katrine = document.querySelector("#katrine path");
//       var marie = document.querySelector("#marie path");
//       var burmeister = document.querySelector("#burmeister path");
      
    $('#katrine path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear"
    });
    $('#marie path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear",
      delay:620
    });
    $('#burmeister path').velocity({
			'stroke-dashoffset': 0
    }, {
      duration: 500,
      easing: "linear",
      delay:1200
    });
  });
</script>