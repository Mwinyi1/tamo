<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

include $_SERVER['DOCUMENT_ROOT']."/tamo/includes/header.php";
?>

<div class="max-w-6xl mx-auto p-8 space-y-6">

<h2 class="text-3xl font-bold mb-6 text-green-700">Admin Dashboard</h2>

<div class="grid md:grid-cols-3 gap-6">

  <!-- Programs Card -->
  <div class="bg-white rounded-xl shadow p-6">
    <h3 class="text-xl font-bold mb-3">Programs</h3>
    <p>Manage all programs (add, edit, delete)</p>
    <a href="programs.php" class="mt-3 inline-block bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Go to Programs</a>
  </div>

  <!-- Users Card (future use) -->
  <div class="bg-white rounded-xl shadow p-6">
    <h3 class="text-xl font-bold mb-3">Users</h3>
    <p>Manage user accounts (coming soon)</p>
    <a href="#" class="mt-3 inline-block bg-gray-700 text-white px-4 py-2 rounded opacity-50 cursor-not-allowed">Manage Users</a>
  </div>

  <!-- Reports Card (future) -->
  <div class="bg-white rounded-xl shadow p-6">
    <h3 class="text-xl font-bold mb-3">Reports</h3>
    <p>View program and system reports (coming soon)</p>
    <a href="#" class="mt-3 inline-block bg-gray-700 text-white px-4 py-2 rounded opacity-50 cursor-not-allowed">View Reports</a>
  </div>

</div>

</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/tamo/includes/footer.php"; ?>
