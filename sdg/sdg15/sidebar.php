<style>
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
        }

        .sidenav.active {
            left: 0;
        }

        /* Show the hamburger icon when the screen size is small */
        .hamburger {
            display: block;
        }
    }
</style>
</head>

<body>

    <!-- Your existing sidebar code -->
    <div class="sidenav">
        <div class="hamburger" onclick="toggleSidebar()">
            &#9776; <!-- Hamburger icon -->
        </div>
        <img src="img/15.png" class="img logo" alt="logo" style="margin-top: 30px;">
        <b><a href="../../index.php">Home</a></b>
        <a href="index.php">SDG 15: Life on Land</a>
        <a href="15.1.php">15.1 Research on Land</a>
        <button class="dropdown-btn">15.2 Sustainable Land ..
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="15.2.1.1.php">15.2.1.1 Students</a>
                <a href="15.2.1.2.php">15.2.1.2 Employees</a>
        </div>
        <a href="15.3.php">15.3 Endangered Flora/Fauna</a>
        <button class="dropdown-btn">15.4 Sustainable Use ..
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="15.4.1.php">15.4.1 Sustainable Use of Land</a>
            <a href="15.4.2.php">15.4.2 Farmed Food</a>
            <a href="15.4.3.php">15.4.3 Ecosystem's Biodiversity</a>
        </div>
        <a href="15.5.1.php">15.5.1 Biodiversity</a>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidenav');
            sidebar.classList.toggle('active');
        }
    </script>