<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do</title>
</head>

<body>
  <form action="newtodo.php" method="POST">
    <div class="container">
      <div class="wrapper">
        <h1>To Do</h1>
        <div class="top-input">
          <input type="text" name="list" class="main_input">
          <button>ADD</button>
        </div>
      </div>
    </div>
  </form>

<!-- get to dos -->

<?php
include "config.php";
$allToDos = mysqli_query($conn, "SELECT * FROM todotable");
?>

<div class="todos-container">
<div class="todos-wrapper">
  <table class="table">
    <tbody>

    <?php 
    while($row = mysqli_fetch_array($allToDos)){
    ?>

      <tr>
        <td> <?php echo $row['id'] ?></td>
        <td><?php echo $row['list'] ?></td>
        <td><a href="delete.php? ID = <?php echo $row['id'] ?>">delete</a></td>
        <td><a href="update.php? ID = <?php echo $row['id'] ?>">update</a></td>
      </tr>

      <?php
    }
      ?>

    </tbody>
  </table>
  </div>
  </div>
</body>

</html>