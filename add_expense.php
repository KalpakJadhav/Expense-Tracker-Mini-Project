<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Expense</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Add Expense</h3>

<form method="post">
<input type="text" name="title" class="form-control mb-2" placeholder="Expense Title" required>
<input type="number" name="amount" class="form-control mb-2" placeholder="Amount" required>
<input type="date" name="date" class="form-control mb-2" required>
<button name="save" class="btn btn-success">Save</button>
</form>

<?php
if(isset($_POST['save'])){
    $t=$_POST['title'];
    $a=$_POST['amount'];
    $d=$_POST['date'];
    $uid=$_SESSION['uid'];
    mysqli_query($conn,"INSERT INTO expenses(user_id,title,amount,expense_date) VALUES('$uid','$t','$a','$d')");
    echo "<p class='text-success'>Expense Added</p>";
}
?>
</body>
</html>
