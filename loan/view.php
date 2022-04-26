<?php require "template/header.php"; ?>

<br>


<div class="card border-primary mb-3" style="max-width: 100%;">
  <div class="card-header">

    <center>
      <b><h2>COMPLETE LIST</h2></h2></b>
    </center>
    <a href="index.php"><button type="submit" class="btn btn-outline-warning">BACK TO HOME</button></a>
    <a href="new.php"><button type="submit" class="btn btn-outline-success">NEW</button></a>
  </div>
  <div class="card-body">
    <table border="1" width="90%" class="table table-hover">
      <thead>
        <tr class="table-primary">
          <!-- <th scope="col">
            <center>Utang ID
          </th> -->
          <th scope="col">
            <center>Last Name
          </th>
          <th scope="col">
            <center>First Name
          </th>
          <th scope="col">
            <center>Middle Name
          </th>
          <th scope="col">
            <center>Amount Borrowed
          </th>
          <th scope="col">
            <center>Terms
          </th>
          <th scope="col">
            <center>Actions
          </th>
        </tr>
      </thead>
      <?php

      $sql = "SELECT * FROM tbl_utang";
      $result = $conn->query($sql);

      while ($row = $result->fetch_array()) {

        echo '<tr class="table-active">';
        // echo '<td align="center">' . $row['utangID'] . '</td>';
        echo '<td align="center">' . $row['lName'] . '</td>';
        echo '<td align="center">' . $row['fName'] . '</td>';
        echo '<td align="center">' . $row['mName'] . '</td>';
        echo '<td align="center">' . number_format($row['amntBorrowed'], 2) . '</td>';
        echo '<td align="center">' . $row['terms'] . '</td>';
        echo '<td align="center">
          <a href="details.php?utangID=' . $row['utangID'] . '"><button type="button" class="btn btn-outline-primary">Details</button></a>
          <a href="edit.php?utangID=' . $row['utangID'] . '"><button type="button" class="btn btn-outline-warning">EDIT</button></a>
			    <a href="serverside/delete.php?utangID=' . $row['utangID'] . '"onclick="return confirm(\'Are you sure you want to delete?\')"><button type="button" class="btn btn-outline-danger" >DELETE</button></a>
          </td>';
        echo '<tr>';
      }
      ?>
    </table>

  </div>
</div>

<?php require "template/footer.php"; ?>