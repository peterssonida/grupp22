<!DOCTYPE html>
<html lang="EN">
<?php // includes all he classes, session_start and the html head.
  include("include/bootstrap.php");
  include("include/views/_head.php");
?>
<body>
    <?php $csrfrandom = hej123TestAR;
    header("Location: https://www.spreaker.com/oauth2/authorize?client_id=1304&response_type=token&state={$csrfrandom}&scope=basic&redirect_uri=http://localhost/JohanssonJamilla/grupp22-master/include/views/registerform.php");
    ?>
</body>
</html>
