<!--
ERIKA R. MAGNAYE
BSIT-SM-3101

-->

<?php
include "includes/config.php";

if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];

    // Check if the user has confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // SQL query to delete data from the "order" table where id = $userid
        $query = "DELETE FROM `tbl431_resources` WHERE `total_number` = {$deleteid}";
        $delete_query = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>alert(' data deleted successfully!')</script>";
        header("Location: 4.3.1.php");
    } else {
        // If not confirmed, show a confirmation dialog using JavaScript
        echo "<script>
              var confirmed = confirm('Are you sure you want to delete this record?');
              if (confirmed) {
                  window.location.href = 'delete4.3.1.php?delete=$deleteid&confirm=true';
              } else {
                  window.location.href = '4.3.1.php';
              }
              </script>";
    }
}
?>