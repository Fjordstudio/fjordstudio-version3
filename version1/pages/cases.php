<div class="container cases">
	<?php require_once('includes/menu.php'); ?>
	<div class="screen">
		<h1>
			Examples of My Work
		</h1>
		
		<h2>
			Work
		</h2>
		<div class="case-grid">
			<?php
				$sql = "SELECT * FROM cv_projects WHERE category_id = 1 ORDER BY id DESC";
				$result = $objConnection->query($sql);
				while($row = $result->fetch_object()){
					$id = $row->id;
					$name = $row->name;
					$screenshot = $row->screenshot;
					$link = $row->url;
					$goal = $row->goal;
					
					echo '<div>';
					echo '<img src="' . $screenshot . '" alt="' . $goal . '">';
					echo '<div class="overlay">';
					echo '<h2><a href="' . $link . '">' . $name . '</a></h2>';
					echo '<p>' . $goal . '</p>';
					echo '<a class="button" href="/resume/project/' . $id . '">Read more</a>';
					echo '</div>';
					echo '</div>';
				}
			?>
		</div>
		
		<h2>
			Freelance + Volunteer Work
		</h2>
		<div class="case-grid">
			<?php
				$sql = "SELECT * FROM cv_projects WHERE category_id = 2 ORDER BY id DESC";
				$result = $objConnection->query($sql);
				while($row = $result->fetch_object()){
					$id = $row->id;
					$name = $row->name;
					$screenshot = $row->screenshot;
					$link = $row->url;
					$goal = $row->goal;
					
					echo '<div>';
					echo '<img src="' . $screenshot . '" alt="' . $goal . '">';
					echo '<div class="overlay">';
					echo '<h2><a href="' . $link . '">' . $name . '</a></h2>';
					echo '<p>' . $goal . '</p>';
					echo '<a class="button" href="/resume/project/' . $id . '">Read more</a>';
					echo '</div>';
					echo '</div>';
				}
			?>
		</div>
		
		<h2>
			Personal Sites
		</h2>
		<div class="case-grid">
			<?php
				$sql = "SELECT * FROM cv_projects WHERE category_id = 3 ORDER BY id DESC";
				$result = $objConnection->query($sql);
				while($row = $result->fetch_object()){
					$id = $row->id;
					$name = $row->name;
					$screenshot = $row->screenshot;
					$link = $row->url;
					$goal = $row->goal;
					
					echo '<div>';
					echo '<img src="' . $screenshot . '" alt="' . $goal . '">';
					echo '<div class="overlay">';
					echo '<h2><a href="' . $link . '">' . $name . '</a></h2>';
					echo '<p>' . $goal . '</p>';
					echo '<a class="button" href="/resume/project/' . $id . '">Read more</a>';
					echo '</div>';
					echo '</div>';
				}
			?>
		</div>
		
		<h2>
			School Projects
		</h2>
		<div class="case-grid">
			<?php
				$sql = "SELECT * FROM cv_projects WHERE category_id = 4 ORDER BY id DESC";
				$result = $objConnection->query($sql);
				while($row = $result->fetch_object()){
					$id = $row->id;
					$name = $row->name;
					$screenshot = $row->screenshot;
					$link = $row->url;
					$goal = $row->goal;
					
					echo '<div>';
					echo '<img src="' . $screenshot . '" alt="' . $goal . '">';
					echo '<div class="overlay">';
					echo '<h2><a href="' . $link . '">' . $name . '</a></h2>';
					echo '<p>' . $goal . '</p>';
					echo '<a class="button" href="/resume/project/' . $id . '">Read more</a>';
					echo '</div>';
					echo '</div>';
				}
			?>
		</div>
		
	</div>
</div>