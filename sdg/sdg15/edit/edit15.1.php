<!--============================================================================================= 
                                EDIT DATA RETRIEVED FROM DATABASE 
============================================================================================= -->
<?php
include "../includes/config.php";  //REPLACE THE "config.php" WITH YOUR ACTUAL CONNECTION TO DATABASE EX: conn.php
if(isset($_GET['research_id']))
    {
      $research_id = $_GET['research_id']; 
    }
    
      // SQL query to select all the data from the table where researchid = $researchid
     $query = "SELECT * FROM `tbl15_1_landecosystem` WHERE `ID` = $research_id";
     $result= mysqli_query($conn,$query);
     while ($row = mysqli_fetch_assoc($result)) { 
          
        //the data inside [''] are the columns in db
        $id = $row['ID'];
        $title = $row['title'];
        $author = $row['author'];
        $year = $row['year'];
        $total_citation = $row['total_citation'];
        $source = $row['source'];
     }
             
  //============================================================================================= 
    //                     UPDATE DATA ONCE UPDATE BUTTON WAS CLICKED
//============================================================================================= -->        
 //Processing form data when form is submitted/ when update button is clicked
 if (isset ($_POST['update'])){
    //$total_research = $_POST['total_number'];
    $title = strtoupper($_POST['title']);
    $author = strtoupper($_POST['author']);
    $year = $_POST['publication'];
    $total_citation = $_POST['citations'];
    $source = strtoupper($_POST['source']);

      // SQL query to update the data in user table where the id = $userid 
        $query ="UPDATE `tbl15_1_landecosystem` SET `title` = '{$title}', `author` = '{$author}',`year` = '{$year}',
        `total_citation` = '{$total_citation}',`source` = '{$source}' 
        WHERE `ID`= $research_id";
        $update = mysqli_query($conn, $query);
        $successMessage = "You have successfully updated data";
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 4.1 | Research on Early Years ... Education</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href= css/sidebar.css>
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
.card{
    margin-bottom: 50px;
    margin-top: 20px;
    background-color: white;
    box-shadow: 0px 20px 20px rgba(0.1, 0.1, 0.1, 0.1);
    width: auto;
    height: auto;
  }
.form-group{
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 10px;
}
h3{
    text-align: center;
}
.btn-primary {
    margin-left: 50px;
}
.btn-danger {
    margin-left: 5px;
}
.contentform{
    margin-top: 30px;
    margin-left: 50px;
    margin-bottom:30px;
    justify-content: center;
    align-items: center;
    
  }
  .form-control{
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
<div>
<div class="card"> 
<div class="contentform">
<form method="POST">
 
    <h3 class="h3text text-center" style="color: red; font-weight: bolder">Research</h3>
    <div class="form-group"><i class="fa fa-bookmark"></i>
      <label for="title">Title of research</label>
      <textarea class="form-control" id="title"  name="title" rows="5" value="" required><?php echo $title ?></textarea>
    </div>
    <div class="form-group"><i class="fa fa-user"></i>
      <label for="author">Author</label>
      <input type="text" class="form-control" id="author"  name="author" value="<?php echo $author ?>" required>
      </div>
    <div class="form-group"><i class="fa fa-calendar"></i>
  <label for="publication">Year of publication</label>
  <input type="text" class="form-control" id="publication" name="publication" value="<?php echo $year ?>" maxlength="4" placeholder="YYYY" required>
 </div>
    <div class="form-group"><i class="fa fa-bar-chart"></i>
      <label for="citations">Total number of citations</label>
      <input type="number" class="form-control" id="citations"  name="citations" value="<?php echo $total_citation ?>" required>
     </div>
    <div class="form-group"><i class="fa fa-book"></i>
      <label for="citations">Source</label>
      <textarea class="form-control" id="source"  name="source" value="" required><?php echo $source ?></textarea>
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
<button type="reset" class="btn btn-danger mt-6 mb-3" name="cancel" onclick="window.location.href='../15.1.php';">
    <i class="fa fa-times-circle"></i> Cancel
</button>
  <br>

</form>
</div>
</div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>