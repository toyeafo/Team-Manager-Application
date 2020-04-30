<?php
session_start();
include("includes/header.php")
?>
<?php
include_once("db.php");
$sqlQuery = "SELECT uid, name, subject, reason FROM requests";
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
                    <th>Subject</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody>
              <?php while( $developer = mysqli_fetch_assoc($resultSet) ) { ?>
                  <tr id="<?php echo $developer ['uid']; ?>">
                      <td><?php echo $developer ['uid']; ?></td>
                      <td><?php echo $developer ['name']; ?></td>
                      <td><?php echo $developer ['subject']; ?></td>
                      <td><?php echo $developer ['reason']; ?></td>
                  </tr>
              <?php } ?>
           </tbody>
        </table>

    </div>

</div>

<?php
include("includes/footer.php");
?>