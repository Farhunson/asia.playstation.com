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
    	width: 45%;
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
      display: flex;
      flex-basis: 1;
      flex-shrink: 1;
  		margin: auto;
    	height: 600px;
    	width: 45%;
      box-sizing: border-box;
      position: relative;
      overflow-x:hidden;
      overflow-y:hidden;
  	}

  	#black-text{
  		font-family: -apple-system,BlinkMacSystemFont,'Helvetica Neue',Helvetica,HiraKakuProN-W3,'Noto Sans CJK JP',sans-serif;
  		font-size: 24px;
  		text-align: center;
  		margin: auto;
  		display: block;
  		padding-top: 20px;
  		padding-bottom: 6px;
  		width: 320px;
  		min-height: 18px;
  	}

  	.content-text{
      padding: auto;
      margin-left: auto;
      margin-right: auto;
      margin-top: 30%;

  	}

  	#blue-text{
  		font-family: -apple-system,BlinkMacSystemFont,'Helvetica Neue',Helvetica,HiraKakuProN-W3,'Noto Sans CJK JP',sans-serif;
  		text-align: right;
  		font-size: 1.4rem;
    	line-height: 1.8rem;
    	color: #4572ed;
    	cursor: pointer;
    	padding-top: 15px;
      display: inline;
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
		width: 320px;
		padding-left: 10px;
		padding-right: 10px;
		margin-top: 10%;
	}

  #img1{
    height: 100px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 7%;
  }

  .button-start{
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
    width: 350px;
  }

  #grey-text{
      font-family: -apple-system,BlinkMacSystemFont,'Helvetica Neue',Helvetica,HiraKakuProN-W3,'Noto Sans CJK JP',sans-serif;
      color: #b4b4b4;
      font-size: 1.4rem;
      line-height: 1.8rem;
      text-align: left;
      margin: auto;
      display: inline;
      padding-top: 20px;
      padding-bottom: 6px;
      width: 320px;
      min-height: 18px;
    }

    .content-align{
      text-align: center;
      margin-top: 10%;
    }

    #foot-text{
      font-family: -apple-system,BlinkMacSystemFont,'Helvetica Neue',Helvetica,HiraKakuProN-W3,'Noto Sans CJK JP',sans-serif;
      color: #949494;
      font-size: 1.2rem;
      line-height: 1.8rem;
      text-align: center;
      display: inline-block;
      margin-left:45%;
      margin-top: 1%;
      background-position: center center;
    }

    #foot-text:hover{
      color:#4572ed;
      text-decoration: none;
    }    
  </style>
  <title>Create Account | Sony Entertainment Network</title>
 </head>
 <body>
 	<br><br>
 	<div class="container">
 		<div class="header">
 			<a href="#!"><img id="x" src="<?php echo base_url('img/login/download.png'); ?>"></a>
 		</div>
 		<div class="content">
 			<div class="content-text">
 				<div id="black-text" align="center">
 				Create Account
 				</div>
        <img id="img1"src="<?php echo base_url('img/create_account/image_create_account.png'); ?>">
        <a href="#!"><button type="button" class="button-start">Start</button></a>
        <div class="content-align">
          <div id="grey-text" align="center">
            Already have an account? 
            <div id="blue-text" align="center">
            Sign In
            </div>
          </div>
        </div>
 			</div>
 		</div>
    <a href="#!">
      <div id="foot-text">
        Terms / Privacy / Help
      </div>
    </a>
 	</div>
 </body>
 </html>