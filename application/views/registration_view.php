<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel= "stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> </link>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<style>

#container1 {
    background-color: #e2dada;
}

.centered-form {
    margin-top: 120px;
    margin-bottom: 120px;
}

.centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
    border-radius: 10px;
}
footer{
	padding-top: 60px;
	text-align:center;
}
@font-face{
	font-family:MyFont;
	src:url(bootstrap/truetype/LemonMilk.otf);
	font-weight:bold;
}
.navbar-brand{
	font-family: MyFont;
	color: #5D6566;
	font-size:30px;
	margin-top:10px;
}
a:hover{
text-decoration:none;
color: #FF7F38;
}
.btn{
	background-color: #FF7F38;
	border-color: #FF7F38;
}


	
	</style>
</head>
<body>
	<div class="container-fluid" id="container1">
		<div class="row">
			<header class="navbar navbar-default navbar-static-top">
				<a class="navbar-brand" href="welcome.php"> project inventory</a> </header> 
		</div>
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            	<div>
            	</div>	
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Register</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form" action="" method="">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Full Name" >
                            </div>
 							
 							<div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" >
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone_no" id="phone_no" class="form-control input-sm" placeholder="Phone Number" >
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" >
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" >
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="Register" class="btn btn-info btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>	    
    </div>
    	 <footer class="navbar navbar-default navbar-static-top"> © 2014 Project Inventory, Inc. All Rights Reserved.</footer>

    
	   
</body>
</html>