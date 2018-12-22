<div class="container reach">
	<?php require_once('includes/menu.php'); ?>
	<div class="screen">
		<h1>Reach Me</h1>
		<!-- Contact form, contact info etc. -->
		<div class="grid col-50-50">
			<div>
				<div class="form">
					<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
						<div class="form-row">
							<label for="name">Your Name:</label>
							<input type="text" name="name" id="name" maxlength="70" minlength="10" required >
						</div>
						<div class="form-row">
							<label for="email">Your E-mail:</label>
							<input type="email" name="email" id="email" required >
						</div>
						<fieldset>
							<legend>
								What Do You Want to Talk About?
							</legend>
							<div class="form-row">
								<label for="subject">The Short Version:</label>
								<input type="text" name="subject" id="subject" required >
							</div>
							<div class="form-row">
								<label for="message">The Whole Story:</label>
								<textarea name="message" id="message" required ></textarea>
							</div>
						</fieldset>
						<div class="form-row">
							<input type="text" name="hidden" id="hidden" class="hidden">
						</div>
						<div class="form-row">
							<input type="submit" name="submit" value="Make Contact">
						</div>
					</form>
				</div>
			</div>
			<div>
				<div>
					<p>
						If you have a message for me, you've come to the right place. Fill out this form, and your work is done!
					</p>
					<p>
						I accept job offers as well as requests for freelance or project-based work - leave me your contact information and I will get back to you.
					</p>
					<br />
					<p>
						You can also locate me on one of my social media accounts - I watch them carefully although I don't necessarily post much. I shall spare you my objections over how time-consuming these sites are, and simply tell you that I do not access them from my phone. Ever. For the sake of my sanity. So if you do contact me through one of these channels, do expect a certain delay before I can respond.
					</p>
					<p>
						I am easiest to catch on <a href="http://twitter.com/Fjordscene" target="_blank">Twitter</a>,  and <a href="https://www.linkedin.com/in/katrine-marie-burmeister-98047368" target="_blank">LinkedIn</a>.
					</p>
					<p>
						I'm looking forward to hear from you. 
					</p>
				</div>
			</div>
		</div>
		<?php
			if(isset($_POST["submit"]) && isset($_POST["name"]) && isset($_POST["email"]) && empty($_POST["hidden"])){
				$name1 = strip_tags($_POST["name"]);
				$subject1 = strip_tags($_POST['subject']);
				$email1 = strip_tags($_POST['email']);
				$message1 = strip_tags($_POST['message']); 
				
				$name = str_replace("'", "-", str_replace("\"", "-", $name1));
				$subject = str_replace("'", "-", str_replace("\"", "-", $subject1));
				$email = str_replace("'", "-", str_replace("\"", "-", $email1));
				$message0 = str_replace("'", "-", str_replace("\"", "-", $message1));

				$message = $name . "\r\n" . $email . "\r\n" . $subject . "\r\n" . $message0;
				
				$from = 'nebula@fjordstudio.dk';
        $headers = 'From: '. $from ."\r\n". 'Reply-To: ' . $from ."\r\n" . 'X-Mailer: PHP/' . phpversion();


        mail("fjordscene@gmail.com", $subject, $message, $headers);
				
// 				require_once('includes/dbConn.php');
				
// 				$sql = "INSERT INTO resume_contact (rc_id, rc_name, rc_email, rc_subject, rc_message, rc_time) VALUES ('', '{$name}', '{$email}', '{$subject}', '{$message}', NOW())";
// 				$result = $objConnection->query($sql);
				
				echo "<p>Thank you for reaching out. <br>I'll get back to you as soon as possible.<br>Have a lovely day.</p>";

			}
		?>
	</div>
</div>