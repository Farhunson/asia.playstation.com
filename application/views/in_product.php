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
  overflow-x: hidden;
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
  font-family: SB SST W20 Roman,sans-serif;
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

.morebutton {
  display: inline-block;
  padding: 0 20px 0 0;
  background-position: right;
  float: right;
}

.fontnews {
    color: black;
    text-decoration: none;
    transition: 0.3s;
}

.fontnews:hover {
  color : #00a2ff;
  text-decoration: none;
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


.flex-container {
  display: flex;
  justify-content: center;
  background-color: #1F1F1F;
  height: 165px;
  padding: 28px;
}

.flex-container > div {
  background-color: #f1f1f1;
  width: 137px;
  height: 110px;

  margin-left: 10px;
  margin-right: 10px;
  text-align: center;
}

.buttonmenu {
  background-color: white;
  width: 100%;
  height: 34px; 
  color: black;
  border-bottom-right-radius: 3pt;
  border-bottom-left-radius:  3pt;
  border: 0;
  font-family: MS PGothic;
  transition: 0.3s;
}

.buttonmenu:hover {
  background-color: #00a2ff;
  color: white;

}

#titletext{
  font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-size: 36.4px;
  text-align: center;
}

.futurecontainer {
  display: flex;
  justify-content: center;
  padding-left: 140px;
}

.futurecontainer > div {
  width: 533px;
  margin: 20px;
  height: 460px;
  line-height: 75px;
  font-size: 30px;
}

.productcontainer {
  display: flex;
  justify-content: center;
  background-color: white;
}

.productcontainer > div {
  width: 300px;
  margin: 15px;
  height: auto;
  line-height: 75px;
  font-size: 30px;
}

.ps4gamescontainer {
  display: flex;
  justify-content: center;
  background-color: white;
  z-index: 1;
  position: relative;
}

.ps4gamescontainer > div {
  background-color: white;
  width: 450px;
  margin: 15px;
  height: 410px;
  line-height: 75px;
  font-size: 30px;
}

.titlecontainer {
  display: flex;
  justify-content: center;
  background-color: white;
  z-index: 1;
  position: relative;
  padding-top: 60px;
  padding-bottom: 20px;
}

.titlecontainer > div {
  background-color: blue;
  width: 533px;
  height: 30px;
  line-height: 75px;
  font-size: 30px;
}
.btnlearnmore {
  width: 200px;
  height: 50px;
  background-color: #0267BF;
  border: 0; 
  color: white;
  font-family :"SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  transition: 0.3s;
}

.btnlearnmore:hover {
  background-color: #00a2ff;
}

.ps4procontainer {
  color: white;
}

.textcontainer {
  display: flex;
  justify-content: center;
  padding-left: 10px;
  padding-bottom: 500px;

}

.textcontainer > div {
  padding: 15px;
  width: 400px;
  margin: 20px;
  height: 215px;
  line-height: 75px;
  font-size: 30px;
}

#fontlinkproduct {
 color: black;
 transition: 0.6s;
}

#fontlinkproduct:hover {
  color : #00a2ff;
  text-decoration: none;
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
  text-decoration: none;
}


#fonttitlefooter{
  font-family: "SST W55 Regular", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-size: 1.1375em;
  font-weight: 700;
}


#gradfooter {
  background: linear-gradient(top, transparent 100%, black 50%);
  /*background: radial-gradient(ellipse, rgba(55,127,170,1) 30%, rgba(0,55,145,1) 51%);*/
  background: radial-gradient(at top,#008FEB,#003791,#003791);

  background-size: 100% 100%;
}

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
  <a style="padding-left: 17px; padding-top: 13px;padding-right: 24px; " href="<?php echo site_url();?>/front/homepage_user"><img src = "<?php echo base_url('img/icon_ps_pc.svg'); ?>"></a>
  <div class="dropdownsa">
    <button class="dropbtnsa">PRODUCTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-contentsa" id="grad1">
      <div class="header" >
      <table style="margin-left:16%; margin-right:19%;">
          <tr>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo site_url();?>/front/product_user">
              <img src = "<?php echo base_url('img/menu_playstation4.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®4</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationvr.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®VR</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationvita.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®Vita</h5></a>
            </td>
            <td class="buttonpshover">
              <a href="<?php echo base_url('#'); ?>">
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
              <a href="<?php echo site_url();?>/front/games_user">
              <img src = "<?php echo base_url('img/menu_ps4games.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PS4™ GAMES</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_psvrgames.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PS VR GAMES</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
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
              <a href="<?php echo site_url();?>/front/psn_user">
              <img src = "<?php echo base_url('img/menu_psn.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PSN</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationstore.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation™Store</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationplus.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation®Plus</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_playstationmusic.png'); ?>" style=" width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PlayStation™Music</h5></a>
            </td>
            <td class="buttonpshover">
              <a href="<?php echo base_url('#'); ?>">
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
                <a href="<?php echo base_url('#'); ?>">
                <img src = "<?php echo base_url('img/menu_pressrelease.png'); ?>" style="width: 100px " /> <br>
                <h5 class="fontdropdown"style="text-align:center">Press Release</h5></a>
              </td>
              <td class="buttonpshover" style="padding-right:50px">
                <a href="<?php echo base_url('#'); ?>">
                <img src = "<?php echo base_url('img/menu_latestnews.png'); ?>" style="width: 100px " /> <br>
                <h5 class="fontdropdown"style="text-align:center">Latest News</h5></a>
              </td>
            </tr>
        </table>
        <hr style="border: 30 solid white;" />
       <table style="margin-left:16%; margin-right:19%;">
            <tr>
              <td class="buttonpshover" style="padding-right:50px">
                <a href="<?php echo base_url('#'); ?>">
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
                <a href="<?php echo base_url('#'); ?>">
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
                <a href="<?php echo base_url('#'); ?>">
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
                <a href="<?php echo base_url('#'); ?>">
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
              <a href="<?php echo site_url();?>/front/support_user">
              <img src = "<?php echo base_url('img/menu_support.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">Support</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_warranty.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">Warranty Services</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_psnstatus_large.png'); ?>" style="width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">PSN Status</h5></a>
            </td>
            <td class="buttonpshover" style="padding-right:50px">
              <a href="<?php echo base_url('#'); ?>">
              <img src = "<?php echo base_url('img/menu_fixandconnect_large.svg'); ?>" style=" width: 100px " /> <br>
              <h5 class="fontdropdown"style="text-align:center">Fix & Connect</h5></a>
            </td>
            <td class="buttonpshover">
              <a href="<?php echo base_url('#'); ?>">
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
          <a id="myplaystation"href="<?php echo base_url('#'); ?>" /><h5 style="font-weight: bold">My Cart</h5></a>
        </td>
        <td>
          <a id="myplaystation"href="<?php echo site_url();?>/account/profile" /><h5 style="font-weight: bold">Manage Account</h5></a>
        </td>
        <td style="padding-right: 10px">

            <button class="signin" type="submit" onclick="window.location.href='<?php echo site_url();?>/account/logout';">Log Out</button>
<!--           <button class="signin" onclick="window.location.href='<?php echo site_url();?>/front/login';">Log Out</button></a>
          <form method='post' action='<?php echo site_url("account/logout");?>'>
            <button class="signin" type="submit">Log Out</button></a>
          </form> -->

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
<img style="width: 100%"src="<?php echo base_url('img/product/ps4-top-hero-R-20170302.png'); ?>">
<div class="flex-container">
  <div style="  border-radius: 3px;"><a href="#"><img style="width: 100%;  border-top-right-radius: 3pt;
  border-top-left-radius:  3pt;" src="<?php echo base_url('img/product/ps4-top-navigation01-20161104.png'); ?>">
    <button class="buttonmenu"><h5 style="font-size: 9pt">PS4 Features</h5></button></a>
  </div>
  <div style="  border-radius: 3px;"><a href="#"><img style="width: 100%;border-top-right-radius: 3pt;
  border-top-left-radius:  3pt" src="<?php echo base_url('img/product/ps4-top-navigation02-20161104.png'); ?>">
    <button class="buttonmenu"><h5 style="font-size: 9pt">Line Up</h5></button></a>
  </div>
  <div style="  border-radius: 3px;"><a href="#"><img style="width: 100%;border-top-right-radius: 3pt;
  border-top-left-radius:  3pt" src="<?php echo base_url('img/product/ps4-top-navigation03-20181226.png'); ?>">
    <button class="buttonmenu"><h5 style="font-size: 9pt">Games</h5></button></a>
  </div>
  <div style="  border-radius: 3px;"><a href="#"><img style="width: 100%;border-top-right-radius: 3pt;
  border-top-left-radius:  3pt" src="<?php echo base_url('img/product/ps4-top-navigation04-20161201.png'); ?>">
    <button class="buttonmenu"><h5 style="font-size: 9pt">Entertainment</h5></button></a>
  </div>
  <div style="  border-radius: 3px;"><a href="#"><img style="width: 100%;border-top-right-radius: 3pt;
  border-top-left-radius:  3pt" src="<?php echo base_url('img/product/ps4-top-navigation05-20161104.png'); ?>">
    <button class="buttonmenu"><h5 style="font-size: 9pt">Accessories</h5></button></a>
  </div>  
  <div style="  border-radius: 3px;"><a href="#"><img style="width: 100%;border-top-right-radius: 3pt;
  border-top-left-radius:  3pt" src="<?php echo base_url('img/product/footer2.png'); ?>">
    <button class="buttonmenu"><h5 style="font-size: 9pt">Retail Store</h5></button></a>
  </div>  
</div>
</br></br>
<br>
<h2 id="titletext" style="color: #1F1F1F;" >Welcome to the Future of Play</h2>
<br>
<div class="futurecontainer">
  <div><img style="width: 530px;height: 445px" src="<?php echo base_url('img/product/consoles-ps4-model-2000-640px-02.png'); ?>"></div>
  <div style="padding-right: 140px">
    <p><h5 style="font-family: MS PGothic; font-size: 11pt">A sleeker, smaller PS4, delivering awesome gaming power that’s always for the players.</h5></p>
    <p><h5 style="font-family: MS PGothic; font-size: 11pt ">The freedom to play, share and socialise with your gaming world.</h5></p>
    <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
  </div>
</div>
<div class="ps4procontainer">
  <h2 id="titletext" style="z-index: 2;position: relative; padding-top: 90px; margin-bottom: -120px;color: white;" >Let the Super-Charged PS4 Pro Lead the Way. </h2>
  <img style="z-index: -2; margin-left: -330px;margin-right: -10px;margin-bottom: -415px"src="<?php echo base_url('img/product/pc_PS4TOP_05_02_170904_PS4PRO.png'); ?>">
  <div class="futurecontainer" style=" margin-top: -500px">
    <div style="padding-right: 120px">
      <p><h5 style="font-family: MS PGothic; font-size: 11pt">PS4 Pro delivers innovation in the form of cutting-edge visuals and graphics while in the midst of the PS4’s lifecycle. </h5></p>
      <p><h5 style="font-family: MS PGothic; font-size: 11pt ">Enhance your PS4 gaming experience with the latest in imaging technology through 4K resolution and High Dynamic Range (HDR) as well as smoother frame rates.</h5></p>
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    <div><img style="width: 530px;height: 445px; margin-left: -150px" src="<?php echo base_url('img/product/ps4-features-top-article03-20161104.png'); ?>"></div>
  </div>
</div>
<div class="titlecontainer"><h2 id="titletext" style="color: 1F1F1F;" >PS4 Games</h2></div>
<div class="ps4gamescontainer" style="z-index: 2">
  <div style="text-align: center;">
    <a id="fontlinkproduct" href="#">
      <img style="width: 450px" src="<?php echo base_url('img/product/marvels-spider-man-keyart.png'); ?>"><br>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">Marvel's Spider-Man</h6>
    </a>
    <button style="align-content: center;" class="btnlearnmore"><h5>LEARN MORE</h5></button>
  </div>
  <div style="text-align: center;">
    <a id="fontlinkproduct" href="#">
      <img style="width: 450px" src="<?php echo base_url('img/product/shenmue-1-2-keyart.png'); ?>"><br>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">Shenmue Ⅰ＆Ⅱ</h6>
    </a>
    <button style="align-content: center;" class="btnlearnmore"><h5>LEARN MORE</h5></button>
  </div>
</div>
<div style="text-align: center;z-index: 2; background-color: white; margin-bottom: 60px;">
  <button style="z-index: 2" class="btnlearnmore"><h5>FIND MORE</h5></button>
</div>
<br>
<br>
<br>
<div class="ps4procontainer" style=" margin-top: -100px;margin-bottom:-420px">
  <h2 id="titletext" style="position: relative; padding-top: 90px; margin-bottom: -130px;color: white;" >Entertainment on PlayStation 4</h2>
  <img src="<?php echo base_url('img/product/ps4-top-article12-bg-20170224.png'); ?>" style="width:100%;z-index: -4;">
  <div class="textcontainer" style=" margin-top: -720px">
    <div style="padding-right: 30px; z-index: 1;   background-color: #000000a3;">
      <p><h5 style="font-family: MS PGothic; font-size: 11pt">A built-in Blu-ray Disc player, plus an incredible range of entertainment apps are available whenever you want them. </h5></p>
      <p><h5 style="font-family: MS PGothic; font-size: 11pt ">All the greatest TV, movies, music, and more from your favourite entertainment apps.</h5></p>
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    <div></div>
  </div>
</div>
<h2 id="titletext" style="color: #1F1F1F;z-index: 4;background-color: white; position: relative;padding-top: 80px;padding-bottom: 30px;margin-bottom: -10px" >Hardware Lineup</h2>
<div class="productcontainer" style="z-index: 4;position: relative;">
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/consoles-ps4-model-2000-428px-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400;">Jet Black 500GB</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: CUH-2006A B01</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR5,199,000</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    
  </div>
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/consoles-ps4-model-2000-428px-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400;">Jet Black 1TB</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: CUH-2006B B01</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR5,699,000</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
  </div>
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/consoles-ps4-model-pro-428px-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4 Pro</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400;">Jet Black 1TB</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: CUH-7106B B01</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR6,999,000</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
  </div>
</div>
<h2 id="titletext" style="color: #1F1F1F;z-index: 4;background-color: white; position: relative;padding-top: 50px;padding-bottom: 30px;margin-bottom: -10px" >Limited Products</h2>

<div class="productcontainer" style="z-index: 4;position: relative;">
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/ps4-bundle-2019-starter-pack-640px-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400;">Starter Pack</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: ASIA-00344</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR 5,699,000</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    
  </div>
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/ps4-bundle-2019-kingdom-hearts-iii-limited-edition-640px-ps4-pro.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4 Pro</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.53em; font-weight: 400;">KINGDOM HEARTS III LIMITED EDITION</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: PCAS-05086HA</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR7,799,000</h6>

    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
  </div>
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/ps4-bundle-2019-god-of-war-bundle-640px-ps4-pro-id-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4 Pro</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400;">God of War Bundle</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: PCAS-05061HC</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR6,999,000</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
  </div>
</div>
<div class="productcontainer" style="z-index: 4;position: relative;">
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/ps4-bundle-2018-party-bundle-640px-sg-my-th-id-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400;">Party Bundle</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: ASIA-00333</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR5,699,000</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    
  </div>
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/ps4-bundle-2018-hits-5-640px-sg-my-th-id-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">HITS</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: ASIA00332/00329</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR5,199,000</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Release Date: 2018/11/15</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
  </div>
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/ps4-bundle-2018-red-dead-redemption-2-bundle-pack-640px-ps4-pro-sg-my-th-id-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4 Pro</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400;">Red Dead Redemption 2 Bundle Pack</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: PLAS-10282HB</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR7,899,000</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
  </div>
</div>
<div class="productcontainer" style="z-index: 4;position: relative;">
  <div>
    <a id="fontlinkproduct" href="#">
      <img src="<?php echo base_url('img/product/ps4-bundle-2018-fifa-19-bundle-pack-640px-sg-my-th-id-01.png'); ?>" style="width: 300px;border: 1px solid grey;padding: 25px" >
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400; padding-top: 10px">PlayStation 4</h6>
      <h6 class="js-style xs-font14 " style="font-size: 0.55em; font-weight: 400;">FIFA 19 Bundle Pack</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Model No: PLAS-10252HB/HC</h6>
      <h6 style="font-family: 'ＭＳ Ｐゴシック';" >Suggested Price: IDR5,799,000</h6>
    </a>
    <div style="text-align: center;">
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    
  </div>
  <div>

  </div>
  <div>

  </div>
</div>
<br><br><br><br><br><br><br>
<div style="margin-left: 18.5%;margin-right: 18.5%;">
  <h6 class="js-style xs-font14 " style="font-size: 1.2em; font-weight: 400;float: left;">System Update</h6>
  <div class="morebutton">
    <a href="#" style="text-decoration: none;">
      <h5 style="font-family: 'ＭＳ Ｐゴシック'; display: inline-block;" >MORE</h5>
      <img src="<?php echo base_url('img/product/icon_link.svg'); ?>">
    </a>
  </div>
  <br>
  <hr style="border:1.5px solid black;">
  <div style="margin-top: -10px;margin-bottom: -10px;">
    <h6 style="font-family: 'ＭＳ Ｐゴシック';color: grey;display: inline-block;padding-right: 10px;">2019/03/28</h6>
    <a class="fontnews" href="#" style="display: inline-block;">
      <h5 style="font-family: 'ＭＳ Ｐゴシック';">About PlayStation 4 system software version 6.51</h5>
    </a>
  </div>
  <hr style="border:0.5px dotted black">
  <div style="margin-top: -10px;margin-bottom: -10px;">
    <h6 style="font-family: 'ＭＳ Ｐゴシック';color: grey;display: inline-block;padding-right: 10px;">2019/03/07</h6>
    <a class="fontnews" href="#" style="display: inline-block;">
      <h5 style="font-family: 'ＭＳ Ｐゴシック';">About PlayStation 4 system software version 6.50</h5>
    </a>
  </div>
  <hr style="border:0.5px dotted black">
  <div style="margin-top: -10px;margin-bottom: -10px;">
    <h6 style="font-family: 'ＭＳ Ｐゴシック';color: grey;display: inline-block;padding-right: 10px;">2018/12/12</h6>
    <a class="fontnews" href="#" style="display: inline-block;">
      <h5 style="font-family: 'ＭＳ Ｐゴシック';">System Software Update 6.20 for PlayStation 4 Systems</h5>
    </a>
  </div>
  <hr style="border:0.5px dotted black">  
  <br><br><br>
  <div>
    <h4 style="font-family: 'ＭＳ Ｐゴシック'">Beta Tester Registration</h4>
    <br>
    <p style="font-family: 'ＭＳ Ｐゴシック'">You may register to participate in beta programs for PlayStation. Upon registration, you will receive an invitation to join the beta programs of PlayStation system software, applications or network services.</p>
  </div>
  <br><br>
  <div style="text-align: center;">
    <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
  </div>
</div>

<br><br><br><br>

<footer class="page-footer font-small indigo " id='foter'>

    <div class="container text-center text-md-left" id='footer'>

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