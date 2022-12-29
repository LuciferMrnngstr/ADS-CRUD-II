<?php
    //fetch data
    $query = 'SELECT tblsubjects.*, tblsyllabus.* FROM tblsubjects LEFT JOIN tblsyllabus
                ON tblsyllabus.subject_id = tblsubjects.Subject_ID';
    $result = mysqli_query($dbc, $query); //using mysqli_query
?>