<!DOCTYPE html>
<head>
  <title>The Miscellaneous Categories Slides Collection</title>

  <link rel="stylesheet" href="assets/fonts/Typewriter Variable/cmun-typewriter-variable.css">
  <link rel="stylesheet" href="assets/fonts/Typewriter Light/cmun-typewriter-light.css">
  <link rel="stylesheet" href="assets/fonts/Typewriter/cmun-typewriter.css">
  <link rel="stylesheet" href="assets/css/misc_slides.css">
  <!-- <link rel="stylesheet" href="assets/css/archive.css">   -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="lights draggable" style="top:80px; right:80px;"></div>

<?php

include "connect.php";

if (isset($_GET['category'])) {

$category = $_GET['category'];

$allCategories = [
        "alchemy",
        "anatomy",
        "cartoons and comics",
        "childrens drawings",
        "color",
        "computer art",
        "cosmology",
        "fireworks",
        "geometry",
        "graffiti and inscriptions",
        "happenings",
        "iconography",  
        ];

$randCategory = $allCategories[array_rand($allCategories)];

  echo "<a class='random draggable' href='index.php?category=$randCategory' style='top:25px; right:25px;'></a>";
  echo "<a class='next draggable' href='index.php?category=$category' style='top:135px; right:135px;'></a>";

   // Select a random slide from within the same category
  $sqlNext = "SELECT * FROM slides WHERE category = '$category' ORDER BY RAND()";
  $nextResult = $conn->query($sqlNext); 

  // Select a random slide from a different (random) category
  $sqlRand = "SELECT * FROM slides WHERE category = '$randCategory' ORDER BY RAND()";
  $randResult = $conn->query($sqlRand);

// If there is at least 1 row in the result, show all the rows
if ($nextResult->num_rows || $randResult->num_rows > 0) {
    // Get one row at a time until we're out of rows
    if ($row = $nextResult->fetch_assoc()) {

      echo "<div class='slide-container'>";
      echo "<div class='caption upper'>";
        echo "<a id='category' href='archive.php'>Misc. {$row['category']}</a>";
        echo "<p>";
        echo $row['caption'];
        echo "</p></div>";

      echo "<div class='middle'>";
        if ($row['image']) {
          echo "<img id='slide-image' class='deg0' src='images/{$row['category']}/{$row['image']}'>";
          }
          else {
            echo "";
          }
        echo "</div>";

        echo "<div class='caption lower'>{$row['source']}";
        echo "</div>";
      echo "</div>";
      }

  } else {
    echo "<p class='caption upper'>No slides.</p>";
  }
} else {

$allCategories = [
        "alchemy",
        "anatomy",
        "cartoons and comics",
        "childrens drawings",
        "color",
        "computer art",
        "cosmology",
        "fireworks",
        "geometry",
        "graffiti and inscriptions",
        "happenings",
        "iconography",  
        ];

$randCategory = $allCategories[array_rand($allCategories)];

$category = $allCategories[array_rand($allCategories)];

  echo "<a class='random draggable' href='index.php?category=$randCategory' style='top:" . rand(10,150) . "px; right:" . rand(10,150) . "px;'></a>";
  echo "<a class='next draggable' href='index.php?category=$category' style='top:" . rand(10,150) . "px; right:" . rand(10,150) . "px;'></a>";

   // Select a random slide from within the same category
  $sqlNext = "SELECT * FROM slides WHERE category = '$category' ORDER BY RAND()";
  $nextResult = $conn->query($sqlNext); 

  // Select a random slide from a different (random) category
  $sqlRand = "SELECT * FROM slides WHERE category = '$randCategory' ORDER BY RAND()";
  $randResult = $conn->query($sqlRand);

// If there is at least 1 row in the result, show all the rows
if ($nextResult->num_rows || $randResult->num_rows > 0) {
    // Get one row at a time until we're out of rows
    if ($row = $nextResult->fetch_assoc()) {

      echo "<div class='slide-container'>";
      echo "<div class='caption upper'>";
        echo "<p id='category' href='archive.php'>Misc. {$row['category']}</p>";
        echo "<p>";
        echo $row['caption'];
        echo "</p></div>";

      echo "<div class='middle'>";
        if ($row['image']) {
          echo "<img id='slide-image' class='deg0' src='images/{$row['category']}/{$row['image']}'>";
          }
          else {
            echo "";
          }
        echo "</div>";

        echo "<div class='caption lower'>{$row['source']}";
        echo "</div>";
      echo "</div>";
      }

  } else {
    echo "<p class='caption upper'>No slides.</p>";
  }
}

?>

<script>

$(function(){
  
//projector mode  
  $('.lights').click(function(){
    $('body').toggleClass('darkness');
    $('.lights').toggleClass('shine');
  });

  $('.draggable').draggable();
  });

  $('#slide-image').click(function () {
    $('#slide-image').each(function(){
      var classes = ['deg0','deg90','deg180','deg270'];
      this.className = classes[($.inArray(this.className, classes)+1)%classes.length]; 
    });
  });

</script>
</body>
</html>