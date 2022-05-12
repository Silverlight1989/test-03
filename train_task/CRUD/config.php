<?php
  define('DB_SERVER', 'u0154084.mysql');
  define('DB_USERNAME', 'u0154084_1989');
  define('DB_PASSWORD', 'pEn3/QoB');
  define('DB_NAME', 'u0154084_1989');
  define('TBL_NAME','items');

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  $table = mysqli_select_db_table(TBL_NAME);
  if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error(errno));
  }else{
      echo "Connection established";
  }
?>
