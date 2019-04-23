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

.buycontainer {
  display: flex;
  justify-content: center;
  padding-left: 200px;
}

.buycontainer > div {
  width: 530px;
  height: 360px;
  padding: 10px;
}

.linkcontainer {
  display: flex;
  justify-content: center;
  background-color: #e9e9e9;

}

.linkcontainer > div {
  width: 300px;
  height: 80px;
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
  padding: 14px;
  width: 398px;
  margin-top: 20px;
  margin-left: 80px;
  height: 235px;
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

.flex-container {
  display: flex;
  justify-content: center;
}

.flex-container > div {
  width: 290px;
  height: 400px;
  margin: 15px;
  text-align: center;
}
#titletext{
  font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
  font-size: 36.4px;
  text-align: center;
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

    <style>
    .container {
      position: relative;
      text-align: center;
      color: white;
    }

    .bottom-left {
      position: absolute;
      bottom: 8px;
      left: 16px;
    }

    .top-left {
      position: absolute;
      top: 8px;
      left: 16px;
    }

    .top-right {
      position: absolute;
      top: 8px;
      right: 16px;
    }

    .bottom-right {
      position: absolute;
      bottom: 8px;
      right: 16px;
    }

    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

  </style>
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
  <a style="padding-left: 17px; padding-top: 13px;padding-right: 24px; " href="<?php echo site_url();?>/front"><img src = "<?php echo base_url('img/icon_ps_pc.svg'); ?>"></a>
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
              <a href="<?php echo site_url();?>/front/games_admin">
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
              <a href="<?php echo site_url();?>/front/psn_admin">
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
              <a href="<?php echo site_url();?>/front/support_admin">
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

<img style="width: 100%;position: relative;z-index: 1;"src="<?php echo base_url('img/psn/psn-top-hero-20170201.png'); ?>">
<div class="ps4procontainer" style="margin-bottom:-400px;z-index: -4;margin-top: 0px">
  <h2 id="titletext" style="position: relative;padding-top: 80px; margin-bottom: -185px;color: #1F1F1F;" >Experience More with PlayStation Network</h2>
  <img src="<?php echo base_url('img/psn/spsn2.png'); ?>" style="z-index: -4;margin-right: -20px;margin-left: -190px">
  <div class="textcontainer" style=" margin-top: -520px">
    <div>
      
    </div>
    <div style="padding-right: 30px; z-index: 1;   background-color: #000000a3;">
      <p><h5 style="font-family: MS PGothic; font-size: 11pt">PSN let you play the world live and it is completely FREE! Connect your console to the Internet to enjoy PSN service and expand your entertainment world! Wanna show your great performance in PlayStation games? The PSN trophy function can let your friends know what you win in real time.  </h5></p>
      <button class="btnlearnmore"><h5>ABOUT ACCOUNT</h5></button>
    </div>
  </div>
</div>
<h2 id="titletext" style="position:relative;color: #1F1F1F; background-color: white;z-index: 1; padding-top: 75px; padding-bottom: 40px" >PlayStation Network Services</h2>
  <div class="flex-container" >
    <div>
      <img style="width: 170px;height: 120px; "src="<?php echo base_url('img/psn/menu_playstationstore.png'); ?>"> <br>
      <h4 style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">PlayStation Store</h4> <br>
      <p style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">PlayStation Store is an all-in-one online store which provides fabulous contents and exclusive offers, from classic games to latest games, add-ons, avatars.... Simply connect your PlayStation 4, PlayStation 3, PlayStation Vita to PSN and you can enjoy all these goodies anytime!</p><br>
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    <div>
      <img style="width: 170px;height: 120px; "src="<?php echo base_url('img/psn/menu_playstationplus.png'); ?>"> <br>
      <h4 style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">PlayStation Plus</h4> <br>
      <p style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">Enhance your account with PlayStation Plus! PS Plus members enjoy access to exclusive gaming features and special offers on PlayStation Store.</p><br><br><br><br>
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    <div>
      <img style="width: 170px;height: 120px; "src="<?php echo base_url('img/psn/menu_playstationmusic.png'); ?>"> <br>
      <h4 style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">PlayStation Music</h4> <br>
      <p style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">Listen to millions of songs on-demand with Spotify, available on your PlayStation 4 system and Xperia™ devices. Play any song, anytime.</p><br><br><br><br>
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
  </div>
  <div class="flex-container" >
    <div>
      <img style="width: 170px;height: 120px; "src="<?php echo base_url('img/psn/menu_playstationapp.png'); ?>"> <br>
      <h4 style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">PlayStation App</h4> <br>
      <p style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">PlayStation App will enhance your PlayStation experience with your smartphone or Tablet.</p><br><br><br><br><br>
      <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
    </div>
    <div>

    </div>
    <div>

    </div>
  </div>
<br><br><br><br><br><br><br>
<h2 id="titletext" style="position:relative;color: #1F1F1F; background-color: white;" >Ways to Pay</h2>
<br>
<div class="buycontainer">
  <div>
    <img style="width: 510px" src="<?php echo base_url('img/psn/psn-top-article01-20170223.png'); ?>">
  </div>
  <div>
    <p style="font-family: 'ＭＳ Ｐゴシック'; font-weight: 400;">How to purchase in PlayStation Store?</p><br>
    <button class="btnlearnmore"><h5>LEARN MORE</h5></button>
  </div>
</div>
<br><br><br><br>
<div class="linkcontainer">
  <div style="margin-top: 50px">
    <a style="text-decoration: none;" href="#"><h5 style="font-family: 'ＭＳ Ｐゴシック';">PSN Terms of Service and User Agreement</h5></a>
  </div>
  <div style="margin-top: 50px">
    <a style="text-decoration: none;" href="#"><h5 style="font-family: 'ＭＳ Ｐゴシック';">PSN Privacy Policy</h5></a>
  </div>
  <div style="margin-top: 50px"> 
    <a style="text-decoration: none;" href="#"><h5 style="font-family: 'ＭＳ Ｐゴシック';">Copyright and Trademark Notices</h5></a>
  </div>
</div>
<footer class="page-footer font-small indigo " id='foter' style="clear: left;">
    <div class="container text-center text-md-left" id='footer' >
      <div class="row"style="padding-left : 100px">
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