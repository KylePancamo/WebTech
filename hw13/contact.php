<!DOCTYPE html>
<html>
    <head>
        <link href="./main.css" rel="stylesheet">
        <link href="./school.css" rel="stylesheet">
        <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="../assets/bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div id="contact-row" class="row">
              <!-- Sidebar -->
              <div class="sidebar col-2 p-3 d-flex flex-column">
                <span class="nav-text text-center">Navigation</span>
                <ul class="navigation nav nav-pills flex-column navbar-custom">
                    <a class="nav-link" href="index.html">Home</a>
                    <a class="nav-link" href="school.html">School</a>
                    <a class="nav-link" href="hobbies.html">Hobby</a>
                    <a class="nav-link  active" href="#">Contact</a>
                </ul>
              </div>
              <!-- Main Content -->
              <div class="col-10 p-3 main-content d-flex p-5">
                <div class="contact d-flex">
                    <div class="row">
                        <div class="card">
                            <div class="card-body d-flex">
                                <img src="./images/portrait.jpg" class="card-img-top">
                                <div class="card-bottom">
                                    <h5 class="card-title">Contact Info</h5>
                                    <div class="card-text">
                                        <address>
                                            <ins>   
                                                <h5>
                                                    Kyle Pancamo<br/>
                                                    123-456-789<br/>
                                                    wgk893@my.utsa.edu<br/>
                                                    1 UTSA Circle
                                                </h5>
                                            </ins>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
		    		</div>
					<div class="row" id="contact-form">
						<?php 
							echo '<form method="post action="">';
								echo '<div class="form-group">';
									echo '<p>First name: ';
									echo '<input type="text" name="firstName"/>';
									echo '</p>';
								echo '</div>';
								echo '<div class="form-group">';
									echo '<p>Last name: ';
									echo '<input type="text" name="lastName"/>';
									echo '</p>';
								echo '</div>';
								echo '<div class="form-group">';
									echo '<p>Phone Number: ';
									echo '<input type="text" name="phone"/>';
									echo '</p>';
								echo '</div>';
								echo '<div class="form-group">';
									echo '<p>Comments: ';
									echo '<input type="text" name="comments"/>';
									echo '</p>';
								echo '</div>';
								echo '<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>';
							echo '</form>';
						?>
					</div>
                </div>
              </div>
            </div>
          </div>
    </body> 
</html>
