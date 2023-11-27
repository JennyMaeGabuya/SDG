<!--============================================================================================= 
                      INSERT DATA TO DB ONCE SUBMIT BUTTON WAS CLICKED
============================================================================================= -->

<?php 
if (isset($_POST['submit'])) {
  // Get form data
  $lettotal = $_POST['lettotal'];
  $bsedtotal = $_POST['bsedtotal'];
  $beedtotal = $_POST['beedtotal'];
  $bpedtotal = $_POST['bpedtotal'];
  $btledtotal = $_POST['btledtotal'];

  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl422_let` (`let total number`, `bsed total number`, `beed total number`, `bped total number`, `btled total number`) 
  VALUES ('$lettotal','$bsedtotal','$beedtotal','$bpedtotal','$btledtotal')";

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
<title>SDG 4.2.2 |  Proportion of graduates with teaching qualifications to 
teach at primary level</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href= css/sidebar.css>
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
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #FCF5ED;
  display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #51C417;
    font-family:  Arial, Helvetica, sans-serif;
    font-weight:bolder;
      /* ==========================================just added */
}
.points{
    width: 60px;
    height: 40px;
    border-radius: 15px;
  }
  .h2head{
      margin-left: 200px;

    }
p{
    margin: 20px;
    font-size: 16px;
}
h2 {
    flex: 1; /* Allow h2 to grow to take available space */
  }

  .input-container {
    display: flex;
    align-items: center;
  }

  p {
    margin-right: 10px;
  }
  .content{
 /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #C31F33;
  margin-left: 80px;
  }
 
  .card{
    width: 70%;
    margin-left: 350px;
    font-size: 17px;
    margin-bottom: 50px;
    margin-top: 20px; 
    height:auto;
  }
  .content>p{
    text-align: justify;
    justify-content: justify-content;
    font-size: 17px;
  }
  .form-control{
    margin-right: 30px;
    display: block;
    width: 88%;
    height: 30px;
  }
  .form-row{

    height: 30px;
    
  }
  .contentform{
    margin-top: 30px;
    margin-left: 50px;
    margin-bottom:30px;
    justify-content: center;
    align-items: center;
    
  }
.btn{
    margin-bottom: 10px;

}

  .table-container{
    margin-right: 20px;
    width:70%;
    overflow-x: auto; 
    font-size: 10px;
  }
  .table{
    font-size: 14px;
  }
  .h3text{
    justify-content:center;
    
  }
  .points{
    box-shadow: grey;
  }
.fields{
    border-bottom: solid 1px #e9d6d6;
    margin-right: 25px;
}
/* css for confrim button */
.button-container {
        display: flex;
        align-items: center; /* Align items vertically */
    }

    .btn {
        margin-right: 10px; /* Adjust margin as needed */
    }

    .confirmation-text {
        margin: 0; /* Remove default margin for the paragraph */
    }

/* endddd */

/* ==========================================just added===================================================== */
/* Centering content and responsiveness */
.card {
  width: 55%; /* Adjust card width */
  margin: 60px auto; /* Center the card and provide space */
  font-size: 16px;
}

.table-container {
  width: 100%; /* Adjust table container width */
  margin: 20px auto; /* Center the table and provide space */
  overflow-x: auto; /* Enable horizontal scrolling on smaller screens if needed */
  font-size: 16px;
}

/* Media query for smaller screens */
@media only screen and (max-width: 768px) {
  .card {
    width: 90%; /* Adjust card width for smaller screens */
    margin: 10px auto; /* Adjust margin for smaller screens */
    font-size: 13px;
  }

  .table-container {
    width: 90%; /* Adjust table container width for smaller screens */
    margin: 10px auto;
    font-size: 13px;
  }
  .content{
 /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #C31F33;
  margin-left: 5px;
  }
  img{
    width:100%;
    margin-top: 60px;
    height:150px;
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
<div class="main" style="background-color:#C31F33;">
  <h2 class="h2head text-center">SDG 4 QUALITY EDUCATION</h2>
  <div class="input-container">
    <p>Points</p>

    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl422_let`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            $totalPoints = 0;

            while ($row = mysqli_fetch_assoc($result)) {
                $percentage = $row['percentage'];
               $percent= $percentage;

                // Check if the program is CTE and update points
                $points = 0;
                
                if ($percent >=70) {
                    $points += 5;
                }
                  else{
                    $points += 0;
                  }

                // Add the points  to the total points
                $totalPoints += $points;
            }
            ?>

<input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 5); ?>" readonly>  
</div>
</div>

<!--============================================================================================= 
                                  END OF HEADER POINTING SYSTEM 
 ============================================================================================= -->

  <div class="content">
    <br>
    <h3 class="text-center">4.2.2 Proportion of graduates with teaching qualifications to 
teach at primary level</h3>
  <p class="text-center">This is the total headcount number of graduates at all levels from your 
institution who gained a qualification that entitled <br>them to teach at 
primary school level.</p>



<!--============================================================================================= 
                                  START OF FORM
============================================================================================= -->
 <div class="card">
<div class="contentform">
  <form method="POST" >



<div class="form-group"><i class="fa fa-bar-chart"></i>
      <label for="total_number" class="text-center ">Total number of LET passers</label>
      <input type="number" class="form-control" id="lettotal" name="lettotal"required>
    </div>
    <div class="form-group"><i class="fa fa-area-chart"></i>
      <label for="total">Total number of BSED LET passers</label>
      <input type="number" class="form-control" id="bsedtotal" name="bsedtotal"  required>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="total">Total number of BEED LET passers</label>
      <input type="number" class="form-control" id="beedtotal" name="beedtotal" required>
    </div>
    <div class="form-group"><i class="fa fa-drivers-license"></i>
      <label for="total">Total number of BPED passers</label>
      <input type="number" class="form-control" id="bpedtotal" name="bpedtotal" required>
    </div>
    <div class="form-group "><i class="fa fa-graduation-cap"></i>
      <label for="total">Total number of BTLED passers</label>
      <input type="number" class="form-control" id="btledtotal" name="btledtotal" required>
  </div>
  <div>
    <button type="submit" class="btn btn-primary  mb-3" id="submit" name="submit" >
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
  <h2 class=" text-center">Graduate with qualification to teach at primary level</h2>           
  <table class="table table-bordered"style="margin: auto;width:56%;">
  <thead>
    <tr>
    <!--  <th scope="col" style="width: 30px;">#</th>  -->
      <th scope="col" style="width: 50px;">LET passers</th>
      <th scope="col" style="width: 50px;">BSED passers</th>
      <th scope="col" style="width: 50px;">BEED passers</th>
      <th scope="col" style="width: 50px;">BPED passers</th>
      <th scope="col" style="width: 50px;">BTLED passers</th>
      <th scope="col" style="width: 100px;">Graduates with license & can teach at primary level.</th>
      <th scope="col" style="width: 40px;">Points</th>
      <th scope="col"colspan="2" class ="text-center" style="width: 70px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";     // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE
            $query = "SELECT * FROM `tbl422_let`ORDER BY `ID` DESC"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['ID'];
                $lettotal = $row['let total number'];
                $bsedtotal = $row['bsed total number'];
                $beedtotal = $row['beed total number'];
                $bpedtotal = $row['bped total number'];
                $btledtotal = $row['btled total number'];
               
                 // Calculate percentages get the value from tbl4.2.1
                 $query ="SELECT SUM(`Acquired`) AS total FROM tbl421_licensure  WHERE `program`='CTE'" ;
                 
                // Execute the query
                $rslt = $conn->query($query);
                // Check if the query was successful
if ($rslt) {
  // Fetch the result into an associative array
  $row = $rslt->fetch_assoc();
  
  // Access the 'total' column from the result
  $acquiredTotal = $row['total'];
  $percentage = number_format(($lettotal/$acquiredTotal* 100),2);
  // Use $acquiredTotal in your update query for another table (tbl422_let in this example)
  $updateQuery = "UPDATE `tbl422_let` SET  `percentage` = '$percentage'";
  
  // Execute the update query
  $updateResult = $conn->query($updateQuery);
  
  if (!$updateResult) {
      echo "Error updating table: " . $conn->error;
  }

}
 if ($percentage >=70) {
                    $points = 5;
                }
                  else{
                    $points = 0;
                  }
               

                echo "<tr>";
             //   echo "<td>{$id}</td>";
                echo "<td>{$lettotal}</td>";
                echo "<td>{$bsedtotal}</td>";
                echo "<td>{$beedtotal}</td>";
                echo "<td>{$bpedtotal}</td>";
                echo "<td>{$btledtotal}</td>";
                echo "<td>{$percentage}% </td>";
                echo "<td>$points</td>"; 
            

                echo "<td class ='text-center' style='width:100px'>
                          <a href='edit/edit4.2.2.php?update&passer_id={$id}' style='width:45px;color:red;'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete4.2.2.php?delete={$id}' style='width:45px;color:red;'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";

            /*    echo "<td class='text-center'>
                          <a href='delete_4.1.php?delete={$id}' class='btn btn-danger'>
                              <i class='fa fa-trash'></i>
                          </a>
                      </td>";
                echo "</tr>"; 
                */
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

