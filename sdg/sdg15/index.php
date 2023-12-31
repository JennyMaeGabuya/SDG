<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDG 15 | Life on Land</title>

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
 /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  color: black;
  font-family:Arial, Helvetica, sans-serif;
  margin-left: 300px;

}
  
/* Make the image fully responsive */
  .card{
    border-radius: 10px;
    box-shadow: 0 6px 10px rgba(0,0,0,.1);
    transition: .3s transform cubic-bezier(.4,0,.2,1),.3s box-shadow;
    margin-right: 60px;
    margin-left: 20px;
    margin-bottom: 60px;
    margin-top: 50px;
    width: auto;
    height: auto;
    
  }
  
  p{
    margin: 20px;
    padding: 20px;
    font-size: large;
    text-align: justify;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  h2 {
  margin-top: 0;
  background-color:#51C417;
  color: #fff;
  padding: 10px;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.h2head {
  margin-left: 250px; /* Adjust this value to your preferred margin */
  font-family: Arial, Helvetica, sans-serif;
}
.top{
  background-color: #51C417;
  width: 100%;}
/* Media query for smaller screens */
@media only screen and (max-width: 768px) {
  .card {
    width: 90%; /* Adjust card width for smaller screens */
    margin: 10px auto; /* Adjust margin for smaller screens */
    font-size: 13px;
  }

  p{
    font-size: 13px;
  }
  .main1 {

  font-size: 13px; /* Increased text to enable scrolling */
  width: 90%; /* Adjust card width for smaller screens */
    margin: 10px auto; /* Adjust margin for smaller screens */
    font-size: 13px;
}
  img{
    width:100%;
    margin-top: 60px;
    height:150px;
  }
  .h2head {
  margin: 10px auto;
   margin-left: 10px;   
   justify-content: center;
   text-align: center;
font-size: large;
}

}

</style>
</head>
<body>
  <div class="index" >
    <div class="top">
    <h2 class="h2head">SDG 15 LIFE ON LAND</h2>
    </div>

<?php include('sidebar.php'); ?>

<div class="main1 text-center" >
<div class="slider">
<?php include('imageslide.php'); ?>
</div>
<div class="card">
<p>United Nations Sustainable Development Goal (SDG) 15 aims to protect, restore, and promote the conservation 
  and sustainable use of terrestrial ecosystems, sustainably manage forests, combat desertification, and halt and
   reverse land degradation and biodiversity loss. Land degradation is a major threat to sustainable development, 
   as it can lead to food insecurity, water scarcity, climate change, and the loss of biodiversity. 
   SDG 15 calls for action to protect and restore land ecosystems, including forests, grasslands, and wetlands. 
   It also calls for the sustainable management of forests and the halting of desertification.
</div>
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

