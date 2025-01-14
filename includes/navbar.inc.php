<!-- 
Holds the navbar used for each page
-->


<?php echo '<nav class="navbar bg-dark fixed-top">
        <div class="container-fluid ">
            <a class="navbar-brand text-white " href="index.php"><h1>Grant Ferris</h1></a>
            <div class="vertical-line"></div>
            <div class="row ">
                <div class="col-12">
                    <ul class="nav">
                        <li class="nav-item" id="home">
                            <a class="link-primary nav-link text-white" href="index.php">Home</a>
                        </li>
                        <li class="nav-item" id="about">
                            <a class="link-primary nav-link text-white" href="about.php">About</a>
                        </li>
                        <li class="nav-item" id="contacts">
                            <a class="link-primary nav-link text-white" href="contacts.php">Contact</a>
                        </li>
                        <li class="nav-item" id="cs">
                            <a class="link-primary nav-link text-white" href="cs.php">Computer Science</a>
                        </li>
                        <li class="nav-item" id="da">
                            <a class="link-primary nav-link text-white" href="da.php">Digital Arts</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 active-underline" id="navline">
                    
                </div>
            </div>
            <div class="mx-auto">
                <!-- 
                This is currently used to take up space in the navbar so the links are right next to
                the navbar
                -->
            </div>
        </div>  
    </nav>'
?>