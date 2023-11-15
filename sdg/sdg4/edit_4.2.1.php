<?php
include "includes/config.php";

if (isset($_GET['eligible_id'])) {
    $eligible_id = $_GET['eligible_id'];
}

// SQL query to select all the data from the table where eligible_id = $eligible_id
$query = "SELECT * FROM `tbl421_eligible` WHERE `ID` = $eligible_id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {

    //the data inside [''] are the columns in db
    $total_number = $row['total_number'];
    $eligibleProgram = $row['program'];
    $eligibleMale = $row['male'];
    $eligibleFemale = $row['female'];
}

//Processing form data when form is submitted/ when update button is clicked
if (isset($_POST['update'])) {
    $total_number = $_POST['total_number'];
    $eligibleProgram = $_POST['eligibleProgram'];
    $eligibleMale = $_POST['eligibleMale'];
    $eligibleFemale = $_POST['eligibleFemale'];

    // SQL query to update the data in user table where the id = $userid 
    $query = "UPDATE `tbl421_eligible` SET   `total_number` = '{$total_number}', `program` = '{$eligibleProgram}', `male` = '{$eligibleMale}',`female` = '{$eligibleFemale}' WHERE ID= $eligible_id";
    $update = mysqli_query($conn, $query);
    echo "<script type='text/javascript'>alert(' data updated successfully!')</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDG 4.2.1 | Graduates Statistics</title>

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

    <div class="card">
        <form method="POST">

            <h3 class="h3text">Eligible Graduates</h3><br>

                <div class="form-group"><i class="fa fa-search"></i>
                    <label for="total_number">Total number of graduates who are eligible for licensure examination</label>
                    <input type="number" class="form-control" id="total_number" name="total_number" value="<?php echo $total_number ?>" required>
                </div>


                <div class="form-group"><i class="fa fa-user"></i>
                    <label for="eligibleProgram">Program</label>
                    <input type="text" class="form-control" id="eligibleProgram" name="eligibleProgram" value="<?php echo $eligibleProgram ?>" required>
                </div>

                <div class="form-group"><i class="fa fa-bookmark"></i>
                    <label for="eligibleMale">Total number of male graduates</label>
                    <input type="number" class="form-control" id="eligibleMale" name="eligibleMale" value="<?php echo $eligibleMale ?>" required>
                </div>

                <div class="form-group"><i class="fa fa-bar-chart"></i>
                    <label for="eligibleFemale">Total number of female graduates</label>
                    <input type="number" class="form-control" id="eligibleFemale" name="eligibleFemale" value="<?php echo $eligibleFemale ?>" required>
                </div>

                <br><button type="submit" class="btn btn-primary mt-6 mb-3" name="update"><i class="far fa-edit"></i>Update</button>

                <button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='4.1.php';">
                    <i class="fa fa-times-circle"></i> Cancel
                </button>
                <br><br>

        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>