<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign in</title>
	<link rel= "stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> </link>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	
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
.form-heading{
    margin-left: 33px;
}
.clear-form ,.clear-form .form-footer {
    padding: 15px 35px;
    margin-bottom: 0px;
}

.clear-form.two-col .col1, .clear-form.two-col .col2 {
    float: left;
    display: block;
    margin-bottom: 35px;
    border-left: 1px solid #bbb;
    width: 314px;
}
p {
margin: 0 0 10px;
display: block;
-webkit-margin-before: 1em;
-webkit-margin-after: 1em;
-webkit-margin-start: 0px;
-webkit-margin-end: 0px;
}
.clear-form .form-body {
padding: 0px 35px;
}

.btn.btn-fb {
color: #fff;
border: 1px solid #102e6d;
width: 250px;
text-shadow: 0px -1px 0px #194ab0;
-webkit-box-shadow: inset 0 1px 0 #3b5998,0px 1px 3px rgba(0,0,0,0.2);
-moz-box-shadow: inset 0 1px 0 #3b5998,0px 1px 3px rgba(0,0,0,0.2);
box-shadow: inset 0 1px 0 #3b5998,0px 1px 3px rgba(0,0,0,0.2);
background: -webkit-gradient(linear,left bottom,left top,color-stop(0,#133783),color-stop(1,#3b5998));
}

.btn.btn-google {
color: #fff;
border: 1px solid #151515;
width: 250px;
text-shadow: 0px -1px 0px #3c3c3c;
-webkit-box-shadow: inset 0 1px 0 #555555,0px 1px 3px rgba(0,0,0,0.2);
-moz-box-shadow: inset 0 1px 0 #555555,0px 1px 3px rgba(0,0,0,0.2);
box-shadow: inset 0 1px 0 #555555,0px 1px 3px rgba(0,0,0,0.2);
background: #222;
background: -webkit-gradient(linear,left bottom,left top,color-stop(0,#222),color-stop(1,#444));}

.btn.btn-large {
font-size: 16px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
background-color: #FF7F38;
color: white;
width: 206px;
}
.btn:focus, .btn:active, .btn:hover{
      background-color: #F57A36;
    

}
.center{
    text-align: center;
}
input{
    font-size: 14px;
    border-radius: 3px 3px 0px 0px;
    border: 1px solid #bbb;
    line-height: 20px;
    vertical-align: middle;
    width: 206px;
    height: 40px;
    margin-bottom: 2px;
}
	</style>
</head>
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' =>'input-block-level',
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class'=>'input-block-level'
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>
<body>
	<div class="container-fluid" id="container1">
		<div class="row">
			<header class="navbar navbar-default navbar-static-top">
				<a class="navbar-brand" href="welcome.php"> project inventory</a> </header> 
		</div>
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="clear-form two-col panel-body">
                    <div class="title">
                        <h3 class="header">Sign in</h3>
                        <hr>
                    </div>
					
  <div class="col-md-6">
                        <h4>Use other accounts</h4>
                        <p>You can also sign in using your Facebook account or Google+ account.</p>
                        <a href="" class="btn btn-large btn-block btn-fb">Login with Facebook</a>
                        <a href="" class="btn btn-large btn-block btn-google">Login with Google</a>
                    </div>

                    <div class="col-md-4">
                        <div class="form-heading">
                            <h4>Using your account</h4>
                        </div>
<div class="form-body">
        <div class="pair-group">
		<?php echo form_label($login_label, $login['id']); ?></td>
		<?php echo form_input($login); ?>
				<div style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></div>

		</div>
		</div>
						
<div class="form-body">
        <div class="pair-group">
		<?php echo form_label('Password', $password['id']); ?>
		<?php echo form_password($password); ?>
		<div style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></div>

		</div>
		</div>

	

	<?php if ($show_captcha) {
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
	} ?>

	<tr>
		<td colspan="3">
			<?php echo form_checkbox($remember); ?>
			<?php echo form_label('Remember me', $remember['id']); ?>
			<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
			<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>
		</td>
	</tr>
</table>
<?php echo form_submit('submit', 'Let me in'); ?>
<?php echo form_close(); ?>