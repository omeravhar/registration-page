<?php

$data = file_get_contents('signin.json');
//echo "<pre>";
$data = json_decode($data);



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Itma registers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>This are the registers for itma</h2>
  <p>The registration made from this link : <a href="http://knet.global/itma/">registration page</a></p>            
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>Company</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $info):?>
            <tr>
              <td><?= $info->userName ;?></td>
              <td><?= $info->userCompany ;?></td>
              <td><?= $info->userMail ;?></td>
            </tr>
        <?php endforeach ;?>      
    </tbody>
  </table>
</div>

</body>
</html>