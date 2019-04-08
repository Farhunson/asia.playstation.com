<!doctype HTML>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}
 
body {
  margin: 0;
}
 
.navbar {
  overflow: hidden;
  background-color: #1F1F1F;
  font-family: Arial, Helvetica, sans-serif;
  height: 65px;
  padding-left: 10px;
}
 
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
 
.dropdown {
  float: left;
  overflow: hidden;
}
 
.dropdown .dropbtn {
  font-size: 14px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
  padding-top: 27px;
  font-family: 'ＭＳ Ｐゴシック';
  font-weight: 400;
}
 
.navbar .dropdown:hover .dropbtn {
  background-color: #003791;
}
 
.dropdown-content {
  display: none;
  position: absolute;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
 
.dropdown-content .header {
  padding: 16px;
  color: white;
  margin-top: 10px;
}
 
.dropdown:hover .dropdown-content {
  display: block;
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
 
#grad1 {
  background: linear-gradient(to bottom, transparent 100%, black 50%);
  background: rgb(55,127,170);
  background: radial-gradient(circle, rgba(55,127,170,1) 30%, rgba(0,55,145,1) 51%);
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
    color: #ffffff;
    background-color: #303030;
    border: 0;
    border-radius: 3px;
    outline: 0;
    font-size: 12px;
    font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
    box-sizing: border-box;
    opacity: 0.2;
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
   <nav class="navbar navbar-expand-md" style="background-color: black; height: 40px;" >
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" align="middle">
                    <img src = "<?php echo base_url('img/sony_logo.svg'); ?>" align="right" style="padding-right: 15px;" />
                </li>
            </ul>
        </div>
    </nav>
<div class="navbar">
  <a href="https://asia.playstation.com/en-id/"><img src = "<?php echo base_url('img/icon_ps_pc.svg'); ?>"></a>
  <div class="dropdown">
    <button class="dropbtn">PRODUCTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="grad1">
      <div class="header" >
        <h2>PRODUCTS</h2>
      </div>  
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">GAMES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="grad1">
      <div class="header">
        <h2>GAMES</h2>
      </div>  
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">PSN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
    <div class="dropdown">
    <button class="dropbtn">NEWS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
    <div class="dropdown">
    <button class="dropbtn">SUPPORT
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
    <div class="dropdown">
    <button class="dropbtn">BUY
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">SIGN IN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="grad1">
      <div class="header">
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
  <div>
  	<input id="search" type="text" placeholder="Search.." style="float: right" src="img src = "<?php echo base_url('img/menu_navi-searchsvg'); ?>">
   	<img id="search_id" src="<?php echo base_url('img/menu_navi-search.svg'); ?>" onclick='image(this)'>
  </div>
</div>
</body>