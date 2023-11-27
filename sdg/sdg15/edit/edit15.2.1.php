<!--============================================================================================= 
                                EDIT DATA RETRIEVED FROM DATABASE 
============================================================================================= -->
<?php
include "../includes/config.php";  //REPLACE THE "config.php" WITH YOUR ACTUAL CONNECTION TO DATABASE EX: conn.php
if (isset($_GET['sid'])) //the ppa_id came from 15.3.php which was declared as variable to edit record
{
    $id = $_GET['sid'];
}

// SQL query to select all the data from the table where researchid = $researchid
$query = "SELECT * FROM `tbl15_2_sustainable` WHERE `ID` = $id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {

    //the data inside [''] are the columns in db
    $total = $row['sustainable_practices'];
    $title = $row['ppa_title'];
    $desc = $row['ppa_description'];
    $cost = $row['total_cost'];
    $fund = $row['fund_source'];
}

//============================================================================================= 
//                     UPDATE DATA ONCE UPDATE BUTTON WAS CLICKED
//============================================================================================= -->         
//Processing form data when form is submitted/ when update button is clicked
if (isset($_POST['update'])) {
    $total = $_POST["sustainablePractices"];
    $title = strtoupper($_POST['ppaTitle']);
    $desc = strtoupper($_POST['ppaDescription']);
    $cost = $_POST['totalCost'];
    $fund = strtoupper($_POST['fundSource']);

    // SQL query to update the data in user table where the total_number = $ppa_id 
    $query = "UPDATE `tbl15_2_sustainable` SET   `sustainable_practices` = '{$total}', `ppa_title` = '{$title}', `ppa_description` = '{$desc}', `total_cost` = '{$cost}', `fund_source` = '{$fund}'
         WHERE `ID`= $id";
    $update = mysqli_query($conn, $query);
    $successMessage = "You have successfully Updated data";
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

            <fieldset>
                <legend>Sustainable Practices Details</legend>

                <div class="form-group"><i class="fa fa-user"></i>
                    <label>Total number of sustainable practices implemented</label>
                    <input type="number" class="form-control" name="sustainablePractices" required value="<?php echo htmlspecialchars($total); ?>">
                </div>

                <div class="form-group"><i class="fa fa-bookmark"></i>
                    <label>Title of the PPA</label>
                    <input type="text" class="form-control" name="ppaTitle" required value="<?php echo htmlspecialchars($title); ?>">
                </div>

                <div class="form-group">
                    <label>Short Description of the PPA</label>
                    <textarea class="form-control" name="ppaDescription" rows="4" required><?php echo htmlspecialchars($desc); ?></textarea>
                </div>


                <div class="form-group"><i class="fa fa-dollar"></i>
                    <label>Total Cost</label>
                    <input type="number" step="0.01" class="form-control" name="totalCost" required value="<?php echo htmlspecialchars($cost); ?>">
                </div>

                <div class="form-group"><i class="	fa fa-group"></i>
                    <label>Fund Source</label>
                    <input type="text" class="form-control" name="fundSource" required value="<?php echo htmlspecialchars($fund); ?>">
                </div>
            </fieldset>

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
            <button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../15.2.1.php';">
                <i class="fa fa-times-circle"></i> Cancel
            </button>
            <br><br>

        </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>