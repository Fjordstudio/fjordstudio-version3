<div class="container cases">
	<?php require_once('includes/menu.php'); ?>
	<div class="screen">
		<h1>
			Most Things I Have Worked On.
		</h1>
		<p>
			It's ok, you don't have to read through it all. <strong>*wink*</strong><br>
			The most relevant things should be on top. Work projects - then freelance, volunteer, personal - and at the end school - projects. While the funnier bits may be found closer to the bottom of the page, I completely understand if you choose to focus closer to the top. <strong>*laughs*</strong>
		</p>
		<br>
		<div id="filter-nav"></div>
		<br>
		<div class="filtered-list" data-tag="Work_Projects">
			<h2>
				Work Projects
			</h2>
			<div class="case-grid">
				<?php
					$sql = "SELECT * FROM cv_projects WHERE category_id = 1 AND hide != 'x' ORDER BY id DESC";
					$result = $objConnection->query($sql);
					while($row = $result->fetch_object()){
						$id = $row->id;
						$name = $row->name;
						$screenshot = $row->screenshot;
						$link = $row->url;
						$goal = $row->goal;

						echo '<div data-tag="Work_Projects">';
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
		<div class="filtered-list" data-tag="Freelance_Projects">
			<h2>
				Freelance + Volunteer Projects
			</h2>
			<div class="case-grid">
				<?php
					$sql = "SELECT * FROM cv_projects WHERE category_id = 2 AND hide != 'x' ORDER BY id DESC";
					$result = $objConnection->query($sql);
					while($row = $result->fetch_object()){
						$id = $row->id;
						$name = $row->name;
						$screenshot = $row->screenshot;
						$link = $row->url;
						$goal = $row->goal;

						echo '<div data-tag="Freelance_Projects">';
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
		<div class="filtered-list" data-tag="Personal_Sites">
			<h2>
				Personal Sites
			</h2>
			<div class="case-grid">
				<?php
					$sql = "SELECT * FROM cv_projects WHERE category_id = 3 AND hide != 'x' ORDER BY id DESC";
					$result = $objConnection->query($sql);
					while($row = $result->fetch_object()){
						$id = $row->id;
						$name = $row->name;
						$screenshot = $row->screenshot;
						$link = $row->url;
						$goal = $row->goal;

						echo '<div data-tag="Personal_Sites">';
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
		<div class="filtered-list" data-tag="School_Projects">
			<h2>
				School Projects
			</h2>
			<div class="case-grid">
				<?php
					$sql = "SELECT * FROM cv_projects WHERE category_id = 4 AND hide != 'x' ORDER BY id DESC";
					$result = $objConnection->query($sql);
					while($row = $result->fetch_object()){
						$id = $row->id;
						$name = $row->name;
						$screenshot = $row->screenshot;
						$link = $row->url;
						$goal = $row->goal;

						echo '<div data-tag="School_Projects">';
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
</div>