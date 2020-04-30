

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-primary">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>

    <a href="#" class="">

           <?php 

           if(!isset($_SESSION['user_id'])){

               header("Location: index.php");
               echo "<a href='index.php' class='btn btn-success btn-sm'>LOGIN</a>";

           }else{

               echo "Welcome: " . $_SESSION['user_name'] . "";

           }

           ?>

    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="studentlist.php">STUDENT LIST</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="grouplist.php">GROUP LIST</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">LOG OUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


