<?php
    //includes database connection file
    include_once('../dbConnection/mysqlconfig_connection.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php
            if(isset($_POST['Submit'])){
                $code = $_POST['code'];
                $author = $_POST['author'];
                $subject = $_POST['subject'];
                
                if(empty($code) || empty($author)){
                    if(empty($code)){
        ?>
                        <font color="red">Syllabus Code field is empty.</font><br>
        <?php
                    }
                    if(empty($author)){
        ?>
                        <font color="red">Syllabus Author field is empty.</font><br>
        <?php
                    }
        ?>
                    <br><a href="javascript:self.history.back()">Go Back</a>
        <?php
                }
                else{
                    $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(subject_id, syllabus_code, syllabus_author) 
                                VALUES('$subject', '$code', '$author');");
                    
        ?>
                    <font color="green">Data added successfully.</font>
                    <br><a href="../index.php">View Result</a>
        <?php
                }
            }
        ?>
    </body>
</html>