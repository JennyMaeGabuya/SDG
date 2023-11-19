<!--============================================================================================= 
                      INSERT DATA TO DB ONCE SUBMIT BUTTON WAS CLICKED
============================================================================================= -->
<?php 
if (isset($_POST['submit'])) {
  // Get form data
  $totalstud = $_POST['totalstud'];
  $percent50above = $_POST['percent50above'];
  $policy = $_POST['policy'];
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $cost = $_POST['cost'];
  $fund = $_POST['fund'];

  include "includes/config.php"; // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE ex: conn.php


  // SQL query to insert data
  $sql = "INSERT INTO `tbl435_access` (`50above`, `50abovePercentage`, `totalaccess`, `title`, `description`, `cost`, `fund`) 
  VALUES ('$totalstud','$percent50above','$policy' ,'$title','$desc','$cost','$fund')";

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
<title>SDG 4.3.5 |  Lifelong learning access policy</title>

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
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #FCF5ED;
  display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #C31F33;
    font-family: Verdana, sans-serif;
    font-weight: bolder;
 
}
.points{
    width: 60px;
    height: 40px;
    border-radius: 15px;
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
    margin-left: 300px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #C31F33;
  }
 
  .card{
    margin-left: 350px;
    margin-right: 120px;
    margin-bottom: 70px;
    margin-top: 20px;
    height: auto;
    width: auto;

  }
  .content>p{
    text-align: justify;
    justify-content: justify-content;
  }
  .form-control{
    margin-right: 30px;
    display: block;
    width: 95%;
    height: 30px;
    margin-right: 30px;
  }
  .form-row{

    height: 30px;
    
  }

  .contentform{
    margin-top: 30px;
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom:30px;
    justify-content: center;
    align-items: center;
    
  }
.btn{
    margin-bottom: 10px;

}

  .table-container{
    margin-left: 350px;
    margin-right: 50px;
    width:64%;
    overflow-x: auto; 
  }
  .h3text{
    justify-content:center;
    margin-left: 300px;
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

</style>

<body>
<?php include('sidebar.php'); ?>


<!--============================================================================================= 
                                  START OF HEADER POINTING SYSTEM 
============================================================================================= -->
<div class="main">
  <h2>SDG 4 QUALITY EDUCATION</h2>
  <div class="input-container">
    <p>Points</p>

    <?php
include "includes/config.php";

$query = "SELECT COUNT(`totalaccess`) AS total_access FROM `tbl435_access`";
$result = mysqli_query($conn, $query);

$totalPoints = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $totalno = $row['total_access'];
    // calculate points by dividing total number of access policy by 1 
    $points = ($totalno / 1);
}

// Add the points to the total points
$totalPoints += $points;

$query = "SELECT COUNT(`title`) AS total_ppa FROM `tbl435_access`";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $ppa = $row['total_ppa'];
    // calculate points by dividing total number of access policy by 1 
    $points = ($ppa / 2 * 4);
}

// Add the points to the total points
$totalPoints += $points;


?>


<input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 5); ?>" readonly>  
</div>
</div>

<!--============================================================================================= 
                                  END OF HEADER POINTING SYSTEM 
 ============================================================================================= -->


  <div class="content">
    <br>
    <h3>4.3.5 Lifelong learning access policy</h3>
  <p>A policy that ensures that access to these activities is accessible to all,regardless of ethnicity, religion, disability, immigration <br>
   status or gender.</p>


  </div>
   <!--============================================================================================= 
                                  START OF FORM
============================================================================================= -->
 <div class="card">
<div class="contentform">
  <form method="POST" >



    <div class="form-group"><i class="fa fa-address-book-o"></i>
      <label for="cost">Total number of students who are 50 years old and above</label>
      <input type="number" class="form-control" id="" name="totalstud" >
    </div>
    <div class="form-group"><i class="	fa fa-bar-chart"></i>
      <label for="cost">Percentage of the student population aged 50 years old and above</label>
      <input type="number" class="form-control" id="" name="percent50above" placeholder="%" >
    </div>
    <div class="form-group"><i class="fa fa-line-chart"></i>
      <label for="cost">Total number of learning access policy</label>
      <input type="number" class="form-control" id="" name="policy" >
    </div>
    <hr style="border-color: grey; margin-left:0%;">
    <div class="form-group"><i class="fa fa-bookmark"></i>
      <label for="title" class="text-center ">Title of the PPA</label>
      <textarea class="form-control" id="title" name="title" rows="3" ></textarea>
    </div>
    <div class="form-group"><i class="fa fa-edit"></i>
      <label for="desc">Short description of the PPA</label>
      <textarea class="form-control" id="desc" name="desc" rows="5" ></textarea>
    </div>
    <div class="form-group"><i class="fa fa-dollar"></i>
      <label for="cost">Total cost</label>
      <input type="number" class="form-control" id="" name="cost" >
    </div>
    <div class="form-group"><i class="	fa fa-group"></i>
      <label for="fund">Fund source</label>
      <input type="text" class="form-control" id="" name="fund" >
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
  <h2>Public resources</h2>           
  <table class="table table-bordered">
  <thead>
    <tr>
  <!--    <th scope="col" style="width: 30px;">#</th> -->
     <th scope="col" style="width: 80px;">50 years old & above</th>
      <th scope="col" style="width: 30px;">Percentage</th>
      <th scope="col" style="width: 30px;">Policy</th>
      <th scope="col" style="width: 80px;">Title of PPA</th>
      <th scope="col" style="width: 100px;">Description</th>
      <th scope="col" style="width: 50px;">Total Cost</th>
      <th scope="col" style="width: 50px;">Fund Source</th>
   <!--   <th scope="col" style="width: 50px;">Points</th>  -->
      <th scope="col"colspan="2"  style="width: 50px;">Action</th>
    </tr>
  </thead>
    <tbody>
    <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl435_access` ORDER BY `ID` DESC"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            if (!$result) {
                die("Error: " . mysqli_error($conn)); // Output the error message for debugging
            }
            // Displaying all the data retrieved from the database using a while loop
            while ($row = mysqli_fetch_assoc($result)) {
             $id= $row['ID'];
              $totalstud = $row['50above'];
              $percent = $row['50abovePercentage'];
              $policy = $row['totalaccess'];
             $title = $row['title'];
             $desc = $row['description'];
              $cost = $row['cost'];
              $fund = $row['fund'];
    
                echo "<tr>";
                echo "<td>{$totalstud}</td>";
                echo "<td>{$percent}%</td>";
                echo "<td>{$policy}</td>"; 
                echo "<td>{$title}</td>";
                echo "<td>{$desc}</td>";
                echo "<td>Php {$cost}</td>";
                echo "<td>{$fund}</td>";
              //  echo "<td>$points</td>"; 
            

                echo "<td style='width:100px'>
                          <a href='edit/edit4.3.5.php?update&access_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete/delete4.3.5.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";

            /*    echo "<td class='text-center'>
                          <a href='delete4.3.1.php?delete={$id}' class='btn btn-danger'>
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

