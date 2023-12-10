<!--============================================================================================= 
                      INSERT DATA TO DB ONCE SUBMIT BUTTON WAS CLICKED
============================================================================================= -->
<?php
if (isset($_POST['submit'])) {
  // Get form data
  $firstgen = $_POST['firstgen'];
  $firstyear = $_POST['firstyear'];
  $firstgenfirstyear = $_POST['firstgenfirstyear'];

  include "includes/config.php";  // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE ex: conn.php


  // SQL query to insert data
  $sql = "INSERT INTO `tbl44_firstgen` ( `firstgen`, `firstyear`, `firstgenfirstyear`) 
  VALUES ('$firstgen', '$firstyear', '$firstgenfirstyear')";

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
  <title>SDG 4.3.4 | Educational outreach activities ... (extension activities) </title>

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
    margin-left: 250px; /* Adjust this value to your preferred margin */
  font-family: Arial, Helvetica, sans-serif;

    }
p{
    margin: 20px;
    font-size: 16px;
}
h2.h2head {
    flex: 1; /* Allow h2 to grow to take available space */
  margin-top: 0;
  background-color: #C31F33;
  color: #fff;
  padding: 10px;
 
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
.h3table{
  margin-left: 280px;
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
    font-size: 14px;
    font-weight: bolder;
   margin-left: 35px; 
}
.h3table{
  margin: 10px auto;
    font-size: 20px;
   margin-left: 20px;
}
.title{
  margin: 10px auto;
    font-size: 20px;
   margin-left: 20px;
}

}

</style>

<body>
  <?php include('sidebar.php'); ?>
<!--============================================================================================= 
                                  START OF HEADER POINTING SYSTEM 
============================================================================================= -->

  <div class="main"style="background-color:#C31F33;">
    <h2 class="h2head">SDG 4 QUALITY EDUCATION</h2>
    <div class="input-container">
      <p>Points</p>

      <?php
      include "includes/config.php";  // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE ex: conn.php
      $query = "SELECT *  FROM `tbl44_firstgen`"; // SQL query to fetch all table data
      $result = mysqli_query($conn, $query); // sending the query to the database

      $totalPoints = 0;

      while ($row = mysqli_fetch_assoc($result)) {
        $firstgen = $row['firstgen'];
        $firstyear = $row['firstyear'];
        $firstgenfirstyear = $row['firstgenfirstyear'];

        //assign data to variables
        $first_year = $firstyear;
        $first_gen = $firstgen;
        $firstgen_firstyear = $firstgenfirstyear;

        $percent = $firstgen_firstyear/  $first_year *100;

        // calculate points by dividing total number of PPAs by 2 and multiply by 5
        $points = ($percent / 10* 25);


        // Add the points  to the total points
        $totalPoints += $points;
      }
      ?>

      <input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 25); ?>" readonly>
    </div>
  </div>

 <!--============================================================================================= 
                                  END OF HEADER POINTING SYSTEM 
 ============================================================================================= -->

  <div class="content">
    <br>
    <h3 class="text-center">4.4 Proportion of first-generation students</h3>

 
    <!--============================================================================================= 
                                  START OF FORM
============================================================================================= -->
  <div class="card">
    <div class="contentform">
      <form method="POST">
      <div class="form-group"><i class="fa fa-dollar"></i>
          <label for="cost">Total number of first year students</label>
          <input type="number" class="form-control" id="" name="firstyear" required>
        </div>
      <div class="form-group"><i class="fa fa-dollar"></i>
          <label for="cost">Total number of first-generation students</label>
          <input type="number" class="form-control" id="firstgen" name="firstgen" required>
        </div>
        <div class="form-group"><i class="	fa fa-group"></i>
          <label for="fund">Total number of first-generation students in first year level</label>
          <input type="number" class="form-control" id="fund" name="firstgenfirstyear" required>
        </div>
     <!--   <div class="form-group"><i class="fa fa-dollar"></i>
          <label for="cost">Percentage of the student population are first-generation students</label>
          <input type="number" class="form-control" id="cost" name="percentagefirstgen" required>
        </div>

        <div class="form-group"><i class="	fa fa-group"></i>
          <label for="fund"> Percnetage of first year students are first-generation students</label>
          <input type="number" class="form-control" id="fund" name="fund" required>
        </div>
    -->
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
                        START OF TABLE/ DISPLAY ALL RECORDS FROM DATABASE
============================================================================================= -->
  <div class="table-container">
    <h2 class="h3table">Proportion of first-generation students</h2>
    <table class="table table-bordered" style="margin: auto;width:56%;">
      <thead>
          <th scope="col" style="width: 60px;">first year</th>
          <th scope="col" style="width: 100px;">first generation</th>
          <th scope="col" style="width: 150px;">first-generation students in first year</th>
          <th scope="col" colspan="2" class="text-center" style="width: 60px;">Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
        include "includes/config.php";  // CHANGE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE ex: conn.php
        $query = "SELECT * FROM `tbl44_firstgen`ORDER BY `ID` DESC"; // SQL query to fetch all table data
        $result = mysqli_query($conn, $query); // sending the query to the database

        if (!$result) {
          die("Error: " . mysqli_error($conn)); // Output the error message for debugging
        }
        // Displaying all the data retrieved from the database using a while loop
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['ID'];
          $firstgen = $row['firstgen'];
          $firstyear = $row['firstyear'];
          $firstgenfirstyear = $row['firstgenfirstyear'];
  
          //assign data to variables
          $first_year = $firstyear;
          $first_gen = $firstgen;
          $firstgen_firstyear = $firstgenfirstyear;
  
          $percentfirstyearfirstgen = $firstgen_firstyear/  $first_year *100;
          $percentfirstgen = $first_gen/  $first_year *100;
         

          echo "<tr>";
          echo "<td>{$first_year} Students</td>";
          echo "<td>{$first_gen} Students ($percentfirstgen%)</td>";
          echo "<td> {$firstgen_firstyear} Students ($percentfirstyearfirstgen%)</td>";

          echo "<td class ='text-center' style='width:100px'>
                          <a href='edit/edit4.4.php?update&stud_id={$id}' style='width:45px;'>
                              <i class='fa fa-edit fa-lg'></i> 
                          </a>
                          <a href='delete/delete4.4.php?delete={$id}' style='width:45px;color:red;'>
                          <i class='fa fa-trash fa-lg'></i>
                      </a>
                      </td>";
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
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
