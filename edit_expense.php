<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "db.php";

if(!isset($_GET['id'])){
    echo "No ID found";
    exit;
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM expenses WHERE id='$id'");
$data = mysqli_fetch_assoc($result);

if(!$data){
    echo "Expense not found";
    exit;
}

if(isset($_POST['update'])){
    $title = $_POST['title'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    mysqli_query($conn,
        "UPDATE expenses 
         SET title='$title', amount='$amount', expense_date='$date' 
         WHERE id='$id'"
    );

    header("Location: view_expense.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Expense</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h3>Edit Expense</h3>

<form method="post">
    <input type="text" name="title" class="form-control mb-2"
           value="<?php echo $data['title']; ?>" required>

    <input type="number" name="amount" class="form-control mb-2"
           value="<?php echo $data['amount']; ?>" required>

    <input type="date" name="date" class="form-control mb-2"
           value="<?php echo $data['expense_date']; ?>" required>

    <button name="update" class="btn btn-warning">Update</button>
</form>

</body>
</html>
