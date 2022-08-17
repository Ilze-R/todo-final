<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
</head>

<?php 
$id = $_GET['ID'];
include "config.php";
$Rdata = mysqli_query($conn, "SELECT * FROM todotable WHERE id = $id");
$data = mysqli_fetch_array($Rdata);
?>

<body>
<form action="newtodo.php" method="POST">
    <div class="container">
      <div class="wrapper">
        <h1>Update</h1>
        <div class="top-input">
          <input type="text" value="<?php echo $data['list'] ?>" name="list" class="main_input">
          <button>UPDATE</button>
          <input type="hidden" name="id" value=" <?php echo $data['Id'] ?>">
        </div>
      </div>
    </div>
  </form>
</body>
</html>