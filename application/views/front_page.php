<!doctype HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
<style>
* {
  box-sizing: border-box;
}
 
body {
  margin: 0;
}
 
.navbarsa {
  overflow: hidden;
  background-color: #1F1F1F;
  font-family: Arial, Helvetica, sans-serif;
  height: 65px;
  padding-left: 6px;
  border-radius: 0px;
  
}
 
.navbarsa a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 12px 14px;
  text-decoration: none;
}
 
.dropdownsa {
  float: left;
  overflow: hidden;
}
 
.dropdownsa .dropbtnsa {
  font-size: 14px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 13px;
  background-color: inherit;
  font: inherit;
  margin: 0;
  padding-top: 22px;
  font-family: 'ＭＳ Ｐゴシック';
  font-weight: 400;
  cursor: pointer;
}
 
.navbarsa .dropdownsa:hover .dropbtnsa {
  background-color: #003791;
  opacity :1;
  transform: translateY(0);
}
 
.dropdown-contentsa {
  display: none;
  position: absolute;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
 
.dropdown-contentsa .header {
  /*padding: 16px;*/
  color: white;
  /*margin-top: 10px;*/
}
 
.dropdownsa:hover .dropdown-contentsa {
  display: block;
}

.fontdropdown {
  font-family :"SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-weight: 400;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #ccc;
  height: 250px;
}
 
.column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
 
.column a:hover {
  background-color: #ddd;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.buttonpshover {
  opacity: 1;
  transition: 0.3s;
}

.buttonpshover :hover {
  color : #00a2ff;
  opacity: 0.6;
}
 
#grad1 {
  background: linear-gradient(bottom, transparent 100%, black 50%);
  background: rgb(55,127,170);
  background: radial-gradient(ellipse, rgba(55,127,170,1) 30%, rgba(0,55,145,1) 51%);

  z-index : 2;
}
 
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}

#search {
    position: absolute;
    top: 50px;
    right: 20px;
    width: 200px;
    height: 36px;
    margin: 0;
    padding: 0 30px 0 10px;
    color: white;
    background-color: #333;
    border: 0;
    border-radius: 3px;
    outline: 0;
    font-size: 12px;
    font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
    box-sizing: border-box;
}

#search_id {
    margin: 0;
    float: right;
    padding-right: 25px;
    padding-top: 20px;
}
</style>
<title>PS4 | Games | PlayStation</title>
</head>
<body>
   <nav class="navbarsa navbar-expand-md" style="background-color: black; height: 35px; padding: 0;margin: 0" >
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <div class="navbar-nav ml-auto" style="float:right; padding-top:13px; padding-right: 10px" >
                <div class="nav-item">
                    <img src = "<?php echo base_url('img/sony_logo.svg'); ?>" style="padding-bottom: 10px"/>
                </div>
            </div>
        </div>
    </nav>
<div class="navbarsa" style="margin:0" >
  <a href="https://asia.playstation.com/en-id/"><img src = "<?php echo base_url('img/icon_ps_pc.svg'); ?>"></a>
  <div class="dropdownsa">
    <button class="dropbtnsa">PRODUCTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header" >
        <!-- <h2>PRODUCTS</h2> -->
        <table style="margin-left: 180px ">
          <tr>
            <td class="buttonpshover">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstation4.png'); ?>" style="padding:15px; width: 150px " /> <br>
              <h6 class="fontdropdown"style="text-align:center">PlayStation®4</h6></a>
            </td>
            <td class="buttonpshover">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationvr.png'); ?>" style="padding:15px; width: 150px " /> <br>
              <h6 class="fontdropdown"style="text-align:center">PlayStation®VR</h6></a>
            </td>
            <td class="buttonpshover">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationvita.png'); ?>" style="padding:15px; width: 150px " /> <br>
              <h6 class="fontdropdown"style="text-align:center">PlayStation®Vita</h6></a>
            </td>
          </tr>
        </table>
      </div>  
    </div>
  </div>
  <div class="dropdownsa">
    <button class="dropbtnsa">GAMES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <h2>GAMES</h2>
      </div>  
    </div>
  </div>
  <div class="dropdownsa">
    <button class="dropbtnsa">PSN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
    <div class="dropdownsa">
    <button class="dropbtnsa">NEWS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
    <div class="dropdownsa">
    <button class="dropbtnsa">SUPPORT
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
    <div class="dropdownsa">
    <button class="dropbtnsa">BUY
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
  <div class="dropdownsa">
    <button class="dropbtnsa">SIGN IN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
  <div>
  	<input id="search" type="text" placeholder="Search.." style="float: right" src="<?php echo base_url('img/menu_navi-search.svg'); ?>">
   	<img id="search_id" src="<?php echo base_url('img/menu_navi-search.svg'); ?>" onclick='image(this)'>
  </div>
</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url('img/spidey.png');?>" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url('img/kindom.png');?>" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url('img/dgone.png');?>" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
	<div class="row">
		 <div class="col" align="middle" style="padding-top:10px">
			<h1 style="font-size:2.5vw">Garansi PlayStation 4 di Indonesia</h1>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div style="font-size:1vw" ><p>&nbsp;</p>
			<p>Dengan Sistem Garansi baru, para pengguna di Indonesia akan dapat menikmati manfaat berikut:</p>
			<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Produk <i>Authentic Official</i> (Asli Resmi) – Produk Resmi PlayStation akan memiliki stiker hologram yang menyatakan “Produk Resmi Indonesia”</p>
			<p>·&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lebih dari 50 Pusat Layanan di seluruh Indonesia – Pengguna dapat membawa Produk Resmi PlayStation mereka ke beragam pusat layanan di Indonesia.</p>
			<p>&nbsp;</p>
			</div>
			<a href="#" class="btn btn-primary" role="button" style="font-size:1vw">Learn More</a>
		</div>
		<div class="col-sm-6">
			<img src="<?php echo base_url('img/indo.jpg');?>" width=100% height=100%>
		</div> 		
	</div></br></br></br>
	<div class="row">
		 <div class="col" align="middle" style="padding-top:10px">
			<h1 style="font-size:2.5vw">PlayStation 4</h1>
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div style="font-size:1vw" >
				<div  >
					<p>PS4 system is the home to games with rich, high-fidelity graphics and deeply immersive experiences that shatter expectations.</p>
					<p>Simply hit the SHARE button on the controller to share your gameplay experience to the world, or communicate with your friends online.</p>
					<p>PlayStation exclusives and most immersive games are waiting for you.</p>
				</div></br></br></br>
				<a href="#" class="btn btn-primary" role="button" style="font-size:1vw">Learn More</a>
			</div>
		</div>
		<div class="col-sm-6">
			<img src="<?php echo base_url('img/luol.png');?>" width=100% height=100%>
		</div> 		
	</div></br></br></br>
	<div class="row">
		 <div class="col" align="middle" style="padding-top:10px">
			<h1 style="font-size:2.5vw">PlayStation VR</h1>	
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<img src="<?php echo base_url('img/vr.png');?>" width=100% height=100%>
		</div> 		
		<div class="col-sm-6">
			<div style="font-size:1vw" >
				<div  >
					<p>PlayStation VR (PS VR) uses a combination of 3D space and independent 3D audio technology to surround the player in a 360° world, giving an incredible level of immersion and a &quot;Sense of Presence&quot; so you will really feel like you are in the game.</p>
					<p>There is also a huge variety of amazing non-game content to enjoy!</p>
					<p>With a great new price, the immersive world of PS VR is now easier than ever to experience!</p>
				</div>
						</br></br></br>
				<a href="#" class="btn btn-primary" role="button" style="font-size:1vw">Learn More</a>
			</div>
		</div>
	</div></br></br></br>
	<div class="row">
		 <div class="col" align="middle" style="padding-top:10px">
			<h1 style="font-size:2.5vw">PlayStation Classic</h1>	
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div style="font-size:1vw" >
				<div  >
					<p>PlayStation Classic, a miniature games console that mirrors the look of the original PlayStation and comes preloaded with 20 original games, has launched.</p>
					<p>The design of the PlayStation Classic resembles PlayStation, including the button layout, as well as controllers and outer package, but in a miniature size, it is 45% smaller on the sides and 80% smaller in volume than the original console.</p>
				</div>
						</br></br></br>
				<a href="#" class="btn btn-primary" role="button" style="font-size:1vw">Learn More</a>
			</div>
		</div>
		<div class="col-sm-6">
			<img src="<?php echo base_url('img/classic.png');?>" width=100% height=100%>
		</div> 		
	</div>
	<div class="row">
		 <div class="col" align="middle" style="padding-top:10px">
			<h1 style="font-size:2.5vw">Find Your Perfect Game</h1>	
		 </div>
	</div>
	<div class="row">
		<div class="col-sm-6" align='middle'>
			<img src="<?php echo base_url('img/kindom2.png');?>" width=100% height=100%>
			</br></br>
			<a href="#" class="btn btn-primary" role="button" style="font-size:1vw">Learn More</a>
		</div>
		<div class="col-sm-6" align='middle'>
			<img src="<?php echo base_url('img/re2.png');?>" width=100% height=100%>
			</br></br>
			<a href="#" class="btn btn-primary" role="button" style="font-size:1vw">Learn More</a>
		</div> 		
	</div>
	
  </div>


</body>
</html>