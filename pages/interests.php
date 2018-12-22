<div class="container interests">
	<?php require_once('includes/menu.php'); ?>
	<div class="screen">
		<h1>What I Like - And How it Relates to my Work</h1>

		<div class="">
			<div>
				<div>
					<p>
						Dark blue denotes interest, light blue denotes skill level:
					</p>
					<div style="max-width:960px;">
						<canvas id="myChart" width="400" height="400"></canvas>
					</div>
				</div>
			</div>
			<div>
				<div class="infobox">
					<h1>
						Spare Time Interests
					</h1>
					<p>
						I cannot stress this point too strongly: My life does NOT revolve exclusively around code! I code out of interest, and I do so gladly while at work, but in my spare time I engage in many other creative endeavors, and it is crucial to me that I have the time to do so. Namely: writing and pictorial art. You can find some of my written works <a href="https://fjordscene.com" target="_blank">on Fjordscene, my writing blog</a> where you can also see what I'm currently planning / working on.
					</p>
					<p>
						I also read a lot; I'm well-versed in classical literature and poetry, but the occassional fantasy or sci-fi novel makes an appearance as well.
					</p>
					<p>
						I have worked a good deal with translating poetry from Danish, Swedish, Norwegian and German into English, as I find solace in poetry - and also because it saddened me that a good deal of modern surrealist Nordic poetry was unavailable to the world at large. See <a href="https://scandipoetry.com" target="_blank">ScandiPoetry</a>, the home of my Gustaf Munch-Petersen and Edith Södergran translations online.
					</p>
					<p>
						I am also a rather prolific macro and nature photographer / Nikon enthusiast. See <a href="http://photography.fjordscene.com" target="_blank">my photography portfolio</a>.
					</p>
					<p>
						Other interests include animation, ARPG gaming (Grim Dawn and Path of Exile primarily), travelling, Star Trek, Shoegaze music, swimming and horseback riding (when I have the time).
					</p>
				</div>	
			</div>
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