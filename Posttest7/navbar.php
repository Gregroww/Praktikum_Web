<?php 
    if (session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>

<nav class="navbar-section">
    <!--Logo-->
    <a href="index.php">
        <img src="assets/icon1.jpg" alt="Logo" width="50" height="50">
    </a>

    <div class="navbar-item">
    <p>Reviewly</p>
    </div>

    <!--Search-->
    <div class="navbar-search">
        <input type="text" placeholder="Cari: restoran, cafe, mall..." class="search-input">
        <input type="text" placeholder="Daerah: kota, kabupaten" class="search-location">
        <button class="search-button">Search</button>
    </div>
    
    <!--List Navbar-->
    <menu id="navbar-list">
        <li class="navbar-item">
            <a href="index.php" class="navbar-item">
                Home
            </a>
        </li>
        <li class="navbar-item">
            <a href="start_review.php" class="navbar-item">
                Start Review
            </a>
        </li>
        <li class="navbar-item">
            <a href="about_me.html" id="aboutMeLink" class="navbar-item">
                About Me
            </a>
        </li>
        <div class="navbar-login">
            <?php if (isset($_SESSION['login'])) : ?>
                <a href="logout.php" class="navbar-item " id="border-login">Logout</a>
            <?php else : ?>
                <a href="login.php" class="navbar-item" id="border-login">Login</a>
                <a href="signup.php" class="navbar-item signup">Sign Up</a>
            <?php endif; ?>
        </div>
    </menu>
    <!--Hamburger-->
    <button class="hamburger" id="hamburger">
        <i class="fa fa-bars"></i> 
    </button>
</nav>