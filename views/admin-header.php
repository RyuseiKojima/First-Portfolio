<nav class="navbar navbar-expand-md navbar-black px-5 bg-black">
    <a href="admin.php" class="navbar-brand link-light">
        <h1 class="text-white">Admin Page</h1>
    </a>
    <ul class="navbar-nav ms-auto">
        
        <?php if($_SERVER['REQUEST_URI'] == '/kredo-coding/11-portfolio/views/admin.php') {?>
            <li class="nav-item">
                <a href="#post" class="nav-link text-white">Post</a>
            </li>
            <li class="nav-item">
                <a href="#user" class="nav-link text-white">User</a>
            </li>
            <li class="nav-item">
                <a href="#opinion" class="nav-link text-white">Opinion</a>
            </li>
        <?php }?>
        <li class="nav-item">
            <a href="../actions/logout.php" class="nav-link text-white">Logout</a>
        </li>
    </ul>
</nav>