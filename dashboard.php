<?php include "db.php"; if(!isset($_SESSION['uid'])) header("Location:index.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Expense Dashboard</h3>

<a href="add_expense.php" class="btn btn-primary">Add Expense</a><br>
<br>
<a href="view_expense.php" class="btn btn-info">View Expenses</a><br>
<br>
<a href="logout.php" class="btn btn-danger">Logout</a><br>
<br>

</body>
</html>
