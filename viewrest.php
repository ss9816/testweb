<?php
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "ss", "pwd" => "asdfghJKL98", "Database" => "WebAppDb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:webapptp042020.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);

  if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";
?>
