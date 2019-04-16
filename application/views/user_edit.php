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
  padding-left: 10px;
  border-radius: 0px;
  
}
 
.navbarsa a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 100%;
  height: 100%;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>
</head>
<body>
<nav class="navbarsa navbar-expand-md" style="background-color: black; height: 40px;padding: 0;margin: 0" >
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto" style="float:left; padding-top:15px" >
            <li class="nav-item">
                 <img src = "<?php echo base_url('img/sony_logo.svg'); ?>"  />
            </li>
        </ul>
    </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4" >
        <div class="tab">
            <p> Account</p>
            <button class="tablinks" onclick="openCity(event, 'London')">Basic Account Information</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Security</button>
        </div>
    </div>
    <div class="col-sm-8" style="background-color:lavenderblush;">.col-sm-8</div>
  </div>
</div>



    

</body>
</html>
