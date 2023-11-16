<?php
if (isset($_POST['submit'])) {

    // Retrieve form data
    $program =  strtoupper($_POST['program']);
    $eligible_total = $_POST['eligible_total'];
    $took_exam = $_POST['took_exam'];
    $acquired = $_POST['acquired'];
    $failed = $_POST['failed'];

    include "includes/config.php";

    // Insert data into the database
    $sql = "INSERT INTO `tbl421_licensure`(Program, EligibleTotal, TookExam, Acquired, Failed)
            VALUES ('$program', $eligible_total, $took_exam, $acquired, $failed)";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDG 4.2.1 | Proportion of Graduates .. Respective Field</title>

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
            margin-left: 250px;
            /* Same as the width of the sidenav */
            font-size: 20px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
            color: #FCF5ED;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #F4BF96;
            font-family: Verdana, sans-serif;
            font-weight: bolder;

        }

        .points {
            width: 60px;
            height: 40px;
            border-radius: 15px;
        }

        p {
            margin: 20px;
            font-size: 16px;
        }

        h2 {
            flex: 1;
            /* Allow h2 to grow to take available space */
        }

        .input-container {
            display: flex;
            align-items: center;
        }

        p {
            margin-right: 10px;
        }

        .content {
            margin-left: 300px;
            /* Same as the width of the sidenav */
            font-size: 20px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
            color: #C31F33;
        }

        .card {
            margin-left: 300px;
            margin-right: 50px;
            margin-bottom: 50px;
            margin-top: 20px;
        }

        .form-control {
            margin-right: 50px;
            display: block;
            width: 60%;
            height: 30px;
        }

        .container {
            margin-top: 30px;
            margin-left: 110px;
            margin-bottom: 30px;
            margin-right: 50px;
            justify-content: center;
            align-items: center;
        }

        /* remove muna pic 
.image{
  width: 50px;
  height: 50px;
}
  */
        .table-container {
            margin-left: 300px;
            margin-right: 50px;
            width: 73%;
            overflow-x: auto;
        }

        .h3text {
            justify-content: center;
            margin-left: 300px;
        }

        .points {
            box-shadow: grey;
        }
    </style>

<body>
    <?php include('sidebar.php'); ?>

    <!-- START OF HEADER POINTING SYSTEM -->
    <div class="main">
        <h2>SDG 4 QUALITY EDUCATION</h2>
        <div class="input-container">
            <p>Points</p>

            <?php
            include "includes/config.php";
            $query = "SELECT * FROM `tbl421_licensure`"; // SQL query to fetch all table data
            $result = mysqli_query($conn, $query); // sending the query to the database

            $totalPoints = 0;

            while ($row = mysqli_fetch_assoc($result)) {
                $program = $row['Program'];
                $took_exam = $row['TookExam'];
                $eligible_total = $row['EligibleTotal'];

                // Check if the program is CTE and update points
                $points = 0;
                $percent_took_exam = ($took_exam / $eligible_total * 100);

                if ($program === 'CTE') {
                    $points += 20;
                }

                // Check passing rate condition and update points
                if ($percent_took_exam >= 60) {
                    $points += 5;
                }

                // Check the number of programs with licensure exam condition and update points
                if (strpos($program, 'CAS') !== false) {
                    $points += 10;
                }

                // Add the points for the current research to the total points
                $totalPoints += $points;
            }
            ?>

            <input type="text" style="color: black; text-align: center;" class="points" name="points" value="<?php echo min($totalPoints, 25); ?>" readonly>
        </div>
    </div>

    <!-- END OF HEADER POINTING SYSTEM -->

    <div class="content">
        <br>
        <h3>Proportion of graduates with relevant qualifications in each respective field</h3>
        <!--remove muna pic 
    <div class="image" style="width: 50px;"style="height: 50px;">
            <img src="img/rs.png" alt="Image">
        </div>
-->

    </div>
    <div class="card">

        <div class="container mt-3 d-flex">
            <form method="POST" class="flex-grow-1">
                <h3 class="h3text" style="margin: 20px; padding-left: 180px;">Licensure Examination Statistics</h3>

                <div class="mb-2 mt-2"><i class="fa fa-book"></i>
                    <label for="program">Program: </label>
                    <input type="text" class="form-control" id="program" name="program" required>
                </div>

                <div class="mb-2 mt-2"><i class="fa fa-search"></i>
                    <label for="eligible_total">Total number of graduates who are eligible for licensure examination: </label>
                    <input type="number" class="form-control" id="eligible_total" name="eligible_total" required>
                </div>

                <div class="mb-2">
                    <i class="fa fa-user"></i>
                    <label for="took_exam">Total number of graduates who take the licensure examination: </label>
                    <input type="number" class="form-control" id="took_exam" name="took_exam" required></textarea>
                </div>

                <div class="mb-2 mt-2"><i class="fa fa-check"></i>
                    <label for="acquired">Total number of graduates who acquired a license:</label>
                    <input type="number" class="form-control" id="acquired" name="acquired" required>
                </div>

                <div class="mb-2">
                    <i class="fa fa-lg fa-times"></i>
                    <label for="failed">Total number of graduates who failed to pass the licensure examination:</label>
                    <input type="number" class="form-control" id="failed" name="failed" required>
                </div><br>

                <button type="submit" class="btn btn-primary mb-3" name="submit"><i class="fa fa-send"></i> Submit</button>
                <button type="reset" class="btn btn-danger mb-3" name="cancel"><i class="fa fa-times-circle"></i> Cancel</button>
            </form>

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

        </div>
    </div>

    <div class="table-container">
        <h2>Graduates Statistics</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" style="width: 30px;">Program</th>
                    <th scope="col" style="width: 100px;">Total Eligible Students</th>
                    <th scope="col" style="width: 100px;">Total Took Exam</th>
                    <th scope="col" style="width: 100px;">Total Acquired License</th>
                    <th scope="col" style="width: 75px;">Total Failed</th>
                    <th scope="col" style="width: 50px;">Percent Eligible</th>
                    <th scope="col" style="width: 50px;">Percent Took Exam</th>
                    <th scope="col" style="width: 50px;">Percent Acquired License</th>
                    <th scope="col" style="width: 50px;">Percent Failed</th>
                    <th scope="col" colspan="2" style="width: 100px;">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include "includes/config.php";
                $query = "SELECT * FROM `tbl421_licensure`"; // SQL query to fetch all table data
                $result = mysqli_query($conn, $query); // sending the query to the database

                if (!$result) {
                    die("Error: " . mysqli_error($conn)); // Output the error message for debugging
                }
                ?>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['ID'];
                    $program = $row['Program'];
                    $eligible_total = $row['EligibleTotal'];
                    $took_exam = $row['TookExam'];
                    $acquired = $row['Acquired'];
                    $failed = $row['Failed'];

                    // Calculate percentages
                    $percent_eligible = number_format(($eligible_total / $eligible_total * 100), 2);
                    $percent_took_exam = number_format(($took_exam / $eligible_total * 100), 2);
                    $percent_acquired = number_format(($acquired / $took_exam * 100), 2);
                    $percent_failed = number_format(($failed / $took_exam * 100), 2);


                    // Update the calculated percentages in the database
                    $updateQuery = "UPDATE `tbl421_licensure` SET PercentEligible = '$percent_eligible', PercentTookExam = '$percent_took_exam', PercentAcquired = '$percent_acquired', PercentFailed = '$percent_failed' WHERE ID = $id";

                    // Execute the update query
                    $updateResult = mysqli_query($conn, $updateQuery);

                    if (!$updateResult) {
                        echo "Error updating percentages: " . mysqli_error($conn);
                    }

                    echo "<tr>";
                    echo "<td>{$program}</td>";
                    echo "<td>{$eligible_total}</td>";
                    echo "<td>{$took_exam}</td>";
                    echo "<td>{$acquired}</td>";
                    echo "<td>{$failed}</td>";
                    echo "<td>{$percent_eligible} %</td>";
                    echo "<td>{$percent_took_exam} %</td>";
                    echo "<td>{$percent_acquired} %</td>";
                    echo "<td>{$percent_failed} %</td>";
                    echo "<td style='width:100px'>
                          <a href='edit_4.2.1.php?update&licensure_id={$id}' class='btn btn-primary'>
                              <i class='fa fa-edit'></i> 
                          </a>
                          <a href='delete_4.2.1.php?delete={$id}' class='btn btn-danger'>
                          <i class='fa fa-trash'></i>
                      </a>
                      </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
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