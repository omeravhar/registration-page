<?php
$tnx = false;
if(isset($_POST['submit'])){
    $jsonFile = "signin.json";
    $old_data = file_get_contents($jsonFile);
    $old_data = json_decode($old_data);
    $old_data[] = $_POST;
    $new_data = json_encode($old_data);
    file_put_contents($jsonFile, $new_data);
    $tnx = true;
    
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>PRE-SHOW SALES TRAINING REGISTRATION</title>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <meta name="description" content="עומר אבהר מפתח web">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<!--<div class="d-flex justify-content-center h-100">-->
		<!--<div class="card">-->
			<div class="card-header">
				<h3>ITMA pre-show registration</h3>
<!--				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>-->
			</div>
                    <?php if(!$tnx == true):?>
			<!--<div class="card-body">-->
                        
                        <form method="post" action=""class="needs-validation">
					<div class="input-group form-group input-group-prepend">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                                            <input type="text" name="userName"class="form-control" placeholder="Name" required> 
                                            
					</div>
                            
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-building"></i></span>
						</div>
                                            <input type="text" name="userCompany"class="form-control" placeholder="Company" required>
                                            
						
					</div>
                                        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
                                            <input type="mail" name="userMail"class="form-control" placeholder="Mail" required>
						
					</div>
					<div class="row align-items-center remember">
                                            <input name="day1" type="checkbox" class="checkbox">ITMA Pre-show online sales training-June 11th, 11am (GMT+1)
					</div>
					<div class="row align-items-center remember">
						<input name="day2" type="checkbox" class="checkbox">ITMA Pre-show sales training-Fira De Barcelona - June 19th, 2pm (GMT+1)
					</div>
					<div class="form-group pt-3">
                                            <input type="submit" id="submitButton" name="submit" value="Submit" class="btn float-right login_btn" disabled="disabled" >
					</div>
                                
                                
                                <div class="card-footer">
                                        <div class="d-flex justify-content-center links">
                                            <!--Don't have an account?<a href="#">Sign Up</a>-->
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <!--<a href="#">Forgot your password?</a>-->
                                            <!--<a href="https://kornit.com/" target="_blank"> &nbsp;<b>Made by Omer Avhar IT Application</b></a>-->

                                            <p class="footer-copyright"></p>
                                        </div>
                                    </div>
				</form>
                            
			<!--</div>-->

                    <?php else :?>
                    <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        <h4 style="color:white">Your information is registered successfully see you at ITMA</h4>
                    </div>
                    </div>
                    <?php endif;?>
                        <script>
                        $(".checkbox").click(function(){
                           $("#submitButton").prop('disabled',false);
                        });
                        
                        </script>
</div>
    <a href="https://kornit.com/" target="_blank" style="color:#212529;"> &nbsp;<b style="color:#212529;">Made by Omer Avhar IT Application</b></a>
</body>
</html>