<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Register</h3>

<form method="post">
<input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
<button name="register" class="btn btn-primary">Register</button>
</form>

<?php
if(isset($_POST['register'])){
    $u = $_POST['username'];
    $p = md5($_POST['password']);
    mysqli_query($conn,"INSERT INTO users(username,password) VALUES('$u','$p')");
    echo "<div class='alert alert-success mt-2'>
Registered Successfully. <a href='index.php'>Login Now</a>
</div>
";
}
?>
</body>
</html>
