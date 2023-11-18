
<?php
include "../includes/config.php";
if(isset($_GET['passer_id']))
    {
      $passer_id = $_GET['passer_id']; 
    }
    
      // SQL query to select all the data from the table where passerid = $passer_id
     $query = "SELECT * FROM `tbl422_let` WHERE `ID` = $passer_id";
     $result= mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) { 
          
        //the data inside [''] are the columns in db
                $lettotal = $row['let total number'];
                $bsed = $row['bsed total number'];
                $beed = $row['beed total number'];
                $bped = $row['bped total number'];
                $btled = $row['btled total number'];
     }
        
         
            
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    $lettotal = $_POST['lettotal'];
    $bsedtotal  = $_POST['bsedtotal'];
    $beedtotal  = $_POST['beedtotal'];
    $bpedtotal  = $_POST['bpedtotal'];
    $btledtotal  = $_POST['btledtotal'];
    

      // SQL query to update the data in user table where the id = $userid 
        $query ="UPDATE `tbl422_let` SET   `let total number` = '{$lettotal}', `bsed total number` = '{$bsedtotal}', `beed total number` = '{$beedtotal}',`bped total number` = '{$bpedtotal}',`btled total number` = '{$btledtotal}' WHERE ID= $passer_id";
        $update = mysqli_query($conn, $query);
        $successMessage = "You have successfully Updated data";
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 4| 4.2.2 Proportion of graduates with teaching qualifications to 
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
.card{
    margin-left: 350px;
    margin-right: 350px;
    margin-bottom: 50px;
    margin-top: 20px;
    background-color: white;
    box-shadow: 0px 20px 20px rgba(0.1, 0.1, 0.1, 0.1);
  }
.form-group{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 10px;
}
h3{
    text-align: center;
}
.btn-primary {
    margin-left: 50px;
}
.btn-danger {
    margin-left: 5px;
}
</style>
</head>
<body>
    
<div class="card"> 
<form method="POST" >

<!-- FOR Total number of LET passers -->
<!--   <p><?php echo $percentage?>% of graduates who acquired a license have teaching 
qualifications to teach at primary level.</p> -->
<h3 class="h3text">Update Information</h3> <br>
<div class="form-group"><i class="fa fa-bar-chart"></i>
  <label for="total_number" class="text-center ">Total number of LET passers</label>
  <input type="number" class="form-control" id="lettotal" name="lettotal" value="<?php echo $lettotal?>"required>
</div>
<div class="form-group"><i class="fa fa-area-chart"></i>
  <label for="total">Total number of BSED LET passers</label>
  <input type="number" class="form-control" id="bsedtotal" name="bsedtotal" value="<?php echo $bsed?>" required>
</div>
<div class="form-group"><i class="	fa fa-book"></i>
  <label for="total">Total number of BEED LET passers</label>
  <input type="number" class="form-control" id="beedtotal" name="beedtotal" value="<?php echo $beed?>" required>
</div>
<div class="form-group"><i class="fa fa-drivers-license"></i>
  <label for="total">Total number of BPED passers</label>
  <input type="number" class="form-control" id="bpedtotal" name="bpedtotal" value="<?php echo $bped?>" required>
</div>
<div class="form-group "><i class="fa fa-graduation-cap"></i>
  <label for="total">Total number of BTLED passers</label>
  <input type="number" class="form-control" id="btledtotal" name="btledtotal" value="<?php echo $btled?>" required>
</div>
<div>
<button type="submit" class="btn btn-primary  mb-3" id="update" name="update" >
  <i class="fa fa-send"></i>Update</button>
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
<button type="reset" class="btn btn-danger mb-3" name="cancel" onclick="window.location.href='../4.2.2.php';">
    <i class="fa fa-times-circle"></i> Cancel</button>
</div><br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
