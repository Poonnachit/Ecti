<?php
require "../../php/config.php";
$data = array();
foreach ($_POST as $key => $value) {
    $data[$key] = mysqli_real_escape_string($con, $value);
}
// print_r($data);
$sql = "INSERT INTO `paper`(`paper_id`, `field`, `title`, `author`, `affiliation`, `country`, `received`) VALUES ('$data[paper_id]','$data[field]','$data[title]','$data[author]','$data[affiliation]','$data[country]','$data[received_date]')";

// echo $sql;

$query = mysqli_query($con, $sql);
// if ($query) {
//     echo "success";
// } else {
//     echo "error";
// }

header("Location: ../?content=list_paper");