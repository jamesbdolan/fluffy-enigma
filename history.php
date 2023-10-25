<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>History</title>
</head>

<body>
  <a href="../../../index.html">Home</a>
  <p><button>History</button></p>
  <?php
  $output = shell_exec('ls -lart');
  echo "<pre>$output</pre>";
  ?>
</body>

</html>