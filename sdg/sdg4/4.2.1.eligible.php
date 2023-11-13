<?php
if (isset($_POST['submit'])) {
    // Get form data
  $total_number = $_POST['total_number'];
  $eligibleProgram = $_POST['eligibleProgram'];
  $eligibleMale = $_POST['eligibleMale'];
  $eligibleFemale = $_POST['eligibleFemale'];

  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl421_eligible` (total_number, program, male, female) VALUES ('$total_number', '$eligibleProgram', '$eligibleMale', '$eligibleFemale')";

  if ($conn->query($sql) === TRUE) {
    // The research was successfully entered
    $successMessage = "You have successfully entered data";
  } else {
    // There was an error in the SQL query
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
  $conn->close();
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>4.2.1 | Graduates Statistics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href=css/sidebar.css>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- for icons */  -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <!--- for table __-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    body {
      font-family: "Lato", sans-serif;
      background-color: white;
    }

    /* Main content */
    .main {
      margin-left: 250px;
      /* Same as the width of the sidenav */
      font-size: 20px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
      color: #FCF5ED;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #F4BF96;
      font-family: Verdana, sans-serif;
      font-weight: bolder;

    }

    .points {
      width: 60px;
      height: 40px;
      border-radius: 15px;
    }

    p {
      margin: 20px;
      font-size: 16px;
    }

    h2 {
      flex: 1;
      /* Allow h2 to grow to take available space */
    }

    .input-container {
      display: flex;
      align-items: center;
    }

    p {
      margin-right: 10px;
    }

    .content {
      margin-left: 300px;
      /* Same as the width of the sidenav */
      font-size: 20px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
      color: #C31F33;
    }

    .card {
      margin-left: 300px;
      margin-right: 50px;
      margin-bottom: 50px;
      margin-top: 20px;
    }

    .form-control {
      margin-right: 50px;
      display: block;
      width: 60%;
      height: 30px;
    }

    .container {
      margin-top: 30px;
      margin-left: 110px;
      margin-bottom: 30px;
      margin-right: 50px;
      justify-content: center;
      align-items: center;
    }

    /* remove muna pic 
.image{
  width: 50px;
  height: 50px;
}
  */
    .table-container {
      margin-left: 300px;
      margin-right: 50px;
    }

    .h3text {
      justify-content: center;
      margin-left: 300px;
    }
  </style>

<body>
  <?php include('sidebar.php'); ?>
  <?php include('header.php'); ?>
  <div class="content">
    <br>
    <h3>Proportion of graduates with relevant qualifications in each respective field</h3>
    <!--remove muna pic 
    <div class="image" style="width: 50px;"style="height: 50px;">
            <img src="img/rs.png" alt="Image">
        </div>
-->

  </div>
  <div class="card">

    <div class="container mt-3 d-flex">
      <form method="POST" class="flex-grow-1">
        <h3 class="h3text">Graduates</h3>

        <div class="mb-2 mt-2"><i class="fa fa-search"></i>
          <label for="total_number">Total number of graduates who are eligible for licensure examination</label>
          <input type="number" class="form-control" id="total_number" name="total_number" required>
        </div>


        <div class="mb-2 mt-2"><i class="fa fa-user"></i>
          <label for="eligibleProgram">Program</label>
          <input type="text" class="form-control" id="eligibleProgram" name="eligibleProgram" required>
        </div>

        <div class="mb-2"><i class="fa fa-bookmark"></i>
          <label for="eligibleMale">Total number of male graduates</label>
          <input type="number" class="form-control" id="eligibleMale" name="eligibleMale" required>
        </div>

        <div class="mb-2 mt-2"><i class="fa fa-bar-chart"></i>
          <label for="eligibleFemale">Total number of female graduates</label>
            <input type="number" class="form-control" id="eligibleFemale" name="eligibleFemale" required>
        </div>

        <button type="submit" class="btn btn-primary mb-3" name="submit"><i class="fa fa-check"></i> Check</button>
        <script type="text/javascript">

          <?php
          if (isset($successMessage)) {

            echo "swal({
            title: 'Success',
            text: '$successMessage',
            icon: 'success',
            button: 'OK'
        });";
          }
          ?>
        </script>

        <button type="reset" class="btn btn-danger mb-3" name="cancel"><i class="fa fa-times-circle"></i> Cancel</button>
      </form>
    </div>
  </div>
  <div class="table-container">
    <h2>Eligible Graduates</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Total Number</th>
          <th scope="col">Program</th>
          <th scope="col">Male</th>
          <th scope="col">Female</th>
          <th scope="col">Percentage</th>
          <th scope="col" colspan="3" class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        
        <?php
        include "includes/config.php";
        $query = "SELECT * FROM `tbl421_eligible`"; // SQL query to fetch all table data
        $result = mysqli_query($conn, $query); // sending the query to the database

        if (!$result) {
          die("Error: " . mysqli_error($conn)); // Output the error message for debugging
        }
        // Displaying all the data retrieved from the database using a while loop
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['ID'];
          $total_number = $row['total_number'];
          $eligibleProgram = $row['program'];
          $eligibleMale = $row['male'];
          $eligibleFemale = $row['female'];
          $percentage = $row['percentage'];

          $percentageMale = ($eligibleMale / $total_number) * 100;
          $percentageFemale = ($eligibleFemale / $total_number) * 100;

          echo "<tr>";
          echo "<td>{$id}</td>";
          echo "<td>{$total_number}</td>";
          echo "<td>{$eligibleProgram}</td>";
          echo "<td>{$eligibleMale}</td>";
          echo "<td>{$eligibleFemale}</td>";
          echo "<td>Male: {$percentageMale}%  Female: {$percentageFemale}%</td>";

          echo "<td class='text-center'>
                          <a href='edit_4.2.1.eligible.php?update&eligible_id={$id}' class='btn btn-secondary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                      </td>";

          echo "<td class='text-center'>
                          <a href='delete_4.2.1.eligible.php?delete=eligible_id{$id}' class='btn btn-danger'>
                              <i class='fa fa-trash'></i>
                          </a>
                      </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>
</body>

</html>