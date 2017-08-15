<?php
include "conn.php";


$result = null;
if(isset($_POST["submit"])) {
    $sql ="SELECT * FROM `stud`";
    $result = $conn->query($sql);

}

if ($result!==null){
    while ($row = $result->fetch_object()){
        echo $row->username."<br />";
        echo $row->Email."<br />";
    }
}
