<?php
include "../includes/config.php";

if (isset($_GET['licensure_id'])) {
    $licensure_id = $_GET['licensure_id'];
}

// SQL query to select all the data from the table where licensure_id = $licensure_id
$query = "SELECT * FROM `tbl421_licensure` WHERE `ID` = $licensure_id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {

    //the data inside [''] are the columns in db
    $program = $row['Program'];
    $eligible_total = $row['EligibleTotal'];
    $took_exam = $row['TookExam'];
    $acquired = $row['Acquired'];
    $failed = $row['Failed'];
}

//Processing form data when form is submitted/ when update button is clicked
if (isset($_POST['update'])) {
    $program = $_POST['program'];
    $eligible_total = $_POST['eligible_total'];
    $took_exam = $_POST['took_exam'];
    $acquired = $_POST['acquired'];
    $failed = $_POST['failed'];

    // SQL query to update the data in user table where the id = $userid 
    $query = "UPDATE `tbl421_licensure` SET   `Program` = '$program', `EligibleTotal` = '$eligible_total', `TookExam` = '{$took_exam}',`Acquired` = '{$acquired}',`Failed` = '{$failed}' WHERE ID= $licensure_id";
    $update = mysqli_query($conn, $query);
    $successMessage = "You have successfully entered data";
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

            <h3 class="h3text" style="color: red; font-weight: bolder">Licensure Examination Statistics</h3><br>

            <div class="form-group"><i class="fa fa-book"></i>
                <label for="program">Program: </label>
                <input type="text" class="form-control" id="program" name="program" value="<?php echo $program ?>" required>
            </div>

            <div class="form-group"><i class="fa fa-search"></i>
                <label for="eligible_total">Total number of graduates who are eligible for licensure examination: </label>
                <input type="number" class="form-control" id="eligible_total" name="eligible_total" value="<?php echo $eligible_total ?>" required>
            </div>

            <div class="form-group"><i class="fa fa-user"></i>
                <label for="took_exam">Total number of graduates who take the licensure examination: </label>
                <input type="number" class="form-control" id="took_exam" name="took_exam" value="<?php echo $took_exam ?>" required>
            </div>

            <div class="form-group"><i class="fa fa-check"></i>
                <label for="acquired">Total number of graduates who acquired a license: </label>
                <input type="number" class="form-control" id="acquired" name="acquired" value="<?php echo $acquired ?>" required>
            </div>

            <div class="form-group"><i class="fa fa-lg fa-times"></i>
                <label for="failed">Total number of graduates who failed to pass the licensure examination: </label>
                <input type="number" class="form-control" id="failed" name="failed" value="<?php echo $failed ?>" required>
            </div>

            <br><button type="submit" class="btn btn-primary mt-6 mb-3" name="update"><i class="far fa-edit"></i> Update</button>
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
            <button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../4.2.1.php';">
                <i class="fa fa-times-circle"></i> Cancel
            </button>
            <br><br>

        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>