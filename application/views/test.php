<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

<div class="container">
  <h2>Carousel Example</h2>  
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
</div>

</body>
</html>
