<?php
$base_url = "/tamo";
?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TAMO</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<header class="bg-green-700 text-white">
  <div class="max-w-6xl mx-auto p-6 text-center">
    <img src="<?= $base_url ?>/assets/logo.jpg" class="w-20 mx-auto mb-2 rounded-full">
    <h1 class="text-2xl font-bold">TANZANIA AGRICULTURAL & MARKETING ORGANIZATION</h1>
    <p class="opacity-90">Empowering Farmers & Livestock Keepers</p>
  </div>
</header>

<nav class="bg-green-800 text-white shadow sticky top-0">
  <div class="max-w-6xl mx-auto flex justify-center space-x-8 py-3">
    <a href="<?= $base_url ?>/index.php" class="hover:text-yellow-300">Home</a>
    <a href="<?= $base_url ?>/about.php" class="hover:text-yellow-300">About</a>
    <a href="<?= $base_url ?>/programs.php" class="hover:text-yellow-300">Programs</a>
    <a href="<?= $base_url ?>/admin/programs.php" class="hover:text-yellow-300">Admin</a>
    <a href="<?= $base_url ?>/contact.php" class="hover:text-yellow-300">Contact</a>
  </div>
</nav>
  <!-- LOGIN AREA (TOP RIGHT) -->
    <div>
      <?php if(isset($_SESSION['admin'])): ?>
        <span class="mr-3">👤 <?= htmlspecialchars($_SESSION['admin']); ?></span>
        <a href="/tamo/admin/logout.php"
           class="bg-red-600 px-4 py-2 rounded">Logout</a>
      <?php else: ?>
        <a href="/tamo/admin/login.php"
           class="bg-white text-green-700 px-4 py-2 rounded">
           Admin Login
        </a>
      <?php endif; ?>
    </div>


<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<header class="bg-green-700 text-white shadow">
  <div class="max-w-7xl mx-auto flex justify-between items-center p-4">

    LOGO / TITLE 
    <div class="flex items-center space-x-3">
      <img src="/tamo/assets/logo.jpg" class="w-10 h-10 rounded-full">
      <span class="font-bold text-xl">TAMO</span>
    </div>

 MENU 
    <nav class="space-x-6 hidden md:block">
      <a href="/tamo/index.php" class="hover:underline">Home</a>
      <a href="/tamo/about.php" class="hover:underline">About</a>
      <a href="/tamo/programs.php" class="hover:underline">Programs</a>
      <a href="/tamo/contact.php" class="hover:underline">Contact</a>
    </nav>

  

  </div>
</header> -->
