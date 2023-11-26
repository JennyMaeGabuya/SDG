
    
<style>
    .nested-dropdown {
    display: none;
    padding-left: 20px; /* Adjust as needed */
}

.sidenav {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 15px;
  width: 250px;
}

/* Show the nested dropdown when hovering over the parent link */
.dropdown-container:hover .nested-dropdown {
    display: block;
}
.sidenav a, .dropdown-btn {  /* for menu*/
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 16px;
    color: rgb(32, 30, 30);
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}



/* Media query for smaller screens */
@media screen and (max-width: 768px) {
    .sidenav {
        width: 100%; /* Set the sidebar to occupy full width */
        position: fixed;
        top: 0;
        left: -100%; /* Initially hide the sidebar off-screen */
        transition: left 0.3s ease; /* Add a smooth transition effect */
    }

    .sidenav.active {
        left: 0; /* Show the sidebar when active */
    }

    /* Additional styles for the content to adjust when the sidebar is active */
    .content {
        margin-left: 0; /* Adjust content margin when sidebar is active */
        transition: margin-left 0.3s ease;
    }

    .content.active {
        margin-left: 250px; /* Adjust content margin when sidebar is active */
    }
}
</style>
<div class="sidenav">
    <img src="img/15.png" class="img logo" alt="logo" style="margin-top: 50px;" >
  <b><a href="../../index.php">Home</a></b>
  <a href="index.php">SDG 15: Life on land</a>
  <a href="15.1.php">15.1 Research on Land </a>
  <a href="15.2.php">15.2 land Practices</a>
  <a href="15.3.php">15.3 Endangered Flora/Fauna </a>
  <button class="dropdown-btn">15.4 Sustainable use of land
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="15.4.1.php">15.4.1 Sustainable use of land</a>
    <a href="15.4.2.php">15.4.2 farmed food</a>
    <a href="15.4.3.php">15.4.3 Ecosystem's Biodiversity</a>
  </div>
  <a href="15.5.1.php">15.5.1 Biodiversity </a>
</div>


