<?php
include "db.php";
include "includes/header.php";
?>

<div class="max-w-6xl mx-auto p-8">
<h2 class="text-3xl font-bold mb-6">Our Programs</h2>

<div class="grid md:grid-cols-3 gap-6">
<?php
$result = mysqli_query($conn,"SELECT * FROM programs");
while($row = mysqli_fetch_assoc($result)){
?>
  <div class="bg-white p-6 rounded-xl shadow">
    <h3 class="font-bold text-green-700 mb-2"><?= $row['title']; ?></h3>
    <p><?= $row['description']; ?></p>
  </div>
<?php } ?>
</div>
</div>

<?php include "includes/footer.php"; ?>
