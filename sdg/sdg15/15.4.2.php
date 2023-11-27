<!--============================================================================================= 
                      INSERT DATA TO DB ONCE SUBMIT BUTTON WAS CLICKED
============================================================================================= -->
<?php
if (isset($_POST['submit'])) {
  // Get form data
  $policies = $_POST['policies'];
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $cost = $_POST['cost'];
  $fund = $_POST['fund'];

  include "includes/config.php"; // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE ex: conn.php


  // SQL query to insert data
  $sql = "INSERT INTO `tbl15_42_food` ( `total_policies`,`title`, `description`, `cost`, `fund`) 
  VALUES ('$policies','$title','$desc','$cost','$fund')";

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
  <title>SDG 15.4.2 | Sustainably farmed food on campus</title>

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
      /* margin-left: 250px;  Same as the width of the sidenav */
      font-size: 20px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
      color: #FCF5ED;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #56c02b;
      font-family: Verdana, sans-serif;
      font-weight: bolder;
      /* ==========================================just added */
    }

    .points {
      width: 60px;
      height: 40px;
      border-radius: 15px;
    }
    .h2head{
      margin-left: 200px;
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
      /* Same as the width of the sidenav */
      font-size: 17px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
      color: black;
      margin-left: 80px;
    }

    .card {
      width: 70%;
      margin-left: 350px;
      font-size: 17px;
      margin-bottom: 50px;
      margin-top: 20px;
      height: auto;
    }

    .content>p {
      text-align: center;
      justify-content: justify-content;
      font-size: 14px;
      margin: auto;
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
      margin-left: 50px;
      margin-bottom: 30px;
      justify-content: center;
      align-items: center;

    }

    .btn {
      margin-bottom: 10px;

    }

    .table-container {
      margin-right: 20px;
      width: 70%;
      overflow-x: auto;
    }

    .h3text {
      justify-content: center;

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

    /* ==========================================just added===================================================== */
    /* Centering content and responsiveness */
    .card {
      width: 55%;
      /* Adjust card width */
      margin: 60px auto;
      /* Center the card and provide space */
      font-size: 16px;
    }

    .table-container {
      width: 100%;
      /* Adjust table container width */
      margin: 20px auto;
      /* Center the table and provide space */
      overflow-x: auto;
      /* Enable horizontal scrolling on smaller screens if needed */
      font-size: 15px;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 768px) {
      .card {
        width: 90%;
        /* Adjust card width for smaller screens */
        margin: 10px auto;
        /* Adjust margin for smaller screens */
        font-size: 13px;
      }

      .table-container {
        width: 90%;
        /* Adjust table container width for smaller screens */
        margin: 10px auto;
        font-size: 13px;
      }

      .content {
        /* Same as the width of the sidenav */
        font-size: 16px;
        /* Increased text to enable scrolling */
        padding: 0px 10px;
        color: black;
        margin-left: 5px;
      }

      img {
        width: 100%;
        margin-top: 60px;
        height: 150px;


      }
      .h2head {
  
  margin: 10px auto;
  font-size: 15px;
  font-weight: bolder;
   margin-left: 20px; 
}
    }
  </style>

<body>
  <?php include('sidebar.php'); ?>


  <!--============================================================================================= 
                                  START OF HEADER POINTING SYSTEM 
============================================================================================= -->
  <div class="main">
    <h2 class="h2head text-center">SDG 15 LIFE ON LAND</h2>
    <div class="input-container">
      <p>Points</p>

      <?php
      include "includes/config.php";

      $query = "SELECT *, SUM(`total_policies`) AS pol, COUNT(*) AS totalppa FROM `tbl15_42_food`";
      $result = mysqli_query($conn, $query);
      if (!$result) {
        die("Query failed: " . mysqli_error($conn)); // Display the MySQL error for debugging
      }
      $totalPoints = 0;

      while ($row = mysqli_fetch_assoc($result)) {
        $pol = $row['pol'];
        $ppa = $row['totalppa'];

        // Calculate points for policies by dividing total number of policies by 1 and multiply by 2
        $policypoints = ($pol / 1 * 2);
        // Calculate points for PPAs by dividing total number of PPAs by 2 and multiply by 8
        $ppapoints = ($ppa / 2 * 8);

        // Add points of policy and PPA
        $points = $policypoints + $ppapoints;

        // Add the points to the total points
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
    <h3 class="text-center">15.4.2 Sustainably farmed food on campus</h3>
    <p>Have policies to ensure that food on campus is sustainably farmed.</p>

    <!--============================================================================================= 
                                  START OF FORM
============================================================================================= -->
    <div class="card">
      <div class="contentform">
        <form method="POST">
          <div class="form-group"><i class="fa fa-dollar"></i>
            <label for="cost">Total number of policies ensuring that food on campus is sustainably
              farmed</label>
            <input type="number" class="form-control" id="" name="policies">
          </div>
          <div class="form-group"><i class="fa fa-bookmark"></i>
            <label for="title" class="text-center ">Title of the PPA</label>
            <textarea class="form-control" id="title" name="title" rows="3" required></textarea>
          </div>
          <div class="form-group"><i class="fa fa-edit"></i>
            <label for="desc">Short description of the PPA</label>
            <textarea class="form-control" id="desc" name="desc" rows="5" required></textarea>
          </div>
          <div class="form-group"><i class="fa fa-dollar"></i>
            <label for="cost">Total cost</label>
            <input type="number" class="form-control" id="" name="cost" required>
          </div>
          <div class="form-group"><i class="	fa fa-group"></i>
            <label for="fund">Fund source</label>
            <input type="text" class="form-control" id="" name="fund" required>
          </div>

          <div>
            <button type="submit" class="btn btn-primary  mb-3" id="submit" name="submit">
              <i class="fa fa-send"></i>Submit</button>
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
      <h2 class="text-center">Sustainably farmed food on campus</h2>
      <table class="table table-bordered" style="margin: auto;width:56%;">
        <thead>
          <tr>
            <!--    <th scope="col" style="width: 30px;">#</th> -->
            <th scope="col" style="width: 10px;">Total Policies</th>
            <th scope="col" style="width: 10px;">Title of PPA</th>
            <th scope="col" style="width: 130px;">Description</th>
            <th scope="col" style="width: 50px;">Total Cost</th>
            <th scope="col" style="width: 80px;">Fund Source</th>
            <!--   <th scope="col" style="width: 50px;">Points</th>  -->
            <th scope="col" colspan="2" class="text-center" style="width: 40px;">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "includes/config.php";
          $query = "SELECT * FROM `tbl15_42_food`ORDER BY `ID` DESC"; // SQL query to fetch all table data
          $result = mysqli_query($conn, $query); // sending the query to the database

          if (!$result) {
            die("Error: " . mysqli_error($conn)); // Output the error message for debugging
          }
          // Displaying all the data retrieved from the database using a while loop
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['ID'];
            $policies = $row['total_policies'];
            $title = $row['title'];
            $desc = $row['description'];
            $cost = $row['cost'];
            $fund = $row['fund'];

            echo "<tr>";
            echo "<td>{$policies}</td>";
            echo "<td>{$title}</td>";
            echo "<td>{$desc}</td>";
            echo "<td>Php {$cost}</td>";
            echo "<td>{$fund}</td>";
            //  echo "<td>$points</td>"; 


            echo "<td class ='text-center' style='width:40px'>
                          <a href='edit/edit15.4.2.php?update&ppa_id={$id}' style='width:30px;'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete15.4.2.php?delete={$id}' style='width:30px;color:red;'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";
          }
          ?>
        </tbody>
      </table>
    </div>
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