
<?php
include "includes/config.php";
if(isset($_GET['ppa_id'])) //the ppa_id came from 4.3.1.php which was declared as variable to edit record
    {
      $ppa_id = $_GET['ppa_id']; 
    }
    
      // SQL query to select all the data from the table where researchid = $researchid
     $query = "SELECT * FROM `tbl431_resources` WHERE `total_number` = $ppa_id";
     $result= mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) { 
          
        //the data inside [''] are the columns in db
        $title = $row['title'];
        $desc = $row['description'];
        $cost = $row['cost'];
        $fund = $row['fund'];
       
     }
        
         
            
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $cost = $_POST['cost'];
    $fund = $_POST['fund'];

      // SQL query to update the data in user table where the total_number = $ppa_id 
        $query ="UPDATE `tbl431_resources` SET   `title` = '{$title}', `description` = '{$desc}', `cost` = '{$cost}',`fund` = '{$fund}' WHERE `total_number`= $ppa_id";
        $update = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert(' data updated successfully!')</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
<title>SDG 4.1 | Research on Early Years ... Education</title>
=======
<title>SDG 4.3.1 | Public resources (lifelong learning) </title>
>>>>>>> 92e1f9257e57690bfd6756561c3867467d9812f0

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
<form method="POST">
 
<<<<<<< HEAD
    <h3 class="h3text">Update Information</h3>
=======
    <h3 class="h3text" style="color: red; font-weight: bolder">Update Information</h3>
    
>>>>>>> 92e1f9257e57690bfd6756561c3867467d9812f0
    <div class="form-group"><i class="fa fa-bar-chart"></i>
      <label for="title" class="text-center ">Title of the PPA</label>
      <textarea class="form-control" id="title" name="title" rows="3" value="" required><?php echo $title ?></textarea>
    </div>
    <div class="form-group"><i class="fa fa-area-chart"></i>
      <label for="desc">Short description of the PPA</label>
      <textarea class="form-control" id="desc" name="desc" rows="5" value="" required><?php echo $desc ?></textarea>
    </div>
    <div class="form-group"><i class="	fa fa-book"></i>
      <label for="cost">Total cost</label>
      <input type="number" class="form-control" id="" name="cost" value="<?php echo $cost ?>" required>
    </div>
    <div class="form-group"><i class="fa fa-drivers-license"></i>
      <label for="fund">Fund source</label>
      <input type="text" class="form-control" id="" name="fund" value="<?php echo $fund ?>" required>
    </div>
   <button type="submit" class="btn btn-primary mt-6 mb-3" name="update"><i class="far fa-edit"></i>Update</button>
 
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='4.3.1.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>