<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>View Expenses</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Your Expenses</h3>

<table class="table table-bordered">
<tr>
<th>Title</th><th>Amount</th><th>Date</th><th>Action</th>
</tr>

<?php
$uid=$_SESSION['uid'];
$res=mysqli_query($conn,"SELECT * FROM expenses WHERE user_id='$uid'");
while($row=mysqli_fetch_assoc($res)){
echo "<tr>
<td>{$row['title']}</td>
<td>{$row['amount']}</td>
<td>{$row['expense_date']}</td>
<td>
<a href='edit_expense.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
<a href='delete_expense.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
</td>
</tr>";
}
?>
</table>
</body>
</html>
