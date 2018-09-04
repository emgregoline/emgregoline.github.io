<!DOCTYPE html>
<head>
  <title>The Miscellaneous Categories Slides Collection</title>
  <link rel="stylesheet" href="assets/fonts/Typewriter Variable/cmun-typewriter-variable.css">
  <link rel="stylesheet" href="assets/fonts/Typewriter Light/cmun-typewriter-light.css">
  <link rel="stylesheet" href="assets/fonts/Typewriter/cmun-typewriter.css">
  <!-- <link rel='stylesheet' href='assets/css/misc_slides.css'> -->
  <link rel="stylesheet" href="assets/css/archive.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="lights draggable" style="top: 40px; right: 40px;"></div>
<div class="container">
<?php
include "connect.php";

// if (isset($_GET['category'])) {

// $category = $_GET['category'];

// $allCategories = [
//         "alchemy",
//         "anatomy",
//         "cartoons and comics",
//         "childrens drawings",
//         "color",
//         "computer art",
//         "cosmology",
//         "fireworks",
//         "geometry",
//         "graffiti and inscriptions",
//         "happenings",
//         "iconography",  
//         ];

// $randCategory = $allCategories[array_rand($allCategories)];

//   echo "<a class='random draggable' href='index.php?category=$randCategory'></a>";
//   echo "<a class='next draggable' href='index.php?category=$category'></a>";

   // Select a random slide from within the same category

  // Select a random slide from a different (random) category
  $sql = "SELECT * FROM slides ORDER BY category";
  $result = $conn->query($sql);

// If there is at least 1 row in the result, show all the rows
if ($result->num_rows > 0) {
    // Get one row at a time until we're out of rows
    while ($row = $result->fetch_assoc()) {
      echo "<a href='index.php?image={$row['image']}'>";
      echo "<div class='thumb-container'>";

      echo "<div class='thumb-caption'>";
        echo $row['category'];
        echo "<br>";
        echo $row['caption'];
        echo "</div>";

        if ($row['image']) {
          echo "<img id='slide-image' src='images/{$row['category']}/{$row['image']}'>";
          }
          else {
            echo "";
          }
      
      echo "</div>";
      echo "</a>";
      }

  } else {
    echo "<p class='caption upper'>No slides.</p>";
  }

  // Close the databse connection
  $conn->close();
?>


<!-- 
<div class="next"></div>
 -->
</div>

<script>

// $(".next").click(function() {
//     $("#slide-image").find(":visible").hide().next().show();
// });


$(function(){
  
  $('.lights').click(function(){
    $('body').toggleClass('darkness');
    $('.lights').toggleClass('shine');
  });
  
  // $('.star').click(function(){
  //   $('.letter').toggleClass('show');
  // });

});

// $('#slide-image').click(function () {
//   $('#slide-image').each(function(){
//     var classes = ['deg0','deg90','deg180','deg270'];
//     this.className = classes[($.inArray(this.className, classes)+1)%classes.length];
//   });
// });
</script>
</body>
</html>