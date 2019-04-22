<!doctype HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style type="text/css">
  	body{
  		background-image: url("<?php echo base_url('img/login/wallpaper.jpg'); ?>");
  		background-size: 100%;
  	}

  	.header{
  		background-color: #1F1F1F;
  		background-image: url("<?php echo base_url('img/login/sony_logo.png'); ?>");
  		background-position: center center;
    	background-size: contain;
    	background-repeat: no-repeat;
    	margin: auto;
    	height: 5.6rem;
    	width: 35%;
  	}

  	#x{
    	height: 5.6rem;
    	width: 6rem;
    	background-size: 4rem 4rem;
    	background-position: 50% 50%;
   		background-repeat: no-repeat;
    	cursor: pointer;
    	background-color: transparent;
  		float: right;
  		opacity: 0.6;
  	}

  	#x:hover{
  		opacity: 1;
  	}

  	.content{
  		background-color: white;
  		margin: auto;
    	height: 600px;
    	width: 35%;
      flex: all;

  	}

  	#ps-logo{
  		width: 90%;
  		max-height: 110px;
  		display: block;
  		margin-left: auto;
  		margin-right: auto;
      padding: 5%;
      padding-top: 0%;
      padding-bottom: 0%;
  	}

  	#black-text{
  		font-family: -apple-system,BlinkMacSystemFont,'Helvetica Neue',Helvetica,HiraKakuProN-W3,'Noto Sans CJK JP',sans-serif;
  		font-size: 14px;
  		text-align: left;
  		margin: 0;
  		display: block;
  		padding-top: 30px;
  		padding-bottom: 6px;
  		width: 100%;
  		min-height: 18px;
  	}

  	.content-text{
  		margin-right: 40px;
  		margin-left: 40px;
  	}

  	#blue-text{
  		font-family: -apple-system,BlinkMacSystemFont,'Helvetica Neue',Helvetica,HiraKakuProN-W3,'Noto Sans CJK JP',sans-serif;
  		text-align: left;
  		font-size: 1.4rem;
    	line-height: 1.8rem;
    	color: #4572ed;
    	cursor: pointer;
    	padding-top: 15px;
      margin-bottom: 10%;
  	}

	#blue-text:hover{
		color:darkblue;
	}

	.input-box{
		background-color: #E8F0FE;
		border-color: rgb(200, 200, 200);
		border-radius: 0;
		border-style: solid;
		border-width: 1px;
		font-family: Arial;
		font-size: 16px;
		height: 48px;
		margin: 0;
		width: 100%;
		padding-left: 10px;
		padding-right: 10px;
	}

  .button-signin{
    font-family: Arial;
    font-size: 16px;
    font-weight: 700;
    text-align: center;
    font-size: 16px;
    background-color: #5887f5;
    color: white;
    border: none;
    text-decoration: none;
    overflow-wrap: break-word;
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10%;
    height: 40px;
    width: 100%;
  }

  .button-create{
    font-family: Arial;
    font-size: 16px;
    text-align: center;
    font-size: 16px;
    background-color: white;
    color: #3c3c3c;
    border-color: rgb(200, 200, 200);
    border-radius: 0;
    border-width: 1px;
    border-style: solid;
    text-decoration: none;
    overflow-wrap: break-word;
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    height: 40px;
    width: 100%;
  }
  </style>
  <title>Sign In | Sony Entertainment Network</title>
 </head>
 <body>
 	<br><br>
 	<div class="container">
 		<div class="header">
 			<a href="<?php echo site_url('front/homepage')?>"><img id="x" src="<?php echo base_url('img/login/download.png'); ?>"></a>
 		</div>
 		<div class="content">
 			<img id="ps-logo" src="<?php echo base_url('img/login/logo_playstation.png'); ?>">
 			<div class="content-text">
 				<div id="black-text" align="center">
 				Access many Sony group services, all with one sign-in ID.
 				</div>
 				<div id="blue-text" align="center">
 				Learn More
 				</div>
 				<div>
 					<input type="text" name="email" class="input-box" placeholder="Sign-In ID (Email Address)">
          <input type="password" name="password" class="input-box" placeholder="Password">
 				</div>
        <a href="<?php echo site_url('front/homepage_user')?>"><button type="button" class="button-signin">Sign In</button></a>
        <div id="blue-text" align="center" style="margin-bottom: 5%">
        Trouble Signing In?
        </div>
        <a href="<?php echo site_url('account/create')?>"><button type="button" class="button-create">Create New Account</button></a>
 			</div>
 		</div>
 	</div>
 </body>
 </html>