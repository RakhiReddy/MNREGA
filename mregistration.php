<!DOCTYPE html>
<head>
<title>MNREGA|Registration</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
background-repeat: no-repeat;
  background-size: 125%;
  font-family: 'Roboto Condensed', sans-serif;

}

.form-reg {
  max-width: 330px;
  padding: 15px;
 text-align: center;
    margin: 0 auto;
}
.form-reg .form-regn-heading,
.form-reg .checkbox {
  margin-bottom: 10px;
text-align: center;
}
.form-reg .checkbox {
  font-weight: normal;
}
.form-reg .form-control {
  position: relative;
    text-align: center;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-reg .form-control:focus {
  z-index: 2;
    text-align: center;
}

a:hover {
        text-decoration: none;
        color:#FFFFFF;
        height:50px;}

    /*a:active {}*/  
#check{
  font-size: 24px;
  color: #000000;
}

    </style>
</head>
<body>
    <p align="right">
<a href="mindex.php" id="check">Home|</a>
<a href="mcontactus.php" id="check">Contact Us&nbsp;&nbsp;&nbsp;</a></p>


    <div class="container">

      <form class="form-reg" action ="mregister.php" method ="POST" >
        <h2 class="form-reg-heading" style="text-align:center;">Registration</h2>
        <input type="text" class="form-control" placeholder="First Name" name="firstname" required autofocus>
          <input type="text" class="form-control" placeholder="Last Name" name="lastname" required autofocus>
          <input type="text" class="form-control" placeholder="Address" name="address" required autofocus>
        <!--   <input type="date" class="form-control" placeholder="Date of Birth" required autofocus />
         --><input type="text" class="form-control" placeholder="Village" name="village" required autofocus>
        <input type="text" class="form-control" placeholder="Aadhar Card No" name="card" required>
        <br>
          <!-- <label class="checkbox">
          <input type="checkbox" value="remember-me" > Remember me
        </label> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="text-align:center;">Register</button>
      </form>
    </div>
  </body>
  </html>
