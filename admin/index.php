<?php
ob_start();
include('class.php');
if(isset($_SESSION['uname'])){
	header('location:home.php');	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin panel login</title>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="tanvir.css" rel="stylesheet" type="text/css">
 
 
    <style type="text/css">
      body {
        padding-top: -40px;
        padding-bottom: 40px;
        background-color: #2A211C;
      }


      .form-signin {
        max-width: 350px;
        padding: 19px 40px 29px;
		padding-bottom:40px;
        margin: 0 auto 20px;
		margin-top:80px;
        background-color:#DDE865;
        border: 1px solid #D7BE1D;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
	</head>
	  <body>
	  	 <div class="codrops-top">
                
                    <strong>&laquo;Powerd by: </strong>Nahidul Islam Tanvir.
                

				
                <span class="right">
                  
                        <strong>&copy; 2013  &laquo;</strong>
                   
                </span>
                <div class="clr"></div>
            </div>

    <div class="container">


      <form class="form-signin" action="index.php" method="post">
	  
                <?php
					if(isset($_REQUEST['login'])){
						
						if(empty($_REQUEST['username']) || empty($_REQUEST['password'])){
							?>
                            <div class="alert alert-danger">
						Please enter your Username and Password.
					</div>
                            <?php	
						}
						
							
						else{
							extract($_REQUEST);
							if(isset($_REQUEST['remember'])){
	setcookie("usname",$username,time()+3600);
	setcookie("paword",$password,time()+3600);
}
							
							if($admin->checkUser($username,$password)){
								
								header('location:home.php');
								
								
							}else{
							?>
                             <div class="alert alert-danger">
						Please enter valid Username and Password.
					</div>
                            
                            <?php
							
						}
						
					}
						
					}
				
					
					if(!isset($_REQUEST['login'])){
				?>
					<div class="alert alert-info">
						Please enter your Username and Password.
					</div>
                    <?php
					}
					?>
		
		
        <input type="text" class="input-block-level" name="username" placeholder="User name" value="<?php echo isset($_COOKIE['usname'])?$_COOKIE['usname']:''?>"/>
        <input type="password" class="input-block-level" name="password" placeholder="Password" value="<?php echo isset($_COOKIE['paword'])?$_COOKIE['paword']:''?>"/>
        <label class="checkbox">
          <input type="checkbox" name="remember" value="remember-me"> Remember me
        </label>
        <button   class="btn btn-block btn-success" name="login" type="submit"><strong>Login</strong></button>
      </form>

    </div> 
	</body>
	</html>