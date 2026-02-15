<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/tamo/db.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = mysqli_query($conn,"SELECT * FROM admins WHERE username='$username'");
    $admin = mysqli_fetch_assoc($q);

    if($admin && password_verify($password,$admin['password'])){
        $_SESSION['admin'] = $admin['username'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid login details";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<form method="POST" class="bg-white p-8 rounded shadow w-96">
<h2 class="text-2xl font-bold mb-4 text-center">Admin Login</h2>

<?php if(isset($error)) echo "<p class='text-red-600 mb-2'>$error</p>"; ?>

<input type="text" name="username" placeholder="Username" class="w-full border p-2 mb-3" required>
<input type="password" name="password" placeholder="Password" class="w-full border p-2 mb-3" required>

<button name="login" class="bg-green-700 text-white w-full py-2 rounded">
Login
</button>
</form>

</body>
</html>
