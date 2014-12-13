<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel= "stylesheet" type="text/css" href="css/bootstrap.css"> </link>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
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

<?php

	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		///Doha
		'class' =>'form-control input-sm',
		'placeholder'=>'Full Name',
	);

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	//Doha
	'class' =>'form-control input-sm',
		'placeholder'=>'Email',
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' =>'form-control input-sm',
		'placeholder'=>'password',
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class' =>'form-control input-sm',
		'placeholder'=>'password',
);
$phone = array(
	'name'	=> 'phone',
	'id'	=> 'phone',
	'value'	=> set_value('phone'),
	'maxlength'	=> 11,
	'size'	=> 30,
	//Doha
	'class' =>'form-control input-sm',
		'placeholder'=>'Phone',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
$submit=array(
'value' => 'REGISTER' ,
'class'=>'btn btn-info btn-block',

);
?>

<body>
<?php echo form_open($this->uri->uri_string()); ?>
<!--My additions-->

	<div class="container-fluid" id="container1">
		 <div class="navbar navbar-default navbar-static-top">
<a class="navbar-brand" href="welcome.php"> project inventory</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/IgniterAuth/index.php/auth/login">Sign In <span class="sr-only">(current)</span></a></li>
		</ul>
		
		
		
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            	<div>
            	</div>	
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Register</h3>
                    </div>
  <div class="panel-body">
  
  
  
  
  
<table>
	
	
	<div class="form-group">
		<?php echo form_label('Username', $username['id']); ?>
		<?php echo form_input($username); ?>
		<div style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></div>
	</div>
	
	
		<div class="form-group">
		<?php echo form_label('User Email', $email['id']); ?>
		<?php echo form_input($email); ?>
		<div style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></div>
	</div>
	
	<div class="form-group">
		<?php echo form_label('User phone', $phone['id']); ?>
		<?php echo form_input($phone); ?>
		<div style="color: red;"><?php echo form_error($phone['name']); ?><?php echo isset($errors[$phone['name']])?$errors[$phone['name']]:''; ?></div>
	</div>
	<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
           <div class="form-group">
		   <?php echo form_label('Password', $password['id']); ?>
		   <?php echo form_password($password); ?>
		   
		   </div>   
	    </div>
	</div>
	
	<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
           <div class="form-group">
		   <?php echo form_label('Confirm Password', $confirm_password['id']); ?>
		<?php echo form_password($confirm_password); ?>
		<div style="color: red;"><?php echo form_error($confirm_password['name']); ?></div>
		   
		   </div>   
	    </div>
	</div>
	
	
	

	<?php /*if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
		<?php echo $recaptcha_html; ?>
	</tr>
	<?php } else { ?>
	<tr>
		<td colspan="3">
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?>
		</td>
	</tr>
	<tr>
		<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
		<td><?php echo form_input($captcha); ?></td>
		<td style="color: red;"><?php echo form_error($captcha['name']); ?></td>
	</tr>
	<?php }
	} */?>
<!--</table>-->
</div> <!--for the panel body-->
</div> <!--For fluid container-->
<?php echo form_submit($submit); ?>
<?php echo form_close(); ?>
</body>
 <footer class="navbar navbar-default navbar-static-top"> © 2014 Project Inventory, Inc. All Rights Reserved.</footer>

    
	   

</html>