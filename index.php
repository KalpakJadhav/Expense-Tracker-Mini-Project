<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<div class="card p-4 shadow" style="max-width: 400px; margin:auto;">
<h3 class="text-center mb-3">Login</h3>

<form method="post">
    <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>

    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

    <button name="login" class="btn btn-success w-100">Login</button>
</form>

<!-- REGISTER LINK -->
<p class="text-center mt-3">
    Don't have an account?
    <a href="register.php">Register here</a>
</p>

<?php
if(isset($_POST['login'])){
    $u = $_POST['username'];
    $p = md5($_POST['password']);

    $res = mysqli_query($conn,
        "SELECT * FROM users WHERE username='$u' AND password='$p'"
    );

    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['uid'] = $row['id'];
        header("Location: dashboard.php");
    } else {
        echo "<p class='text-danger text-center mt-2'>Invalid Login</p>";
    }
}
?>

</div>
</body>
</html>
