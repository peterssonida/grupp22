<!DOCTYPE html>
<html lang="EN">
<?php // includes all he classes, session_start and the html head.
  include("include/bootstrap.php");
  include("include/views/_head.php");
?>
<?php
$conn = mysqli_connect('localhost', 'root', 'mysql', 'podcastforum');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$sql = "SELECT episode_id,show_id,episode_title FROM episodes";


$array = array();
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $array[$row["episode_id"]] = $row["episode_title"];
    }
    foreach ($array as $episode_id => $episode_title) {
        echo  "<a href=$episode_id.php>$episode_title</a><br>";
}}

$conn->close();
?>
</html>
