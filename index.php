<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TAMO | Home</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

<?php include "includes/header.php"; ?>

<!-- NAV 
<nav class="bg-green-800 text-white sticky top-0 shadow z-50">
  <div class="max-w-6xl mx-auto flex justify-center space-x-8 py-3">
    <a href="index.php" class="hover:text-yellow-300">Home</a>
    <a href="about.php" class="hover:text-yellow-300">About Us</a>
    <a href="programs.php" class="hover:text-yellow-300">Programs</a>
    <a href="admin/programs.php" class="hover:text-yellow-300">Admin</a>
    <a href="contact.php" class="hover:text-yellow-300">Contact</a>
  </div>
</nav>-->

<!-- HERO -->
<section class="relative h-[420px] bg-cover bg-center"
style="background-image:url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6');">
  <div class="absolute inset-0 bg-black/60 flex items-center justify-center text-center">
    <div class="text-white px-6">
      <h2 class="text-4xl font-bold mb-4">Building Sustainable Agriculture</h2>
      <p class="text-lg mb-6 max-w-2xl mx-auto">
        TAMO strengthens farmers, youth and women through training, market access,
        entrepreneurship and community development.
      </p>
     <a href="programs.php"
   class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-300">
   Explore Our Programs
</a>

    </div>
  </div>
</section>

<!-- MISSION -->
<section class="max-w-6xl mx-auto p-8">
  <h3 class="text-2xl font-bold mb-4 text-green-700">Our Mission</h3>
  <p>
    To build the capacity of youth and communities to establish, manage and grow
    agricultural, livestock and marketing enterprises, while linking producers
    to reliable and sustainable markets.
  </p>
</section>

<!-- PROGRAM CARDS -->
<section class="max-w-6xl mx-auto p-8 grid md:grid-cols-3 gap-6">
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
    <h4 class="font-bold text-green-700 mb-2">Community Mobilization</h4>
    <p>Formation of Village Agricultural Groups (VAGs) to enhance collective production and marketing.</p>
  </div>
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
    <h4 class="font-bold text-green-700 mb-2">Capacity Building</h4>
    <p>Practical training on modern agriculture, livestock keeping and entrepreneurship.</p>
  </div>
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg">
    <h4 class="font-bold text-green-700 mb-2">Market Linkage</h4>
    <p>Connecting farmers with local, national and international markets.</p>
  </div>
</section>

<!-- FOOTER -->
<?php include "includes/footer.php"; ?>

</body>
</html>
