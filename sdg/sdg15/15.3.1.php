<!--============================================================================================= 
                      INSERT DATA TO DB ONCE SUBMIT BUTTON WAS CLICKED
============================================================================================= -->

<?php
if (isset($_POST['submit'])) {
  // Get form data
  $evidence=$_POST['evidence'];
 
  include "includes/config.php"; // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE ex: conn.php


  // SQL query to insert data
  $sql = "INSERT INTO tbl15_3_1_number (evidence) 
  VALUES ('$evidence')";

  if ($conn->query($sql) === TRUE) {
    // The dat was successfully entered
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SDG 15.3.1 | Number </title>

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
      color:#FCF5ED;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color:  rgb(86, 192, 43);
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
      color: rgb(86, 192, 43);
    }

    .card {
      width: 64%;
    margin-left: 350px;
    margin-right: 50px;
    margin-bottom: 50px;
    margin-top: 20px; 
    height:auto;

    }

    .content>p {
      text-align: justify;
      justify-content: justify-content;
    }

    .form-control {
      margin-right: 30px;
      display: block;
      width: 88%;
      height: 30px;
    }

    .form-row {

      height: 30px;

    }

    .contentform {
      margin-top: 30px;
      margin-left: 100px;
      margin-bottom: 30px;
      justify-content: center;
      align-items: center;

    }

    .btn {
      margin-bottom: 10px;

    }

    /* remove muna pic 
.image{
  width: 50px;
  height: 50px;
}
  */
    .table-container {
      margin-left: 350px;
      margin-right: 50px;
      width: 64%;
      overflow-x: auto;
    }

    .h3text {
      justify-content: center;
      margin-left: 300px;
    }

    .points {
      box-shadow: grey;
    }

    .fields {
      border-bottom: solid 1px #e9d6d6;
      margin-right: 25px;
    }

    /* css for confrim button */
    .button-container {
      display: flex;
      align-items: center;
      /* Align items vertically */
    }

    .btn {
      margin-right: 10px;
      /* Adjust margin as needed */
    }

    .confirmation-text {
      margin: 0;
      /* Remove default margin for the paragraph */
    }

    /* endddd */
  </style>

<body>
  <?php include('sidebar.php'); ?>

  <!--============================================================================================= 
                                  START OF HEADER POINTING SYSTEM 
============================================================================================= -->

  <div class="main">
    <h2>SDG 15 LIFE ON LAND</h2>
    <div class="input-container">
      <p>Points</p>

      <?php                            //========================================================= 
      include "includes/config.php";  // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE
      $query = "SELECT Count(*) AS total FROM tbl15_3_1_number"; // SQL query to fetch all table data
      $result = mysqli_query($conn, $query); // sending the query to the database

      $totalPoints = 0;

      while ($row = mysqli_fetch_assoc($result)) {
        $total = $row['total'];
        $totalno = $total;

        // calculate points by dividing total number of PPAs by 2 and multiply by 10
        $points = ($totalno / 2 * 10);


        // Add the points  to the total points
        $totalPoints += $points;
      }
      ?>

      <input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 10); ?>" readonly>
    </div>
  </div>

<!--============================================================================================= 
                                  END OF HEADER POINTING SYSTEM 
 ============================================================================================= -->

  <div class="content">
    <br>
    <h3>15.3.2 Number endangered flora/fauna in the campus</h3>
  

    <!--remove muna pic 
    <div class="image" style="width: 50px;"style="height: 50px;">
            <img src="img/rs.png" alt="Image">
        </div>
-->

  </div>
   <!--============================================================================================= 
                                  START OF FORM
============================================================================================= -->
  <div class="card">
    <div class="contentform">
      <form method="POST">

        <div class="form-group"><i class="fa fa-bookmark"></i>
          <label for="evidence" class="text-center ">Evidence</label>
          <textarea class="form-control" id="title" name="title" rows="3" required></textarea>
        </div>

        <div>
        <button type="submit" class="btn btn-primary mb-3" name="submit"><i class="fa fa-send"></i> Submit</button>
        <button type="reset" class="btn btn-danger mb-3" name="cancel"><i class="fa fa-times-circle"></i> Cancel</button>
          
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
        </div><br>

      </form>
    </div>
  </div>

  <!--============================================================================================= 
                                END OF FORM
============================================================================================= -->

<!--============================================================================================= 
                        START OF TABLE/ DISPLAY ALL RECORDS FROM DATABASE
============================================================================================= -->
  <div class="table-container">
    <h2>Endangered Species</h2>
    <table class="table table-bordered">
      <thead>
          <th scope="col" style="width: 150px;">Evidence</th>
      </thead>

      <tbody>
        <?php
        include "includes/config.php";
        $query = "SELECT * FROM tbl15_3_1_number ORDER BY totalnumber DESC"; // SQL query to fetch all table data
        $result = mysqli_query($conn, $query); // sending the query to the database

        if (!$result) {
          die("Error: " . mysqli_error($conn)); // Output the error message for debugging
        }
        // Displaying all the data retrieved from the database using a while loop
        while ($row = mysqli_fetch_assoc($result)) {
          $evidence = $row['evidence'];
         
          echo "<tr>";
          echo "<td>{$evidence}</td>";
          
          echo "<td style='width:100px'>
                          <a href='edit/edit_15.3.1.php?update&event_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete_15.3.1.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";
        }
        ?>
      </tbody>
    </table>
  </div>
<!--============================================================================================= 
                                END OF TABLE
============================================================================================= -->

<!--============================================================================================= 
//                           this is js for sidebar panel
// DONT REMOVE IT. MAKE SURE TO INCLUDE IT TO ALL YOUR FILES   !!!!!!!!!!
//============================================================================================= -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    //this is js for sidebar panel
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
