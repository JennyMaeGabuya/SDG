<?php 
$percentage = 0;
if (isset($_POST['confirm'])) {
  $lettotal = $_POST['lettotal'];
  $letmale = $_POST['letmale'];
  $letfemale = ($_POST['letfemale']);

  $bsedtotal = $_POST['bsedtotal'];
  $bsedmale = $_POST['bsedmale'];
  $bsedfemale = ($_POST['bsedfemale']);

  $beedtotal = $_POST['beedtotal'];
  $beedmale = $_POST['beedmale'];
  $beedfemale = ($_POST['beedfemale']);

  $bpedtotal = $_POST['bpedtotal'];
  $bpedmale = $_POST['bpedmale'];
  $bpedfemale = ($_POST['bpedfemale']);

  $btledtotal = $_POST['btledtotal'];
  $btledmale = $_POST['btledmale'];
  $btledfemale = ($_POST['btledfemale']);


  //this code will calculate total passer for each program
  $bsedtotal= $bsedmale + $bsedfemale;
  $beedtotal= $beedmale + $beedfemale;
  $bpedtotal= $bpedmale + $bpedfemale;
  $btledtotal= $btledmale + $btledfemale;
//calculate the total passer
  $total =$bsedtotal + $beedtotal+$bpedtotal+ $btledtotal;
  //calculate all male passer in all program
    $maletotal=$bsedmale + $beedmale+ $bpedmale +$btledmale ;
    //calculate all female passer in all program
    $femaletotal=$bsedfemale + $beedfemale+ $bpedfemale +$btledfemale ;

    
    //calculate the percentage of grad who acquired licenae and teaching qualification
    //still not sure about these
    $percentage=(($maletotal + $femaletotal) / $total) * 100 ;
 $percentage = ($total > 0) ? (($maletotal + $femaletotal) / $total) * 100 : 0;


}

if (isset($_POST['submit'])) {
  // Get form data
  $lettotal = $_POST['lettotal'];
  $letmale = $_POST['letmale'];
  $letfemale = ($_POST['letfemale']);

  $bsedtotal = $_POST['bsedtotal'];
  $bsedmale = $_POST['bsedmale'];
  $bsedfemale = ($_POST['bsedfemale']);

  $beedtotal = $_POST['beedtotal'];
  $beedmale = $_POST['beedmale'];
  $beedfemale = ($_POST['beedfemale']);

  $bpedtotal = $_POST['bpedtotal'];
  $bpedmale = $_POST['bpedmale'];
  $bpedfemale = ($_POST['bpedfemale']);

  $btledtotal = $_POST['btledtotal'];
  $btledmale = $_POST['btledmale'];
  $btledfemale = ($_POST['btledfemale']);

  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl422_let` (`let total number`, `letmale`, `letfemale`, `bsed total number`, `bsedmale`, `bsedfemale`, `beed total number`, `beedmale`, `beedfemale`, `bped total number`, `bpedmale`, `bpedfemale`, `btled total number`, `btledmale`, `btledfemale`) 
  VALUES ('$lettotal', '$letmale', '$letfemale','$bsedtotal', '$bsedmale', '$bsedfemale','$beedtotal', '$beedmale', '$beedfemale','$bpedtotal', '$bpedmale', '$bpedfemale','$btledtotal', '$btledmale', '$btledfemale')";

  if ($conn->query($sql) === TRUE) {
      // The research was successfully entered
      $successMessage = "You have successfully entered data";
  } else {
      // There was an error in the SQL query
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the connection
  $conn->close();



  include "includes/config.php";

  // SQL query to insert data
  $sql = "INSERT INTO `tbl422_let` (`let total number`, `letmale`, `letfemale`, `bsed total number`, `bsedmale`, `bsedfemale`, `beed total number`, `beedmale`, `beedfemale`, `bped total number`, `bpedmale`, `bpedfemale`, `btled total number`, `btledmale`, `btledfemale`) 
  VALUES ('$lettotal', '$letmale', '$letfemale','$bsedtotal', '$bsedmale', '$bsedfemale','$beedtotal', '$beedmale', '$beedfemale','$bpedtotal', '$bpedmale', '$bpedfemale','$btledtotal', '$btledmale', '$btledfemale')";

  if ($conn->query($sql) === TRUE) {
      // The research was successfully entered
      $successMessage = "You have successfully entered data";

      //after alert remove all the data to insert new data
      $lettotal = " ";
      $letmale = " ";
      $letfemale = "";
    
      $bsedtotal = "";
      $bsedmale = "";
      $bsedfemale = "";
    
      $beedtotal ="";
      $beedmale = "";
      $beedfemale = "";
    
      $bpedtotal = "";
      $bpedmale = "";
      $bpedfemale = "";
    
      $btledtotal = "";
      $btledmale = "";
      $btledfemale = "";

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
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: #FCF5ED;
  display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #F4BF96;
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
    margin-left: 300px;
    margin-right: 80px;
    margin-bottom: 70px;
    margin-top: 20px;
    height: 950px;

  }
  .content>p{
    text-align: justify;
    justify-content: justify-content;
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
  /* remove muna pic 
.image{
  width: 50px;
  height: 50px;
}
  */
  .table-container{
    margin-left: 300px;
    margin-right: 50px;
    width:73%;
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

<!-- START OF HEADER POINTING SYSTEM -->
<div class="main">
  <h2>SDG 4 QUALITY EDUCATION</h2>
  <div class="input-container">
    <p>Points</p>

    <?php
    // Initializing total points    
     $totalPoints = 0;

    if ($percentage >=70){
      $Points = 5;
    }
    else{
      $Points = 0;
    }
    $totalPoints += $Points;
    
    ?>

<input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 5); ?>" readonly>  
</div>
</div>

<!-- END OF HEADER POINTING SYSTEM -->

  <div class="content">
    <br>
    <h3>4.2.2 Proportion of graduates with teaching qualifications to 
teach at primary level</h3>
  <p>This is the total headcount number of graduates at all levels from your 
institution who gained a qualification that entitled them to teach at 
primary school level.</p>
    <!--remove muna pic 
    <div class="image" style="width: 50px;"style="height: 50px;">
            <img src="img/rs.png" alt="Image">
        </div>
-->

  </div>
 <div class="card">
<div class="contentform">
  <form method="POST" >

    <!-- FOR Total number of LET passers -->
   <p><?php echo $percentage?>% of graduates who acquired a license have teaching 
qualifications to teach at primary level.</p>
    <div class="mb-2 mt-2"><i class="fa fa-search"></i>
      <label for="total_number" class="text-center ">Total number of LET passers</label>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="male">Male</label>
      <input type="number" class="form-control" id="letmale" name="letmale"placeholder="Male" value="<?php echo $maletotal ?>"  readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="female">Female</label>
      <input type="number" class="form-control" id="letfemale" name="letfemale"placeholder="female" value="<?php echo $femaletotal ?>"  readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="total">Total number of LET passers</label>
      <input type="number" class="form-control" id="lettotal" name="lettotal" placeholder="total" value="<?php echo $total ?>" readonly>
    </div>
  </div>
  <div class="fields">
    <p><br></p>
  </div>
  <br>
   <!-- FOR Total number of LET passers -->
  <div class="mb-2 mt-2 "><i class="fa fa-search"></i>
      <label for="total_number" class="text-center">Total number of BSED LET passers</label>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="male">Male</label>
      <input type="number" class="form-control" id="male" name="bsedmale"placeholder="Male" value="<?php echo $bsedmale ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="female">Female</label>
      <input type="number" class="form-control" id="female" name="bsedfemale"placeholder="female" value="<?php echo $bsedfemale ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="total">Total number of LET passers</label>
      <input type="number" class="form-control" id="bsedtotal" name="bsedtotal" value="<?php echo $bsedtotal?>" placeholder="total" readonly>
    </div>
  </div>
  <div class="fields">
    <p><br></p>
  </div>
  <br>
   <!-- FOR Total number of LET passers -->
  <div class="mb-2 mt-2"><i class="fa fa-search"></i>
      <label for="total_number" class="text-center">Total number of BEED LET passers</label>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="male">Male</label>
      <input type="number" class="form-control" id="male" name="beedmale"placeholder="Male" value="<?php echo $beedmale ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="female">Female</label>
      <input type="number" class="form-control" id="female" name="beedfemale"placeholder="female" value="<?php echo $beedfemale ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="total">Total number of LET passers</label>
      <input type="number" class="form-control" id="beedtotal" name="beedtotal" value="<?php echo $beedtotal ?>" placeholder="total" readonly>
    </div>
    <p><br></p>
    <div class="fields">
    <p><br></p>
  </div>
  <br>
     <!-- FOR Total number of LET passers -->
  
  <div class="mb-2 mt-2"><i class="fa fa-search"></i>
      <label for="total_number" class="text-center">Total number of BPED LET passers</label>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="male">Male</label>
      <input type="number" class="form-control" id="male" name="bpedmale"placeholder="Male" value="<?php echo $bpedmale ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="female">Female</label>
      <input type="number" class="form-control" id="female" name="bpedfemale"placeholder="female"value="<?php echo $bpedfemale ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="total">Total number of LET passers</label>
      <input type="number" class="form-control" id="bpedtotal" name="bpedtotal" placeholder="total" value="<?php echo $bpedtotal ?>" readonly>
    </div>
    <p><br></p>
    <div class="fields">
    <p><br></p>
  </div>
  <br>
     <!-- FOR Total number of LET passers -->
  <div class="mb-2 mt-2"><i class="fa fa-search"></i>
      <label for="total_number" class="text-center">Total number of BTLED LET passers</label>
    </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="male">Male</label>
      <input type="number" class="form-control" id="male" name="btledmale"placeholder="Male" value="<?php echo $btledmale ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="female">Female</label>
      <input type="number" class="form-control" id="female" name="btledfemale"placeholder="female"value="<?php echo $btledfemale ?>" required>
    </div>
    <div class="form-group col-md-4">
      <label for="total">Total number of LET passers</label>
      <input type="number" class="form-control" id="btledtotal" name="btledtotal" value="<?php echo $btledtotal ?>" placeholder="total" readonly>
    </div>
  </div>
  <br> <br>
     <!-- FOR Total number of LET passers -->
    <br>
    <div class="button-container">
    <button type="submit" class="btn btn-warning mb-3" id="confirm" name="confirm" >
        <i class="fa fa-check-circle"></i>
    </button>
    <p class="confirmation-text">Please click the Confirm button first before submitting the form. Thank you!</p>
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

