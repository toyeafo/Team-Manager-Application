<?php
include_once('db.php');

$queries = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $_SESSION['user_name'] . "'")
or die(mysqli_error());
$res_query = mysqli_fetch_assoc($queries);
$res_image = $res_query['image'];

?>
<nav id="sidebar">
            <div class="p-4 pt-5">
            <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/<?php if ($res_image){
                    $res_image = strval($res_image);
                    echo preg_replace('/\s/', '', $res_image);
                    }
                else {echo "logo1.jpg";} ?>">
            </a>
            
        <ul class="list-unstyled components mb-5">
            <li class="active">
          <a href="home.php">HOME</a>
          </li>
            
          <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">STUDENT</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="studentlist.php">STUDENT LIST</a>
            </li>
            <li>
                <a href="addstudent.php">ADD NEW STUDENT</a>
            </li>
            </ul>
          </li>
            
          <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">GROUPS</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="grouplist.php">GROUP LIST</a>
            </li>
            <li>
                <a href="creategroup.php">CREATE NEW GROUPS</a>
            </li>
          </ul>
          </li>
            
          <li>
          <a href="studentreq.php">STUDENT REQUESTS</a>
          </li>
            <li>
          <a href="changepic.php">CHANGE PROFILE PIC</a>
          </li>
        </ul>

      </div>
</nav>