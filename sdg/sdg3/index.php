<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 3| GOOD HEALTH AND WELL-BEING</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href= css/sidebar.css>
<link rel="stylesheet" href="css/style.css">
<!-- this is links for imageslidee  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

/* Main content */
.main1 {
  margin-top: 50px;
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: black;
  font-family:Arial, Helvetica, sans-serif;
}
  
/* Make the image fully responsive */
  .card{
    border-radius: 10px;
    box-shadow: 0 6px 10px rgba(0,0,0,.1);
    transition: .3s transform cubic-bezier(.4,0,.2,1),.3s box-shadow;
    margin-right: 60px;
    margin-left: 30px;
    margin-bottom: 60px;
    margin-top: 50px;
    
  }
  
  p{
    margin: 20px;
    padding: 20px;
    font-size: large;
    text-align: justify;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

h2{
  margin-left:250px;
  margin-top: 0;
      background-color:#4C9F38; 
      color: #fff; 
      padding: 10px; 
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
</style>
</head>
<body>
<h2>SDG 3| GOOD HEALTH AND WELL-BEING</h2>
<?php include('sidebar.php'); ?>

<div class="main1">
<div class="slider">
<?php include('imageslide.php'); ?>
</div>
<div class="card">
<p>SDG 3, part of the Sustainable Development Goals (SDGs) established by the United Nations, 
  focuses on ensuring healthy lives and promoting well-being for all at all ages. It encompasses various aspects of health, aiming to address key global health challenges and achieve universal health coverage by 2030.

The goal of SDG 3 is ambitious and multifaceted, aiming to tackle issues such as reducing maternal and child mortality,
 ending epidemics of diseases like HIV/AIDS, tuberculosis, malaria, and combating other communicable diseases. It also emphasizes the need for non-communicable disease prevention, mental health promotion, and ensuring access to essential healthcare services.
</div>
</div>

<link rel="stylesheet" href= css/sidebar.css>

<script>
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

