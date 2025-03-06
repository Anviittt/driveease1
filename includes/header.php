<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="index.php"> <!-- Add text-light class to make the brand text white -->
            <img src="./img/logo1.jpg" alt="Logo" width="59" height="44" class="d-inline-block align-text-top">
            DriveEase
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="index.php">Home</a> <!-- Add text-light class to make the text white -->
                </li>
                <?php
                if (isset($_SESSION["username"])) {
                    if (isset($_SESSION["num"])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="admin.php">Admin</a> <!-- Add text-light class -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="settings_admin.php">Settings</a> <!-- Add text-light class -->
                        </li>
                        <?php
                    }
                    if (isset($_SESSION["num1"])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="student.php">Student</a> <!-- Add text-light class -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="settings_student.php">Settings</a> <!-- Add text-light class -->
                        </li>
                        <?php
                    }
                    if (isset($_SESSION["num2"])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="instructor.php">Instructor</a> <!-- Add text-light class -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="settings_instructor.php">Settings</a> <!-- Add text-light class -->
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="logout.php"> <!-- Add text-light class -->
                            <img src="./img/logout.png" alt="Logo" width="44" height="44">
                            LogOut
                        </a>
                    </li>
                    <?php
                } else {
                    ?>
                </ul>
                <a href="login.php"><img class="d-inline-block align-text-top" src="./img/login.png" width="44" height="44"></a>
                <a class="nav-link text-light pe-4" href="login.php">Login</a> <!-- Add text-light class -->
                <a class="nav-link text-light pe-4" href="signup.php">SignUp</a> <!-- Add text-light class -->
                <?php
            }
            ?>
        </div>
    </div>
</nav>
