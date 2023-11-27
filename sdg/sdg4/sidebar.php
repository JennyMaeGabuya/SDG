<style>
    .nested-dropdown {
    display: none;
    padding-left: 20px; /* Adjust as needed */
}

.sidenav {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

/* Show the nested dropdown when hovering over the parent link */
.dropdown-container:hover .nested-dropdown {
    display: block;
}
      /* Hamburger icon styles */
      .hamburger {
        display: none; /* Initially hide the hamburger icon */
        cursor: pointer;
        padding: 10px;
    }


    /* Media query for smaller screens */
    @media screen and (max-width: 768px) {
        .sidenav {
            width: 100%;
            position: fixed;
            top: 0;
            left: -100%;
            transition: left 0.3s ease;
            background-color: #C31F33;
        }

        .sidenav.active {
            left: 0;
            background-color: #C31F33;
        }

        /* Show the hamburger icon when the screen size is small */
        .hamburger {
            display: block;
        }
    }
</style>
</head>

<body>
<div class="sidenav">
<div class="hamburger" onclick="toggleSidebar()">
            &#9776; <!-- Hamburger icon -->
        </div>
    <img src="img/sdg.png" class="img logo " alt="logo" >

  <b><a href="../../index.php">Home</a></b>
  <a href="index.php">SDG 4: Quality Education</a>
  <a href="4.1.php">4.1 Research on Early ... </a>
  <button class="dropdown-btn">4.2 Graduates
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="4.2.1.php">4.2.1 Respective Field</a>
    <a href="4.2.2.php">4.2.2 Primary Level</a>
  </div>
  <button class="dropdown-btn">4.3 Learning Measures
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="4.3.1.php">4.3.1 Public Resources</a>
    <a href="4.3.2.php">4.3.2 Public Events</a>
    <a href="4.3.3.php">4.3.3 Vocational Events</a>
    <a href="4.3.4.php">4.3.4 Outreach Activity</a>
    <a href="4.3.5.php">4.3.5 Learning Access</a>
  </div>
  <a href="4.4.php">4.4 First-Generation ... </a>
</div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidenav');
            sidebar.classList.toggle('active');
        }
    </script>