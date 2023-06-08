<?php
  session_start();
  require_once ('database/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML/CSS/PHP</title>
  <link href="assets/font-awesome/css/all.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/fontawesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
  </style>
</head>
<body>
  <div id="main">
    <div id="header">
      <div class="picture">
        <img src="assets/img/logo.png" alt="Logo">
      </div>
      <div id="nav">
        <i id="toggle-menu" class="fas fa-home" style="color: white; font-size: 30px;margin-left: -18px;"></i>
        <ul id="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">The J Works'merit</a></li>
          <li><a href="#">Worksflow</a></li>
          <li><button>PRE REGISTER</button></li>
        </ul>
      </div>
      <div class="country">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/800px-Flag_of_England.svg.png">
        ENGLISH
        <i class="fas fa-arrow-down"></i>
      </div>
    </div>

    <div id="content">
      <div class="form-container" style="margin-top: -10px;">
        <div class="title">
          <h5>Let's prepare your job searching</h5>
        </div>
        <form method="post" action="xuly.php">
        <div class="form-fields">
            <div class="form-field-group">
                <div class="input-icons">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field" type="text" id="first-name" name="first-name" placeholder="First Name">
                </div>
                <div class="input-icons">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field" type="text" id="last-name" name="last-name" placeholder="Last Name">
                </div>
            </div>
            <div class="input-icons">
                    <i class="fas fa-map-marker-alt icon"></i>
                    <input class="input-field hihi" type="text" id="your-country" name="your-country" placeholder="Your Country">
            </div>  
            <div class="input-icons">                
                  <i class="fas fa-phone icon"></i>
                <input class="input-field hihi" type="text" id="phone-number" name="phone-number" placeholder="Phone Number">
            </div>  
            <div class="form-field-group">
                <div class="input-icons">
                    <i class="far fa-calendar-alt icon"></i>
                    <select name="sex" required="required" id="select"> 
                        <option value="">Sex</option>
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                        <option value="Other">Khác</option>
                    </select>
                </div>              
                <div class="input-icons">
                    <i class="far fa-calendar-alt icon"></i>
                    <input class="input-field" type="text" id="age" name="age" placeholder="Age           "> 
                </div>
            </div>
                <div class="input-icons">
                    <i class="far fa-calendar-alt icon"></i>
                    <select name="japanese-level" required="required" id="select"> 
                        <option value="">Japanese Level</option>
                        <option value="N1">N1</option>
                        <option value="N2">N2</option>
                        <option value="N3">N3</option>
                    </select>
                </div> 
                <div class="input-icons">
                    <i class="far fa-calendar-alt icon"></i>
                    <select name="english-level" required="required" id="select"> 
                        <option value="">English Level</option>
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                    </select>
                </div> 
                <div class="input-icons">
                    <i class="far fa-calendar-alt icon"></i>
                    <input class="input-field hihi" type="text" id="favorite-job" name="favorite-job" placeholder="Favorite Job"> 
                </div>
            <div class="input-icons">
                    <i class="fas fa-font icon"></i>
                    <select name="working-place" required="required" id="select"> 
                        <option value="">Working Place</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
            </div> 
        </div>
          <div class="form-actions">
            <button type="submit">FINISH PRE REGISTRATION</button>
          </div>
        </div>
        </form>
    </div>

    <div id="footer">
      <div class="picture-a">
        <img src="assets/img/logo.png" alt="Logo">
      </div>
      <div class="address">
        <ul>
          <li>
            <i class="fas fa-map-marker-alt" style="color: red; margin-left: -18px;"></i>
            <a href="#">Global Street 5004, Newyork,<br> United States</a>
          </li>
          <li>
            <i class="fas fa-phone" style="color: red;margin-left: -20px;"></i>
            <a href="#">Office & Factory:<br> +0 625-07520-6644 & 6655 </a></li>
          <li>
            <i class="far fa-envelope-open" style="color: red;margin-left: -22px;"></i>
            <a href="#">Email Support:<br> Support@theiworks.com</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>