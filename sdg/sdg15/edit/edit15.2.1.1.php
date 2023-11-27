<!--============================================================================================= 
                                EDIT DATA RETRIEVED FROM DATABASE 
============================================================================================= -->
<?php
include "../includes/config.php"; // REPLACE THIS WITH YOUR ACTUAL CONNECTION TO DATABASE EX: conn.php

// Initialize variables to prevent undefined variable warnings
$id = $totalStudents = $maleGardening = $femaleGardening = $maleVertical = $femaleVertical = '';

if (isset($_GET['studid'])) {
    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['studid']);
    $query = "SELECT * FROM `tbl15_2_student` WHERE `ID` = '$id'";
    $result = mysqli_query($conn, $query);

    // Check if a row was found
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Assign fetched values to variables
        $totalStudents = $row['total_students'];
        $maleGardening = $row['mgardening'];
        $femaleGardening = $row['fgardening'];
        $maleVertical = $row['mvertical'];
        $femaleVertical = $row['fvertical'];
    } else {
        $errorMessage = "Failed to update data: " . mysqli_error($conn);
    }
}

if (isset($_POST['update'])) {
    // Sanitize and validate input before using in SQL query
    $totalStudents = mysqli_real_escape_string($conn, $_POST['totalStudents']);
    $maleGardening = mysqli_real_escape_string($conn, $_POST['maleSpaceForGardening']);
    $femaleGardening = mysqli_real_escape_string($conn, $_POST['femaleSpaceForGardening']);
    $maleVertical = mysqli_real_escape_string($conn, $_POST['maleSpaceForVerticalGardening']);
    $femaleVertical = mysqli_real_escape_string($conn, $_POST['femaleSpaceForVerticalGardening']);

    // SQL query to update the data in tbl15_2_student
    $query = "UPDATE `tbl15_2_student` SET `total_students` = '$totalStudents', `mgardening` = '$maleGardening', `fgardening` = '$femaleGardening', `mvertical` = '$maleVertical', `fvertical` = '$femaleVertical' WHERE `ID`= '$id'";
    
    $update = mysqli_query($conn, $query);
    if ($update) {
        $successMessage = "You have successfully updated data";
    } else {
        // You might want to display an error message or log the error
        $errorMessage = "Failed to update data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>15.2.1 Measures That Promote Sustainable Land Practices</title>


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
            margin-bottom: 50px;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0px 20px 20px rgba(0.1, 0.1, 0.1, 0.1);
            width: auto;
            height: auto;
            padding-left: 30px;
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

        .contentform {
            margin-top: 30px;
            margin-left: 50px;
            margin-bottom: 30px;
            justify-content: center;
            align-items: center;

        }

        .form-control {
            margin-right: 30px;
            display: block;
            width: 88%;
            height: 30px;
        }

        @media (min-width: 576px) {
            .card {
                margin-left: auto;
                margin-right: auto;
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .card {
                max-width: 700px;
            }
        }

        @media (min-width: 792px) {
            .card {
                max-width: 700px;
            }
        }

        @media (min-width: 1200px) {
            .card {
                max-width: 700px;
            }
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

            <div class="form-group">
                <label class="text-center">Total number of students</label>
                <input type="number" class="form-control" name="totalStudents" required value="<?php echo $totalStudents ?>">
            </div>

            <fieldset>
                <legend>Gardening Space</legend>

                <div class="form-group">
                    <label>Male students with available space for gardening</label>
                    <input type="number" class="form-control" name="maleSpaceForGardening" required value="<?php echo $maleGardening ?>">
                </div>

                <div class="form-group">
                    <label>Female students with available space for gardening</label>
                    <input type="number" class="form-control" name="femaleSpaceForGardening" required value="<?php echo $femaleGardening ?>">
                </div>
            </fieldset>

            <fieldset>
                <legend>Vertical Gardening</legend>

                <div class="form-group">
                    <label>Male students with available space for vertical gardening</label>
                    <input type="number" class="form-control" name="maleSpaceForVerticalGardening" required value="<?php echo $maleVertical ?>">
                </div>

                <div class="form-group">
                    <label>Female students with available space for vertical gardening</label>
                    <input type="number" class="form-control" name="femaleSpaceForVerticalGardening" required value="<?php echo $femaleVertical ?>">
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary mt-6 mb-3" name="update"><i class="far fa-edit"></i>Update</button>
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
            <button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../15.2.1.1.php';">
                <i class="fa fa-times-circle"></i> Cancel
            </button>
            <br><br>

        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>