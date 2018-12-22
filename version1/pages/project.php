<div class="container cases">
	<?php require_once('includes/menu.php'); ?>
	<div class="screen">
    <?php
      $sql = "SELECT * FROM cv_projects WHERE id = {$uri[3]}";
				$result = $objConnection->query($sql);
				while($row = $result->fetch_object()){
					$id = $row->id;
					$name = $row->name;
					$screenshot = $row->screenshot;
					$link = $row->url;
          $stack = $row->stack;
					$goal = $row->goal;
          $process = $row->process;
          $created = $row->created;
        }
    ?>
		<h1>
      Project: <?php echo $name; ?>
		</h1>
    <div class="infobox">
      <ul class="cv-list">
        <li>
          <b>
            <?php 
              if($created == '0000-00-00'){
                echo 'Ongoing job';
              }else {
                echo 'Completed: ';
              }
            ?>
          </b>
          <?php 
            if($created != '0000-00-00'){
              echo $created;
            }
          ?>
        </li>
        <li>
          <b>Stack: </b>
          <?php echo $stack; ?>
        </li>
      </ul>
    </div>
    <section class="desc">
      <h3>
        Goal:
        <?php echo $goal; ?>
      </h3>
      <div>
        <?php echo str_replace('*', '\'', $process); ?>
      </div>
      <div class="screenshot">
        <a href="<?php echo $link; ?>" target="_blank">
          <?php 
					if($uri[3] != 30){
						echo '<img src="' . $screenshot . '" alt="' . $goal . '">'; 
					}
					?>
        </a>
      </div>
    </section>
		
  </div>
</div>