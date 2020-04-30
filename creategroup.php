<?php
session_start();
include("includes/header.php")
?>

<?php
include_once("db.php");

$result = mysqli_query($conn, "SELECT * FROM students ORDER BY RAND()")
or die(mysqli_error());
?>

    
<div class="wrapper d-flex align-items-stretch">

    <?php
    include("includes/navbar.php");
    ?>  

    <div id="content" class="p-4 p-md-5">

        <?php
        include("includes/content.php");
        ?>

        <div>
            <span class="text-success"><?php if (isset($success_message)) { echo $success_message; } ?></span>
            <span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
        </div>

        <form method="post">
            <div class="form-group">
                <label for="num_group">Number of students in Group</label>
                <select name="num_group" class="form-control">
<!--
                    <option value="1">1</option>
                    <option value="2">2</option>
-->
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="login-button" name="maxSubmit">
            </div>
            
            <div class="form-group">
                <input type="submit" class="login-button btn-danger" name="maxReset" value="Reset">
            </div>
            
        </form>

        <?php
        if(isset($_POST['maxReset'])){
            $letters = array('A', 'B', 'C', 'D', 'E', 'F');
            
            foreach($letters as $group_reset){
                $result = mysqli_query($conn, "DELETE FROM group$group_reset") or die(mysqli_error());
                if($result){
                    $success_message = "Successfully cleared database";
                }
            }
        };
        
        if(isset($_POST['maxSubmit'])) {
            $numGroup = mysqli_real_escape_string($conn, $_POST['num_group']);
            $gang =1;
            $row = true;
            $letters = array('A', 'B', 'C', 'D', 'E', 'F');
            while ($row) {

                foreach ($letters as $group_rep) {
                    echo "<div><h1>Group $group_rep</h1></div>";

                    for ($i =0; $i<$numGroup && $row=mysqli_fetch_assoc($result); $i++) {
                        $query = "INSERT INTO group$group_rep (name, stdgroup) VALUES ('" . $row['fullname'] . "','" . $group_rep . "')";

                        if(mysqli_query($conn, $query)) {
                            $success_message = "Successfully added Student";
                        } else {
                            $error_message = "Error in adding student";
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        echo "<div><ul>
                            <li>$row[fullname]</li>
                        </ul></div>";
                    }
                }
            }
        }

        ?>

    </div>

</div>

<?php
include("includes/footer.php");
?>