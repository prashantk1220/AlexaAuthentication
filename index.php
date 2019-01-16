<?php
    session_start();
    $state = $_GET['state'];
	$redirect_uri = $_GET['redirect_uri'];
	$_SESSION['state'] = $state;
	$_SESSION['redirect_uri'] = $redirect_uri;
?>

<html>

<head>
	<title>
		Institute Helper Login
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
 	</script>
 	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style>
		.single-contact-info i {
		  font-size: 36px;
		  margin-bottom: 15px;
		  color: #fff;
		}
		.single-contact-info p {
		  color: #fff;
		  margin-bottom: 0;
		}
		  .single-contact-info p:last-child {
		    margin-bottom: 0;
		  }

		/* Contact Form */
		.contact-form input[type="text"], .contact-form input[type="email"] {
		  width: 100%;
		  border: 1px solid #fff;
		  color: #fff;
		  height: 40px;
		  padding: 7px 15px;
		  background-color: transparent;
		  margin-bottom: 20px;
		  border-radius: 3px;
		}
		.contact-form textarea {
		  width: 100%;
		  border: 1px solid #fff;
		  color: #fff;
		  padding: 5px 15px;
		  background-color: transparent;
		  margin-bottom: 20px;
		  border-radius: 3px;
		  height: 98px;
		  resize: none;
		}
		.contact-form input[type="submit"] {
		  width: 100%;
		  border: 1px solid #fff;
		  color: #fff;
		  height: 40px;
		  padding: 7px 15px;
		  background-color: transparent;
		  margin-bottom: 20px;
		  border-radius: 3px;
		  text-transform: uppercase;
		}
		  .contact-form input[type="submit"]:hover {
		    background-color: #fff;
		    color: #ff4081; 
		  }

		/*---- Footer Bottom ----*/
		/* Footer Social */
		.social a {
		  border: 1px solid #fff;
		  border-radius: 50%;
		  color: #fff;
		  display: inline-block;
		  height: 30px;
		  margin: 0 1px;
		  width: 30px;
		  text-align: center;
		}
		  .social a i {
		    font-size: 14px;
		    line-height: 30px;
		    -webkit-transition: none 0s ease 0s;
		    transition: none 0s ease 0s; 
		  }
		  .social a:hover {
		    background-color: #fff;
		    color: #ff4081; 
		  }

		/* Footer Copyright */
		.footer-copyright p {
		  font-size: 13px;
		  line-height: 24px;
		  margin-bottom: 0;
		  color: #fff;
		}
		.footer-copyright p a {
		    color: #fff; 
		  }
		.footer-copyright p a:hover {
		      text-decoration: underline;
		    }
	    body {
	        background-image: url("background.jpg");
	    }
	</style>
</head>

<body>
	<center>
		<br>
		<div class="jumbotron">
			<h1>
				Intitute Helper
			</h1>
			<p>
				Click any one of the buttons below
			</p>
		</div>
		<div class="well">
			<a href="#" data-toggle="modal" data-target="#myModal2" class="btn btn-block btn-primary" role="button">
				Student Login
			</a>
			<div id="myModal2" class="modal fade" role="dialog">
			  	<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal">
			        			&times;
			        		</button>
			        		<h4 class="modal-title">
			        			Institute Helper
			        		</h4>
			      		</div>
			      		<div class="modal-body">
			        		<div class="container">
								<div class="row">
					  				<div class="col-sm-1 col-md-1 col-xs-3">
					  				</div>
					  				<div class="col-sm-4 col-md-4 col-xs-12 ">
						  				<center>
						  					<h1>
						  						Student Login
						  					</h1>
						  				</center>
						  				<br>
						  				<br>
						  				<form action="login-connectivity_student.php" method="POST" enctype="multipart/form-data">
						  					<div class="input-group">
						  						<label class="sr-only" for="email">
						  							Student ID:
						  						</label>
						  						<span class="input-group-addon">
						  						</span>
						  						<input id="studentid" type="text"  class="form-control" name="student_id"  placeholder="Enter your Student ID">
						  					</div>
						  						<br>
						  					<div class="input-group">
					  							<label class="sr-only" for="password">
					  								Password:
					  							</label>
					  							<span class="input-group-addon">
					  							</span>
					  							<input id="password" type="password" class="form-control" name="Password" placeholder="Enter your Password">
						  					</div>
					  						<br>
					  						<br>
					  				</div>
					  				<div class="col-sm-4 col-md-4 col-xs-12">
					  				</div>
					  			</div>
					  		</div>
					  	</div>
				  		<div class="modal-footer">
				  			<button id="singin" type="submit" class="btn btn-block btn-primary btn-lg">
				  				Login
				  			</button>
				  		</form>
				  	</div>
				  </div>
				</div>
			</div>

			<br>
			<br>

			<a href="#" data-toggle="modal" data-target="#myModal1" class="btn btn-block btn-primary">
				Faculty Login
			</a>
			<div id="myModal1" class="modal fade" role="dialog">
			  	<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal">
			        			&times;
			        		</button>
			        		<h4 class="modal-title">
			        			Institute Helper
			        		</h4>
			      		</div>
			      		<div class="modal-body">
			        		<div class="container">
								<div class="row">
					  				<div class="col-sm-1 col-md-1 col-xs-3">
					  				</div>
					  				<div class="col-sm-4 col-md-4 col-xs-12 ">
						  				<center>
						  					<h1>
						  						Faculty Login
						  					</h1>
						  				</center>
						  				<br>
						  				<br>
						  				<form action="login-connectivity_faculty.php" method="POST" enctype="multipart/form-data">
						  					<div class="input-group">
						  						<label class="sr-only" for="email">
						  							Faculty ID:
						  						</label>
						  						<span class="input-group-addon">
						  						</span>
						  						<input id="faculty_id" type="text"  class="form-control" name="faculty_id"  placeholder="Enter your Faculty ID">
						  					</div>
						  						<br>
						  					<div class="input-group">
					  							<label class="sr-only" for="password">
					  								Password:
					  							</label>
					  							<span class="input-group-addon">
					  							</span>
					  							<input id="password" type="password" class="form-control" name="Password" placeholder="Enter your Password">
						  					</div>
					  						<br>
					  						<br>
					  				</div>
					  				<div class="col-sm-4 col-md-4 col-xs-12">
					  				</div>
					  			</div>
					  		</div>
					  	</div>
				  		<div class="modal-footer">
				  			<button id="singin" type="submit" class="btn btn-block btn-primary btn-lg">
				  				Login
				  			</button>
				  		</form>
				  	</div>
				  </div>
				</div>
			</div>

			<br>
			<br>

			<a href="#" data-toggle="modal" data-target="#myModal3" class="btn btn-block btn-primary" role="button">
				Guest Registration
			</a>
			<div id="myModal3" class="modal fade" role="dialog">
			  	<div class="modal-dialog">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<button type="button" class="close" data-dismiss="modal">
			        			&times;
			        		</button>
			        		<h4 class="modal-title">
			        			Institute Helper
			        		</h4>
			      		</div>
			      		<div class="modal-body">
			        		<div class="container">
								<div class="row">
					  				<div class="col-sm-1 col-md-1 col-xs-3">
					  				</div>
					  				<div class="col-sm-4 col-md-4 col-xs-12 ">
						  				<center>
						  					<h1>
						  						Guest Registration
						  					</h1>
						  				</center>
						  				<br>
						  				<br>
						  				<form action="login-connectivity_guest.php" method="POST" enctype="multipart/form-data">
						  					<div class="input-group">
						  						<label class="sr-only" for="email">
						  							Guest Name:
						  						</label>
						  						<span class="input-group-addon">
						  						</span>
						  						<input id="guestname" type="text"  class="form-control" name="guest_name"  placeholder="Enter your name" required>
						  					</div>
						  						<br>
						  					<div class="input-group">
					  							<label class="sr-only" for="password">
					  								Guest Email:
					  							</label>
					  							<span class="input-group-addon">
					  							</span>
					  							<input id="guestemail" type="email" class="form-control" name="guest_email" placeholder="Enter your Email" required>
						  					</div>
					  						<br>
					  						<br>
					  				</div>
					  				<div class="col-sm-4 col-md-4 col-xs-12">
					  				</div>
					  			</div>
					  		</div>
					  	</div>
				  		<div class="modal-footer">
				  			<button id="singin" type="submit" class="btn btn-block btn-primary btn-lg">
				  				Login
				  			</button>
				  		</form>
				  	</div>
				  </div>
				</div>
			</div>
		</div>
	</center>
</body>

</html>