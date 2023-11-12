<?php include "template.php"?>
<div class="content">
<form action ="0.php" method = "POST">
<h2>1.1.1 Research on poverty</h2>
<div class="inputs">
<span><label for="coauthored">Total number of published research co-authored with low or lower-
middle income countries: </label><input name ="coauthored" type="text" placeholder="AkoBudoy"></span>
<span><label for="title">Title: </label><input name ="title" type="text" placeholder="AkoBudoy"></span>
<span><label for="author">Author: </label><input name="author" type="text" placeholder="Jack"></span>
<span><label for="year">Year: </label><input name = "year"type="number" placeholder="2013"></span>
<span><label for="citation">No. of citation: </label><input name = "citation"type="number" placeholder="12"></span>
</div>
<input class="submit" name="save" type="submit" value="submit"></input>
</form>
<?php
if (isset($_POST['save'])) { 
    $coauthored=$_POST['coauthored'];
    $name=$_POST['title']; 
    $author=$_POST['author'];
    $year=$_POST['year'];
    $citation=$_POST['citation'];

    $query= "INSERT INTO `1.1.1 Research on poverty`(`Total number of published research co-authored`,`Title`, `Author`, `year`, `citations`) VALUES ('$coauthored','$name','$author','$year','$citation')";
    $add = mysqli_query($conn, $query); 
} 

?>
<div class="result">
    <?php
    $select ="SELECT MAX(`Total number of published research on poverty`)FROM `1.1.1 Research on poverty`";
    $result=mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result);
    $x=$row[0];
    echo"<p>Total Number of Research: $x</p>";

    $points = 0;
    if ($row[0]>1){
        $points = 20;
    }
        $qry = "SELECT MAX(`Total number of published research co-authored`)FROM `1.1.1 Research on poverty`";
        $result2=mysqli_query($conn, $qry);
        $row2 = mysqli_fetch_array($result2);
        if ($row2[0] > 0){
            $points = $points + 5;  
        }
        echo"<p>POINTS = $points</p>";
    ?>
</div>
</div>
</body>
</html>