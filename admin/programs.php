
<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}
include $_SERVER['DOCUMENT_ROOT']."/tamo/includes/header.php";
?>

<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Manage Programs</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">



<h2 class="text-2xl font-bold mb-4">TAMO Programs</h2>

<form method="POST" class="bg-white p-6 rounded shadow mb-6">
  <input type="text" name="title" placeholder="Program Title" class="w-full border p-2 mb-3" required>
  <textarea name="description" placeholder="Program Description" class="w-full border p-2 mb-3" required></textarea>
  <button name="save" class="bg-green-700 text-white px-4 py-2 rounded">Save Program</button>
</form>

<?php
if(isset($_POST['save'])){
  $title = $_POST['title'];
  $desc = $_POST['description'];
  mysqli_query($conn,"INSERT INTO programs(title,description) VALUES('$title','$desc')");
}
?>

<table class="w-full bg-white rounded shadow">
<tr class="bg-green-700 text-white">
<th class="p-2">Title</th>
<th>Description</th>
<th>Action</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM programs");
while($row = mysqli_fetch_assoc($result)){
?>
<tr class="border-b">
<td class="p-2"><?= $row['title']; ?></td>
<td><?= $row['description']; ?></td>
<td class="p-2">
<a href="delete.php?id=<?= $row['id']; ?>" class="text-red-600">Delete</a>
</td>
</tr>
<?php } ?>
</table>
<?php include "../includes/footer.php"; ?>
</body>
</html>
