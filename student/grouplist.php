<?php
session_start();
include("includes/header.php")
//include_once("db.php");
?>
    
    <div class="wrapper d-flex align-items-stretch">

        <?php
        include("includes/navbar.php");
        ?>  

        <div id="content" class="p-4 p-md-5">
            
            <?php
            include("includes/content.php");
            ?>

            <div class="row">
                
                <?php
                $letters = array('A', 'B', 'C', 'D', 'E', 'F');
                
                foreach ($letters as $group_name) {
                    $sqlQuery = "SELECT name FROM group$group_name";
                    $resultSet = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
                    $developer = mysqli_fetch_assoc($resultSet);?>
                        <div class="col-sm-4" style="padding: 10px;">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header">
                                    Group <?php echo $group_name;?>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php echo $developer ['name'];?></li>
                                </ul>
                            </div>
                        </div>
                   <?php }?>
                
            </div>

        </div>

    </div>

    <?php
    include("includes/footer.php");
    ?>