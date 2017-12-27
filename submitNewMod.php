<html>
<head>
</head>
<body>
  <?php
      include("/includes/Tooldblogin.php");
      $content = $_POST['content']; //get posted data
      $content = mysql_real_escape_string($content);  //escape string

      $sql = "UPDATE content SET text = '$content' WHERE element_id = '1' ";
          $sql = "UPDATE content SET text = '$content' WHERE element_id = '2' ";


      if (mysql_query($sql))
      {
          echo 1;
      }

  ?>
</body>
</html>
