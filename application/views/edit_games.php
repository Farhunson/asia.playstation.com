!doctype HTML>
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
  padding: 14.5px 13.5px;
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
  padding-bottom: 30px;
  opacity :1;
  transform: translateY(0);
}
.dropdown-contentsa {
  display: none;
  position: absolute;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  top: -1000px;
  transition: 0.6s;


}
.dropdownsa:hover .dropdown-contentsa {
  display: inline-block;
  top: 100px;

}
 
.dropdown-contentsa .header {
  /*padding: 16px;*/
  color: white;
  /*margin-top: 10px;*/
}
 
.navbarsa .dropdownsa:hover .dropbtnsa {
  background-color: #003791;
  padding-bottom: 30px;
  opacity :1;
  transform: translateY(0);
}
.dropdown-contentsa {
  display: none;
  position: absolute;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  top: -1000px;
  transition: 0.6s;


}
.dropdownsa:hover .dropdown-contentsa {
  display: inline-block;
  top: 100px;

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
 
.signin {
  position: relative;
  background-color: #5f5b58;
  border: none;
  color: white;
  font-family: "SB SST W20 Roman",sans-serif;
  font-weight: bold;
  text-align: center;
  font-size: 16px;
  padding: 5px 14px;
  margin: 4px 2px;
  opacity: 0.8;
  transition: 0.3s;
}

.signin:hover {opacity: 1}

#myplaystation {
  position: relative;
  color: white;

  font-family: "SB SST W20 Roman",sans-serif;
  transition: 0.3s;
}
#myplaystation:hover {
  color : #00a2ff;
}

#grad1 {
  background: linear-gradient(bottom, transparent 100%, black 50%);
  /*background: radial-gradient(ellipse, rgba(55,127,170,1) 30%, rgba(0,55,145,1) 51%);*/
  background: radial-gradient(at bottom,#008FEB,#003791,#003791);
  z-index : 2;
}

#gradfooter {
  background: linear-gradient(top, transparent 100%, black 50%);
  /*background: radial-gradient(ellipse, rgba(55,127,170,1) 30%, rgba(0,55,145,1) 51%);*/
  background: radial-gradient(at top,#008FEB,#003791,#003791);

  background-size: 100% 100%;
}
 
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    height: auto;
  }
}

#containersearch {
  width: 35px;
  height: 35px;
  vertical-align: middle;
  white-space: nowrap;
  padding-left: 1px; 
  border-radius: 3px;
  background-color: #333333;
}

#containersearch input[type=search] {
    position: absolute;
    display: block;
    top: 50px;
    right: 20px;
    width: 33px;
    height: 33px;
    margin: 0 0 0 auto;
    box-sizing: border-box;
    padding: 0 0 0 10px;
    color: white;
    background: url('<?php echo base_url("img/menu_navi-search.svg");?>') no-repeat 5px center; 
    background-color: #333333;
    border: 0;
    border-radius: 3px;
    font-size: 12px;
    cursor: pointer;
    font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
    -webkit-transition: width 0.2s ease-in-out;
    transition: width 0.2s ease-in-out;
}

#containersearch input[type=search]:focus {
  width: 250px;
  background: #333333 url('<?php echo base_url("img/menu_navi-search.svg");?>') no-repeat 220px center; 
  cursor: auto;
}

.search_icon {
    position: relative;   
    padding-top: 2px;
    padding-bottom: 2px;
    padding-left: 10px; 
    background-color: #333333;
    border: 0;
    border-radius: 3px;
    z-index: 1;
}

#foter{
  /* background-color : #0066cc; */

  background: rgba(0, 55, 145, 1.0);
}
#footer{
  text-align : left;
  color : white;
}

#footer a{
  color : white;
}

#fontfooter {
  position: relative;
  color: white;
  font-size: 12px;
  font-weight: 400;
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  transition: 0.3s;
}

#fontfooter:hover {
  color : #00a2ff;
  text-decoration: none;
}

#fontfooternothover {
  position: relative;
  color: white;
  font-size: 12px;
  font-weight: 400;
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  transition: 0.3s;
}


#fonttitlefooter{
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-size: 1.1375em;
  font-weight: 700;
}

.container-fluid {
  position: relative;
  text-align: center;
  color: white;
}

#text-on-img {
  position: absolute;
  top: 50%;
  left: 20%;
  transform: translate(-50%, -50%);
}

.gamescontainer {
  position: relative;
  text-align: center;
  color: white;
}

.gamesfont {
  position: absolute;
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-size: 45pt;
  top: 40%;
  left: 20%;
}

#menu-games{
  background-color: #1F1F1F;
}

#menu-games-font{
  color: #98AAA9;
  font-family: 'ＭＳ Ｐゴシック';
  font-weight: 400;
}

#menu-games-font:hover{
  color: #FFFFFF;
}

.menugamescontainer {
  position: relative;
  color: white;
}

#titlegame{
  font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-size: 36.4px;
  text-align: center;
  color: #1F1F1F;
}

.gamelistcontainer{
  background-color: #EEEEEE;
  box-sizing: content-box;
  padding: 1em;
  position: relative;
  height: 400px;
}

.item-gamescontainer{
  box-sizing: border-box;
  cursor: pointer;
  display: block;
  height: 327px;
}

.fontgametitle{
  font-size:12px;
  color: #1F1F1F;
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
}

.fontsubgame{
  font-size:12px;
  color: #9C9C9C;
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
}

.fontpricegame{
  font-size:12px;
  color: #1F1F1F;
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
}

.button-delete{
  text-align: center;
  padding-bottom: 5px;
  padding-top: 5px;
  padding-left: 12px;
  padding-right: 12px;
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-size: 16px;
  background-color: red;
  color: white;
  border: none;
  text-decoration: none;
  overflow-wrap: break-word;
  display: block;
  margin-left: auto;
  width: 50%;
}

.button-edit{
  text-align: center;
  padding-bottom: 5px;
  padding-top: 5px;
  padding-left: 12px;
  padding-right: 12px;
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-size: 12px;
  background-color: #ed5f2b;
  color: white;
  border: none;
  text-decoration: none;
  overflow-wrap: break-word;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 20%;
  width: 100%;
}



.btn-menu {
  position: relative;
  background-color: rgba(0, 55, 145, 1.0);
  border: none;
  color: white;
  font-family: "SB SST W20 Roman",sans-serif;
  font-weight: bold;
  text-align: center;
  font-size: 16px;
  padding: 5px 14px;
  margin-left: 35%;
  margin-top: 2%;
  margin-bottom:1%;
  opacity: 0.8;
  transition: 0.3s;
  width: 30%;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .submitbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .submitbtn {
     width: 100%;
  }
}

.img-delete:hover, .img-edit:hover{opacity: 0.5}

.btn-menu:hover {opacity: 1}
</style>
<title>PS4 | Dashboard | PlayStation</title>
</head>
<body>
   <nav class="navbarsa navbar-expand-md" style="background-color: black; height: 35px;" >
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <div class="navbar-nav ml-auto" style="float:right;" >
                <div class="nav-item">
                     <a href="<?php echo base_url('www.sony.com'); ?>"><img src = "<?php echo base_url('img/sony_logo.svg'); ?>" style="width:74px;padding-bottom: 10px" /></a>
                </div>
            </div>
        </div>
    </nav>
<div class="navbarsa" style="margin:0; padding-top: 2px" >
  <a style="padding-left: 17px; padding-top: 13px;padding-right: 24px; " href="<?php echo site_url();?>/front/homepage_admin"><img src = "<?php echo base_url('img/icon_ps_pc.svg'); ?>"></a>
  <div class="dropdownsa">
    <button class="dropbtnsa">PRODUCTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header" >
      <table style="margin-left:16%; margin-right:19%;">
          <tr>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo site_url();?>/front/product_admin">
              <img src = "<?php echo base_url('img/menu_playstation4.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®4</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationvr.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®VR</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationvita.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®Vita</h5></a>
            </td>
            <td class="buttonpshover">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_psclassic.png'); ?>" style=" width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®Classic</h5></a>
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
        <table style="margin-left:16%; margin-right:19%;">
          <tr>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo site_url();?>/front/games_admin">
              <img src = "<?php echo base_url('img/menu_ps4games.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PS4™ GAMES</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_psvrgames.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PS VR GAMES</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_psvitagames.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PS Vita GAMES</h5></a>
            </td>
          </tr>
        </table>
      </div>  
    </div>
  </div>
  <div class="dropdownsa">
    <button class="dropbtnsa">PSN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
      <table style="margin-left:16%; margin-right:19%;">
          <tr>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo site_url();?>/front/psn_admin">
              <img src = "<?php echo base_url('img/menu_psn.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PSN</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationstore.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation™Store</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationplus.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®Plus</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationmusic.png'); ?>" style=" width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation™Music</h5></a>
            </td>
            <td class="buttonpshover">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationapp.png'); ?>" style=" width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®App</h5></a>
            </td>
          </tr>
        </table>
      </div>  
    </div>
  </div>
    <div class="dropdownsa">
    <button class="dropbtnsa">NEWS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <table style="margin-left:16%; margin-right:19%;">
            <tr>
              <td class="buttonpshover" style="padding-right:50px">
                <a href="<?php echo base_url('www.facebook.com'); ?>">
                <img src = "<?php echo base_url('img/menu_pressrelease.png'); ?>" style="width: 100px " /> <br>
                <h5 class="fontdropdown"style="text-align:center">Press Release</h5></a>
              </td>
              <td class="buttonpshover" style="padding-right:50px">
                <a href="<?php echo base_url('www.facebook.com'); ?>">
                <img src = "<?php echo base_url('img/menu_latestnews.png'); ?>" style="width: 100px " /> <br>
                <h5 class="fontdropdown"style="text-align:center">Latest News</h5></a>
              </td>
            </tr>
        </table>
        <hr style="border: 30 solid white;" />
       <table style="margin-left:16%; margin-right:19%;">
            <tr>
              <td class="buttonpshover" style="padding-right:50px">
                <a href="<?php echo base_url('www.facebook.com'); ?>">
                  <table >
                    <tr>
                      <td style="padding-right: 15px">
                        <img src = "<?php echo base_url('img/menu_facebook.png'); ?>" style="width: 40px " />
                      </td>
                      <td>
                        <h6 class="fontdropdown">Facebook</h6>
                      </td>
                    </tr>
                  </table>
                </a>
              </td>
              <td class="buttonpshover" style="padding-right:50px">
                <a href="<?php echo base_url('www.facebook.com'); ?>">
                  <table >
                    <tr>
                      <td style="padding-right: 15px">
                        <img src = "<?php echo base_url('img/menu_youtube.png'); ?>" style="width: 40px " />
                      </td>
                      <td>
                        <h6 class="fontdropdown">Youtube</h6>
                      </td>
                    </tr>
                  </table>
                </a>
              </td>
              <td class="buttonpshover" style="padding-right:50px">
                <a href="<?php echo base_url('www.facebook.com'); ?>">
                  <table>
                    <tr>
                      <td style="padding-right: 15px">
                        <img src = "<?php echo base_url('img/menu_instagram.png'); ?>" style="width: 40px " />
                      </td>
                      <td>
                        <h6 class="fontdropdown">Instagram</h6>
                      </td>
                    </tr>
                  </table>
                </a>
              </td>
              <td class="buttonpshover" style="padding-right:50px">
                <a href="<?php echo base_url('www.facebook.com'); ?>">
                  <table>
                    <tr>
                      <td style="padding-right: 15px">
                        <img src = "<?php echo base_url('img/menu_twitter.png'); ?>" style="width: 40px " />
                      </td>
                      <td>
                        <h6 class="fontdropdown">Twitter</h6>
                      </td>
                    </tr>
                  </table>
                </a>
              </td>
            </tr>
          </table>
          <br>
      </div>  
    </div>
  </div>
    <div class="dropdownsa">
    <button class="dropbtnsa">SUPPORT
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <table style="margin-left:16%; margin-right:19%;">
          <tr>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo site_url();?>/front/support_admin">
              <img src = "<?php echo base_url('img/menu_support.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">Support</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_warranty.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">Warranty Services</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_psnstatus_large.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PSN Status</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_fixandconnect_large.svg'); ?>" style=" width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">Fix & Connect</h5></a>
            </td>
            <td class="buttonpshover">
              <a href="<?php echo base_url('www.facebook.com'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationapp.png'); ?>" style=" width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®App</h5></a>
            </td>
          </tr>
        </table>
      </div>  
    </div>
  </div>
    <div class="dropdownsa">
    <button class="dropbtnsa">BUY
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header">
        <div class="container">
          <div class="buttonpshover" style="margin-left: 25%;margin-top: 1%">
            <a id="fontfooter" href="#!">
            <img src = "<?php echo base_url('img/menu_playstationstore.png');?>"/ style="width: 100px"> <br>
              <h5 class="fontdropdown">PlayStation™Store</h5></a>
          </div>
          <div class="buttonpshover" style="margin-left: 60%;margin-top: 1%;">
            <a id="fontfooter" href="#!">
            <img src = "<?php echo base_url('img/menu_retailstore.png'); ?>" style="width: 100px " /><br>
            <h5 class="fontdropdown">Retail Stores</h5></a>
          </div>
        </div>
        <div class="container" style="margin-left: 15%;border-top: 1px #609ccd solid;border-bottom: 1px #609ccd solid;width: 500px">
          <a id="fontfooter" href="#!" style="padding: 0" class="buttonpshover">
            <h5 class="fontdropdown">Newest Releases
            <img src="<?php echo base_url('img/icon_store_link.png'); ?>" style="padding-left: 340px;height: 20px" ></h5>
          </a>
        </div>
        <div class="container" style="margin-left: 15%;border-bottom: 1px #609ccd solid;width: 500px">
          <a id="fontfooter" href="#!" style="padding: 0" class="buttonpshover">
            <h5 class="fontdropdown">Best Multiplayer Games
            <img src="<?php echo base_url('img/icon_store_link.png'); ?>" style="padding-left: 300px;height: 20px" ></h5>
          </a>
        </div>
         <div class="container" style="margin-left: 15%;border-bottom: 1px #609ccd solid;width: 500px">
          <a id="fontfooter" class="buttonpshover" href="#!" style="padding: 0">
            <h5 class="fontdropdown">PS Plus Subscription
            <img src="<?php echo base_url('img/icon_store_link.png'); ?>" style="padding-left: 315px;height: 20px" ></h5>
          </a>
        </div>
        <br><br>
      </div> 
    </div>
  </div>
  <div style="float:right; padding-right: 20px">
    <table style="margin: auto;">
      <tr>
        <td>
          <a id="myplaystation"href="<?php echo site_url();?>/account/dashboard" /><h5 style="font-weight: bold">Dashboard</h5></a>
        </td>
        <td style="padding-right: 10px">
            <button class="signin" type="submit" onclick="window.location.href='<?php echo site_url();?>/account/logout';">Log Out</button>
        </td>
        <td >
          <FORM id="containersearch" >
            <input type="search" />
<!--               <td>
                <button class="search_icon"><img style="width: 23px" src="<?php echo base_url('img/menu_navi-search.svg'); ?>" ></button>
              </td> -->
            <!-- <span class="search_icon"><i></i></span> -->
            <!-- <input id="search" type="text" placeholder="Search.." src="<?php echo base_url('img/menu_navi-search.svg'); ?>"><img id="search_id" src="<?php echo base_url('img/menu_navi-search.svg'); ?>" onclick='image(this)'> -->
          </FORM>
        </td>
      </tr>
    </table>
  </div>

</div>
<!---topnav-->
</br></br></br>  
<form method="post" class="modal-content" action='<?php echo site_url("games/update_games/$games_id");?>'>
    <div class="container">
      <h1>Edit Game</h1>
      <hr>
      <label for="game_title"><b>Game Title</b></label>
      <input type="text" value="<?php echo $name?>" name="name" required>

      <label for="genre"><b>Genre</b></label>
      <input type="text" value="<?php echo $genre?>" name="genre" required>

      <label for="release_date"><b>Release Date</b></label>
      <br>
      <input type="date" name="release_date" value="<?php echo $release_date?>" required>
      <br><br>

      <label for="provider"><b>Provider</b></label>
      <input type="text" value="<?php echo $provider?>" name="provider" required>

      <label for="size"><b>Platform</b></label>
      <input type="text"value="<?php echo $platform?>" name="platform" required>

      <label for="price"><b>Price</b></label>
      <input type="text" value="<?php echo $price?>" name="price" required>

      <label for="picture"><b>Picture</b></label>
      <p>Last picture:</p>
      <img src="<?php echo base_url($picture);?>">
      </br></br>
      <input type="file" name="picture" id="picture">
      <br><br>
      <label for="desc"><b>Description</b></label>
      <br>
      <textarea form="addform" name="description" name="description" required><?php echo $description?></textarea>

      <div class="clearfix">
        <a href="<?php echo site_url("account/dashboard") ?>"><button type="button" class="cancelbtn">Cancel</button></a>
        <button type="submit" class="submitbtn">Submit</button>
      </div>
    </div>
  </form>

<br><br><br></br></br>
<!---botfot-->
<footer class="page-footer font-small indigo " id='foter'>

    <div class="container text-center text-md-left" id='footer' >

      <div class="row"style="padding-left:  120px">

        <br>
        <div class="col-md-3" >

          <h5 class="font-weight-bold mt-3 mb-4" id="fonttitlefooter">Products</h5>

          <ul class="list-unstyled">
            <li>
              <a id="fontfooter" href="#!">PlayStation®4</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">PlayStation®VR</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">PlayStation®Vita</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">PlayStation®Classic</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">PlayStation®3</a>
            </li>
          </ul>

        </div>

        <div class="col-md-3 mx-auto">


          <h5 class="font-weight-bold mt-3 mb-4" id="fonttitlefooter">Services</h5>

          <ul class="list-unstyled" >
            <li>
              <a id="fontfooter" href="#!">PlayStation™Network</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">PlayStation™Store</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">PlayStation™Music</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">PlayStation®Plus</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">PlayStation®App</a>
            </li>
          </ul>

        </div>
        <div class="col-md-3 mx-auto">

          <h5 class="font-weight-bold mt-3 mb-4" id="fonttitlefooter">News</h5>

          <ul class="list-unstyled">
            <li>
              <a id="fontfooter" href="#!">Press Release</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">Latest News</a>
            </li>
          </ul>

        </div>
        <div class="col-md-3 mx-auto">


          <h5 class="font-weight-bold mt-3 mb-4" id="fonttitlefooter">Support</h5>

          <ul class="list-unstyled">
            <li>
              <a id="fontfooter" href="#!">Support</a>
            </li>
            <li>
              <a id="fontfooter" href="#!">Warranty Services</a>
            </li>
          </ul>

        </div>
      </div>
      <br>
      <div class='row' align="middle">
        <div id='gradfooter'>
          <br>
          <a id="fontfooter" href="#!"> About this site </a>
          |
          <a id="fontfooter" href="#!"> Terms and Conditions </a>
          |
          <a id="fontfooter" href="#!"> Privacy Policy </a>
          |
          <a id="fontfooter" href="#!"> Intellectual Property Notices </a>
          |
          <a id="fontfooter" href="#!"> Publisher&Developer Relations </a>
          <br><br>
          <p id="fontfooter" style="color : #00a2ff">©2019 Sony Interactive Entertainment Inc. All Rights Reserved.</p>
          <img src="<?php echo base_url('img/icon_global.png'); ?>" style="width: 16px "/> 
          <a id="fontfooternothover" href="#!" style="padding-bottom: 0"> Indonesia (English) </a> 
          <br><br>
        </div>
        <div>
            <img src="<?php echo base_url('img/sie_logo.png'); ?>" style="width: 100px; margin-left: 80%;margin-right: 20%;margin-top: -90px"/> 
          </div>
      </div>
    </div> 
  </footer> 
</body>
</html>