<nav class="navbar navbar-expand-md navbar-white px-5 bg-white">
    <a href="../index.php" class="navbar-brand">
        <h1>Shared killing time</h1>
    </a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <?php if(empty($_SESSION['user_id'])) {?>
                <a href="login.php" class="nav-link text-dark">Login</a>
            <?php } else {?>
                <a href="profile.php" class="nav-link text-dark">Profile</a>
            <?php }?>
        </li>
        <li class="nav-item">
            <a href="contact.php" class="nav-link text-dark">Contact</a>
        </li>
        <li class="nav-item">
            <?php if(empty($_SESSION['user_id'])) {
                // Empty
            } else {?>
                <a href="../actions/logout.php" class="nav-link text-dark">Logout</a>
            <?php }?>
        </li>
    </ul>
</nav>