<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Page</title>
</head>
<body>
  <div>
    <div>

    <?php
      require('../query/fetch-user.php');
      ?>
      <p>Name: <?php echo $row['first_name'] . " " . $row['last_name'];?></p>
      <p>Age: <?php echo $row['age'];?></p>
      <p>email: <?php echo $row['email'];?></p>
      
      <?php 
      $_SESSION['fk-user-id'] = $user_id; // Use the $user_id variable retrieved from fetch-user.php

      require('../query/fetch-result.php');

      while ($row = $result->fetch_assoc()) {
      ?>
      <p>Date Taken: <?php echo $row['created_at'];?></p>
    </div>
    <div>
      <p>Result: <?php echo $row['result'];?></p>
      <?php $result1 = $row['result']; } 
      include("../query/diagnose.php"); 
      
      ?>
      <p>Diagnosis: <?php echo $diagnose;?></p>  
      <p>Recommendation: <?php echo $reco;?></p>
    </div>

    <div>
      <form action="">
        <button>Home</button>
        <button>Print</button>
        <button>Download</button>
      </form>
    </div>
  </div>
</body>
</html>