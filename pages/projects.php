<div class="container projects">
	<?php require_once('includes/menu.php'); ?>
	<div class="screen">
		<h1>The Work I Have Done, Which I Am Most Proud Of</h1>
		<p>
			I've worked on a lot of projects - but of course not every one is equally worth showing. These are the ones I'd like to point out - for a variety of reasons. Success rate. Developer satisfaction. Overdoing my own expectations. You know, that kind of reasons. 
		</p>
		<div class="case-grid">
			<?php
				$sql = "SELECT * FROM cv_projects WHERE selected = 'x' ORDER BY id DESC";
				$result = $objConnection->query($sql);
				while($row = $result->fetch_object()){
					$id = $row->id;
					$name = $row->name;
					$screenshot = $row->screenshot;
					$link = $row->url;
					$goal = $row->goal;
					
					echo '<div>';
					echo '<h2><span style="color:#232323;" class="mobile-element">Read About </span><a href="/resume/project/' . $id . '">' . $name . '</a></h2>';
					echo '<p class="mobile-element">' . $goal . '</p>';
					echo '<img src="' . $screenshot . '" alt="' . $goal . '">';
					echo '<div class="overlay">';
					echo '<p>' . $goal . '</p>';
					echo '<p><a class="button" href="/resume/project/' . $id . '">Read About the Project</a></p>';
					echo '<p><a href="' . $link . '">Visit ' . $name . '</a></p>';
					echo '</div>';
					echo '</div>';
				}
			?>
		</div>
		
	</div>
</div>