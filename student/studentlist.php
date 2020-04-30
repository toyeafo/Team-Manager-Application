<?php
session_start();
include("includes/header.php")
?>
<?php
include_once("db.php");
$sqlQuery = "SELECT uid, fullname, course, coursecode, stdgroup, role FROM students";
$resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
?>
    
    <div class="wrapper d-flex align-items-stretch">

        <?php
        include("includes/navbar.php");
        ?>  

        <div id="content" class="p-4 p-md-5">
            
            <?php
            include("includes/content.php");
            ?>

            <table id="studentList" class="table table-bordered table-striped">
	            <thead>
		            <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Course</th>					
                        <th>Course Code</th>
<!--                        <th>Group</th>-->
                        <th>Role</th>
		            </tr>
	            </thead>
                <tbody>
		          <?php while( $developer = mysqli_fetch_assoc($resultSet) ) { ?>
                      <tr id="<?php echo $developer ['uid']; ?>">
                          <td><?php echo $developer ['uid']; ?></td>
                          <td><?php echo $developer ['fullname']; ?></td>
                          <td><?php echo $developer ['course']; ?></td>
                          <td><?php echo $developer ['coursecode']; ?></td>
<!--                          <td><?//php echo $developer ['stdgroup']; ?></td>-->
                          <td><?php echo $developer ['role']; ?></td>
                      </tr>
		          <?php } ?>
	           </tbody>
            </table>

        </div>

    </div>

    <?php
    include("includes/footer.php");
    ?>