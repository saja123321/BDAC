<html>
<head>
<title>User Login and registration </title>
<link rel="stylesheet" href="style1.css">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


<div class="container">
    <div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
<h2> Login Here</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" id="myInput" required>
<br>
<input type="checkbox" onclick="myFunction()"><b> Show Password</b>
 

</div>
<button type="submit" class="btn btn-primary"> Login </button>
</form>
</div>

<div class="col-md-6 login-right">
<h2> Registr Here</h2>
<form action="registration.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" id="myInput1" required>
<br>
<input type="checkbox" onclick="myFunction1()"><b> Show Password</b>
</div>
<button type="submit" class="btn btn-primary"> Registr </button>
</form>
</div>
<script>
function myFunction1() {
  var x = document.getElementById("myInput1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</div>
</div>
</div>
</body>
</html>