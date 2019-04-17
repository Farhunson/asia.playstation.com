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
    background: #333333 url('<?php echo base_url("img/menu_navi-search.svg");?>') no-repeat 5px center; 
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




/*#foter{
   background-color : #0066cc; 

  background: rgba(0, 55, 145, 1.0);
}*/
/*#footer{
  text-align : left;
  color : white;
}
*/
/*#footer a{
  color : white;
}*/

/*#gambarfooter{
  min-height: 137px;
  background-size: 100% 100%;

  background: url('<?php echo base_url("img/footer2.png");?>') no-repeat; 
}*/

</style>
<title>PS4 | Games | PlayStation</title>
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
  <a style="padding-left: 17px; padding-top: 13px;padding-right: 24px; " href="https://asia.playstation.com/en-id/"><img src = "<?php echo base_url('img/icon_ps_pc.svg'); ?>"></a>
  <div class="dropdownsa">
    <button class="dropbtnsa">PRODUCTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header" >
      <table style="margin-left:16%; margin-right:19%;">
          <tr>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo site_url();?>/front/product">
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
              <a href="<?php echo base_url('www.facebook.com'); ?>">
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
              <a href="<?php echo base_url('www.facebook.com'); ?>">
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
              <a href="<?php echo base_url('www.facebook.com'); ?>">
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
        <h2>PSN</h2>
      </div>  
    </div>
  </div>
  <div style="float:right; padding-right: 20px">
    <table style="margin: auto;">
      <tr>
        <td>
          <a id="myplaystation"href="<?php echo base_url('www.facebook.com'); ?>" /><h5 style="font-weight: bold">My PlayStation</h5></a>
        </td>
        <td style="padding-right: 10px">
          <button class="signin">Sign In</button>
        </td>
        <td >
          <FORM id="containersearch" >
            <input type="search" placeholder="" />
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



</body>
</html>