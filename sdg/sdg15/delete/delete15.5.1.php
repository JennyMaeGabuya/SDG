<!--============================================================================================= 
                                DELETE DATA
============================================================================================= -->

<?php
include "../includes/config.php"; //REPLACE THE "config.php" WITH YOUR ACTUAL CONNECTION TO DATABASE EX: conn.php


if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];

    // Check if the user has confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // SQL query to delete data from the "order" table where id = $deleteid
        $query = "DELETE FROM `tbl15_5_1_biodiversity` WHERE `ID` = {$deleteid}";
        $delete_query = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert(' data deleted successfully!')</script>";
        header("Location: ../15.5.1.php");
    } else {
        // If not confirmed, show a confirmation dialog using JavaScript
        echo "<script>
              var confirmed = confirm('Are you sure you want to delete this record?');
              if (confirmed) {
                  window.location.href = 'delete15.5.1.php?delete=$deleteid&confirm=true';
              } else {
                  window.location.href = '../15.5.1.php';
              }
              </script>";
    }
}
?>
