<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="file:///C:/xampp/htdocs/Aramane index.php">
            <img src="./images/loog.jpg" width="180" height="80" alt="logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link active" href="index.php">Home</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="user.php" onclick="return confirm('You have to Log In Or Register')">Services</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="user.php" onclick="return confirm('You have to Log In Or Register')">Places to Visit</a>
                  </li>
                 
                  <li class="nav-item">
                     <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                 <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="user.php">Login</a>
                  </li>
				  <!--<li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <b>Login
				</b>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="ologin.php">Owner</a>
                        <a class="dropdown-item" href="mlogin.php">Manager</a>
                        <a class="dropdown-item" href="elogin.php">Employee</a>
						<a class="dropdown-item"href="index.php" onclick="return confirm('Are you sure you want to Logout?')">Logout</a>
                     </div>
                  </li>-->
				  
               </ul>
            </div>
        </div>
    </nav>