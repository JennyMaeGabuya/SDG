<div class="main">
  <h2>SDG 4 QUALITY EDUCATION</h2>
  <div class="input-container">
    <p>Points</p>

    <?php
    include "includes/config.php";
    $query = "SELECT * FROM `tbl4_1`"; // SQL query to fetch all table data
    $result = mysqli_query($conn, $query); // sending the query to the database

    if (!$result) {
      die("Error: " . mysqli_error($conn)); // Output the error message for debugging
    }

    // Initializing total points outside the loop
    $totalPoints = 0;

    // Displaying all the data retrieved from the database using a while loop
    while ($row = mysqli_fetch_assoc($result)) {
      $source = $row['source'];

      // Define source for different categories
      $src = "SCOPUS";
      $osrc = "WEB OF SCIENCE";

      $ptsR = 0; // Initialize points for the current research

      // Check if the source matches SCOPUS or WEB OF SCIENCE
      if ($source === $src || $source === $osrc) {
        $ptsR = 25;
      } else {
        $ptsR = 10;
      }

      // Add the points for the current research to the total points
      $totalPoints += $ptsR;
    }
    ?>

    <input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 25); ?>" readonly>
  
  </div>
</div>
