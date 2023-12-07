<!--============================================================================================= 
                                EDIT DATA RETRIEVED FROM DATABASE 
============================================================================================= -->


<?php
include "../includes/config.php"; //REPLACE THE "config.php" WITH YOUR ACTUAL CONNECTION TO DATABASE EX: conn.php

if (isset($_GET['outreach_id'])) {
    $outreach_id = $_GET['outreach_id'];
}

// SQL query to select all the data from the table where outreach_id = $outreach_id
$query = "SELECT * FROM `tbl434_outreach` WHERE `ID` = $outreach_id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {

    //the data inside [''] are the columns in db
    $title = $row['title'];
    $description = $row['description'];
    $cost = $row['cost'];
    $fund = $row['fund'];
}
  //============================================================================================= 
    //                     UPDATE DATA ONCE UPDATE BUTTON WAS CLICKED
//============================================================================================= --> 
//Processing form data when form is submitted/ when update button is clicked
if (isset($_POST['update'])) {
    $title = strtoupper($_POST['title']);
    $description = strtoupper($_POST['description']);
    $cost = $_POST['cost'];
    $fund = strtoupper($_POST['fund']);

    // SQL query to update the data in user table where the ID = $outreach_id 
    $query = "UPDATE `tbl434_outreach` SET `title` = '{$title}', `description` = '{$description}', `cost` = '{$cost}', `fund` = '{$fund}' WHERE `ID`= $outreach_id";
    $update = mysqli_query($conn, $query);
    $successMessage = "You have successfully Updated data";
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
        .card {   
            margin-left: 350px;
            margin-right: 350px;
            margin-bottom: 50px;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0px 20px 20px rgba(0.1, 0.1, 0.1, 0.1);
        }

        .form-group {
            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 10px;
        }

        h3 {
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
    <!--============================================================================================= 
                              FORM TO EDIT DATA 
============================================================================================= -->
    <div class="card">
        <form method="POST">

            <h3 class="h3text" style="color: red; font-weight: bolder">Update Information</h3><br>

            <div class="form-group"><i class="fa fa-bookmark"></i>
                <label for="title" class="text-center ">Title of the PPA</label>
                <textarea class="form-control" id="title" name="title" rows="3" value="" required><?php echo $title ?></textarea>
            </div>

            <div class="form-group"><i class="fa fa-edit"></i>
                <label for="description">Short description of the PPA</label>
                <textarea class="form-control" id="description" name="description" rows="5" value="" required><?php echo $description ?></textarea>
            </div>

            <div class="form-group"><i class="	fa fa-dollar"></i>
                <label for="cost">Total cost</label>
                <input type="number" class="form-control" id="" name="cost" value="<?php echo $cost ?>" required>
            </div>

            <div class="form-group"><i class="fa fa-group"></i>
                <label for="fund">Fund source</label>
                <input type="text" class="form-control" id="" name="fund" value="<?php echo $fund ?>" required>
            </div><br>

            <button type="submit" class="btn btn-primary mt-6 mb-3" name="update"><i class="far fa-edit"></i> Update</button>
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
            <button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../4.3.4.php';">
                <i class="fa fa-times-circle"></i> Cancel
            </button>
            <br><br>

        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
