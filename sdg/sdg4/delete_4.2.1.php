<?php
include "includes/config.php";

if (isset($_GET['delete'])) {
    $deleteid = $_GET['delete'];

    // Check if the user has confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // SQL query to delete data from the "order" table where id = $userid
        $query = "DELETE FROM `tbl421_licensure` WHERE ID = {$deleteid}";
        $delete_query = mysqli_query($conn, $query);
        if ($delete_query) {
            echo "<script type='text/javascript'>alert('Data deleted successfully!')</script>";
        } else {
            echo "<script type='text/javascript'>alert('Error deleting data!')</script>";
        }
        header("Location: 4.2.1.php");
    } else {
        // If not confirmed, show a confirmation dialog using JavaScript
        echo <<<EOD
        <script>
            function confirmDelete() {
                const confirmation = confirm('Are you sure you want to delete this record?');
                if (confirmation) {
                    window.location.href = 'delete_4.2.1.php?delete=$deleteid&confirm=true';
                } else {
                    window.location.href = '4.2.1.php';
                }
            }
            confirmDelete();
        </script>
EOD;
    }
}
?>
