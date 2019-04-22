

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
  height: 300px;
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
  width: 70%;
  border-left: none;
  height: 300px;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}
#black-small-text{
      font-family: -apple-system,BlinkMacSystemFont,'Helvetica Neue',Helvetica,HiraKakuProN-W3,'Noto Sans CJK JP',sans-serif;
      font-size: 16px;
      text-align: left;
      margin: 0;
      display: block;
      padding-top: 5px;
      width: 320px;
      min-height: 18px;
      margin-top: 3%;
    }



    .input-box{
		background-color: white;
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
    margin-top: 1%;
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
            <button class="tablinks" onclick="opensetting(event, 'basic')" id="defaultOpen">Basic Account Information</button>
            <button class="tablinks" onclick="opensetting(event, 'security')">Security</button>
        </div>
    </div>
    <div class="col-sm-8">
        <div id="basic" class="tabcontent">
            <h3>Basic Account Information</h3>
            <table>
              <tr>
                <th>Nama</th>
                <td><?php echo $name;?></td>
                <th>  
                  <button type="button" class="btn btn-info button4" data-toggle="modal" data-target="#myModal" data-whatever="@nama">Edit</button>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog ">
                      <div class="modal-content">
                        <form method='post' action='<?php echo site_url("account/edit_nama/1301174515");?>'>
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" align='middle'>Name</h4>
                          </div>
                          <div class="modal-body" id='content' >
                            <div id="black-small-text" margin=20px>
                              Full Name
                            </div>
                            <div align='middle' >
                              <input type="text" name="name" class="input-box" placeholder="Full Name">
                            </div>
                          </div>
                          <div align=middle>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="submitbtn" onclick="">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
              </th>
              </tr>
              <tr>
                <th>Gender</th>
                <td><?php echo $gender;?></td>
                <td>
                <button type="button" class="btn btn-info button4" data-toggle="modal" data-target="#myModal2" data-whatever="@gender">Edit</button>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog ">
                      <div class="modal-content">
                        <form method='post' action='<?php echo site_url("account/edit_gender/1301174515");?>'>
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-titleee" align=middle>Gender</h4>
                          </div>
                          <div class="modal-body">
                          <div class="modal-body" id='content' >
                            <div id="black-small-text" margin=20px>
                              Gender
                            </div>
                            <div align='middle' >
                            <select name='gender' class="input-box">
                              <option value = "-">-</option>
                              <option value = "l">Male</option>
                              <option value = "p">Female</option>
                            </select>
                            </div>
                          </div>
                          <div align=middle>
                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                              <button type="submit" class="submitbtn1" onclick="">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th>Residential Address</th>
                <td><?php echo $address;?></td>
                <td>
                <button type="button" class="btn btn-info button4" data-toggle="modal" data-target="#myModal3">Edit</button>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal3" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <form method='post' action='<?php echo site_url("account/edit_address/1301174515");?>'>
                          <!-- 1301174515 itu user_id -->
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" align='middle'>Address</h4>
                          </div>
                          <div class="modal-body" id='content' >
                            <div id="black-small-text" margin=20px>
                              Address
                            </div>
                            <div align='middle' >
                              <input type="text" name="address" class="input-box" placeholder="Alamat">
                            </div>
                          </div>
                          <div align=middle>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="submitbtn" onclick="">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </table>
        </div>
        <div id="security" class="tabcontent">
            <h3>Security</h3>
            <table>
              <tr>
                <th>Sign-In ID</th>
                <td><?php echo $email;?></td>
                <th>
                <button type="button" class="btn btn-info button4" data-toggle="modal" data-target="#myModal4">Edit</button>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal4" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <form method='post' action='<?php echo site_url("account/edit_email/1301174515");?>'>
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" align='middle'>Email</h4>
                          </div>
                          <div class="modal-body" id='content' >
                            <div id="black-small-text" margin=20px>
                              Email
                            </div>
                            <div align='middle' >
                              <input type="text" name="email" class="input-box" placeholder="Email">
                            </div>
                          </div>
                          <div align=middle>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="submitbtn" onclick="">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </th>
              </tr>
              <tr>
                <th>Password</th>
                <td><input type='password' value="<?php echo $password;?>" style='border:0!important'></td>
                <td>
                <button type="button" class="btn btn-info button4" data-toggle="modal" data-target="#myModal5">Edit</button>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal5" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      <form method='post' action='<?php echo site_url("account/edit_password/1301174515");?>'>
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" align='middle'>Password</h4>
                          </div>
                          <div class="modal-body" id='content' >
                            <div id="black-small-text" margin=20px>
                              Password
                            </div>
                            <div align='middle' >
                              <input type="password" name="password" class="input-box" placeholder="Password">
                            </div>
                          </div>
                          <div align=middle>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="submitbtn" onclick="">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th>Phone Number</th>
                <td><?php echo $phoneNo?></td>
                <td>
                <button type="button" class="btn btn-info button4" data-toggle="modal" data-target="#myModal5">Edit</button>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal5" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <form method='post' action='<?php echo site_url("account/edit_phone/1301174515");?>'>
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" align='middle'>Phone Number</h4>
                          </div>
                          <div class="modal-body" id='content' >
                            <div id="black-small-text" margin=20px>
                              Phone Number
                            </div>
                            <div align='middle' >
                              <input type="password" name="phoneNo" class="input-box" placeholder="Password">
                            </div>
                          </div>
                          <div align=middle>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="submitbtn" onclick="">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </table>
        </div>
    </div>
  </div>
</div>


<script>
function opensetting(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>

    

</body>
</html>
