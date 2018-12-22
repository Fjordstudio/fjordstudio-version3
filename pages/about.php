<div class="container about">
	<?php require_once('includes/menu.php'); ?>
	<div class="screen">
		<h1>What I Know - What I Like - And What I'd Like to Know</h1>
		<p>
			Since I have such varied skills, I'll make it easier for you by adding some graphics. I wouldn't want to read through it in plain text either.
		</p>
		<p>
			Here's for instance a handy graph to illustrate the discrepancy between my skills and my interest in each of said skills.<br>
			Dark blue denotes interest, light blue denotes skill level:
		</p>
		<div class="grid col-50-50">
			<section>
				<div>
					<div style="max-width:960px;">
						<canvas id="myChart" width="400" height="400"></canvas>
					</div>
				</div>
			</section>
			<section>
				<div class="infobox">
					<p>
						Of course not everything can be measured and quantified. I do pride myself in my ability to problem solve and to plan projects - but those are more difficult to measure compared with knowledge of given technologies. However, now you know I do value those skillw, and invest in improving them.
					</p>
					<p>
						Another thing I pride myself in would be the airy, flat designs I have managed to churn out the last couple of years - continuously improving my style. This site speaks for itself on the matter. I may not be the world's best designer, but I can hold my own.
					</p>
					<br>
					<p>If you would rather read through the complete list of skills in plain text - keep on scrolling. It's right below here!</p>
					<p class="chevron-down">
						<span></span>
						<span></span>
					</p>
					<br>
				</div>
			</section>
		</div>

		<p>
			Five stars indicate a complete ability to carry out a project independently with said technologies. One star indicates a technology that is new to me, and that I have just recently started learning.
		</p>
		<div class="grid col-50-50">
			<div>
				<ul class="rating">
					<li class="r-5">HTML (5)</li>
					<li class="r-5">CSS (3)</li>
					<li class="r-5">SVG</li>
					<li class="r-5">GSAP</li>
					<li class="r-5">Web and UI animation</li>
					<li class="r-5">PHP &amp; MySQL</li>
					<li class="r-5">WordPress Theme Development</li>
					<li class="r-5">RDBMS</li>
					<li class="r-5">jQuery</li>
					<li class="r-5">Project planning</li>
				</ul>
			</div>
			<div>
				<ul class="rating">
					<li class="r-4">GIT</li>
					<li class="r-4">Accessibility</li>
					<li class="r-4">API Development</li>
					<li class="r-4">Adobe CC (Photoshop, InDesign etc.)</li>
					<li class="r-3">JavaScript</li>
					<li class="r-3">Build tools</li>
					<li class="r-3">Laravel</li>
					<li class="r-2">Vue.js</li>
					<li class="r-2">Node.js</li>
					<li class="r-2">Webpack</li>
				</ul>
			</div>
		</div>
		<br><br>
		<div class="grid col-50-50">
			<section>
				<div class="infobox">
					<h1>
						What I'm Learning
					</h1>
					<ul class="list">
						<li>Nuxt.js - server-rendering Vue.js apps</li>
						<li>Node.js</li>
						<li>CSS Grid Layout</li>
					</ul>
				</div>
			</section>
			<section>
				<div class="infobox">
					<h1>
						What's (Maybe) Next?
					</h1>
					<ul class="list">
						<li>Socket.IO</li>
						<li>Serverless Architecture</li>
						<li>Maybe GraphQl...?</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>

<script src="js/Chart.min.js"></script>
<script>
	window.onload = function(){
		Chart.defaults.global.responsive = true;
		
		var ctx = document.getElementById("myChart").getContext("2d");
		
		var data = {
    	labels: ["CSS", "SVG", "PHP", "Web animation", "SEO", "WordPress", "JavaScript", "Build Tools", "VueJS", "REST APIs", "NodeJS", "RDBMS", "Laravel"],
    	datasets: [
        {
          label: "Interest",
          fillColor: "rgba(30,61,132,.2)",
          strokeColor: "rgba(30,61,132,1)",
          pointColor: "rgba(30,61,132,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(30,61,132,1)",
          data: [100, 100, 70, 100, 50, 40, 100, 60, 100, 90, 80, 90, 100]
        },
        {
          label: "Skill",
          fillColor: "rgba(74,112,209,.2)",
          strokeColor: "rgba(74,112,209,1)",
          pointColor: "rgba(74,112,209.1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(74,112,209,1)",
          data: [100, 100, 90, 80, 90, 100, 60, 80, 40, 60, 40, 100, 60]
        }
    	]
		};
		var myNewChart = new Chart(ctx).Radar(data);
		
	}
</script>