<footer class="bg-dark text-center text-lg-start text-white mt-5">
    <div class="container p-4">
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="d-none d-lg-block col-lg-5">
                <div class="h5 mb-4">Shared killing time</div>
                <p>Let's share each favorite movie to get rid of boredom, to kill each time...</p>
            </div>
            <div class="d-none d-lg-block col-lg-3">
            </div>
            <div class="col col-lg-2">
                <div class="h5 mb-4">Contents</div>
                <p>
                    <a href="funny.php" class="text-white" style="text-decoration: none;">funny</a>
                </p>
                <p>
                    <a href="animal.php" class="text-white" style="text-decoration: none;">animal</a>
                </p>
                <p>
                    <a href="baby.php" class="text-white" style="text-decoration: none;">baby</a>
                </p>
                <p>
                    <a href="nature.php" class="text-white" style="text-decoration: none;">nature</a>
                </p>
            </div>
            <div class="col col-lg-2">
                <div class="h5 mb-4">Links</div>
                <p>
                    <a href="index.php" class="text-white" style="text-decoration: none;">home</a>
                </p>
                <p>
                    <a href="add-post.php" class="text-white" style="text-decoration: none;">add post</a>
                </p>
                <?php if(empty($_SESSION['user_id'])) {
                    // Empty
                } else {?>
                    <p>
                        <a href="profile.php" class="text-white" style="text-decoration: none;">profile</a>
                    </p>
                <?php }?>
                <p>
                    <a href="contact.php" class="text-white" style="text-decoration: none;">contact</a>
                </p>
            </div>
        </div>
    </div>
</footer>