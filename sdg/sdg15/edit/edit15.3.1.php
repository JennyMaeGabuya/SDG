<!--============================================================================================= 
                                EDIT DATA RETRIEVED FROM DATABASE 
============================================================================================= -->


<?php
include "../includes/config.php";//REPLACE THE "config.php" WITH YOUR ACTUAL CONNECTION TO DATABASE EX: conn.php

if (isset($_GET['totalnumber'])) {
    $event_id = $_GET['totalnumber'];
}

// SQL query to select all the data from the table where event_id = $event_id
$query = "SELECT * FROM tbl15_3_1_number WHERE totalnumber = $event_id";
$result = mysqli_query($conn, $query);

// Check if the record exists and retrieve 'evidence'
if ($row = mysqli_fetch_assoc($result)) {
    $evidence = $row['evidence'];

    if (isset($_POST['update'])) {
        // Update the 'evidence' field in the database
        $newEvidence = $_POST['evidence'];
        $updateQuery = "UPDATE tbl15_3_1_number SET evidence = '$newEvidence' WHERE totalnumber = $event_id";

        if (mysqli_query($conn, $updateQuery)) {
            $successMessage = "You have successfully updated the data";
        } else {
            $errorMessage = "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    $errorMessage = "No record found for the given ID";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDG 15.3.1 | Number of flora/fauna </title>

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

            <h3 class="h3text" style="color: rgb(86, 192, 43); font-weight: bolder">Update Information</h3><br>

            <div class="form-group"><i class="fa fa-bookmark"></i>
                <label for="evidence" class="text-center ">Evidence</label>
                <textarea class="form-control" id="evidence" name="evidence" rows="3" required><?php echo $evidence ?></textarea>
            </div>


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
            <button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../15.3.1.php';">
                <i class="fa fa-times-circle"></i> Cancel
            </button>
            <br><br>

        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
