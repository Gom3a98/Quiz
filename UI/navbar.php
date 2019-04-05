<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img class="myLogo" src="images/logo.png" alt="Logo" style="width:60px; border-radius: 10px;">
  </a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="CMS.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="NewQuiz.php">Create Quiz</a>
      </li>

      <li  class="nav-item">
        <a class="nav-link"  href="ListParticipants.php">User Management</a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >
           <?php echo "Admin Panel"; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">My Favorit List</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="signout.php">Sign Out</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>