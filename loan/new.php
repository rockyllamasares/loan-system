<?php require "template/header.php"; ?>

<br />

<br />
<div class="card border-primary mb-3" style="max-width: 100%;">
  <div class="card-header">
    <center>
      <b><h2>NEW</h2></b>
    </center>
    <a href="view.php"><button class="btn btn-outline-danger">Cancel</button></a>
  </div>
  <div class="card-body">
    <br />`
    <form method="POST" action="serverside/add.php">
      <table border="1" width="90%" class="table table-hover">
        <div class="form-group">
          <tr class="table-active">
            <td>

              <label class="col-form-label" for="lName"><b>Last Name</b></label>
              <input type="text" class="form-control" placeholder="Last Name" id="lName" name="lName" required>

            </td>
            <td>

              <label class="col-form-label" for="fName"><b>First Name</b></label>
              <input type="text" class="form-control" placeholder="First Name" id="fName" name="fName" required>

            </td>
            <td>

              <label class="col-form-label" for="mName"><b>Middle Name</b></label>
              <input type="text" class="form-control" placeholder="Middle Name" id="mName" name="mName">

            </td>
          </tr>
          <tr class="table-active">
            <td>

              <label class="col-form-label" for="amntBorrowed"><b>Amount Borrowed</b></label>
              <input type="number" class="form-control" placeholder="Amount Borrowed" id="amntBorrowed" name="amntBorrowed" required>

            </td>
            <td>

              <label class="col-form-label" for="terms"><b>Terms in Months</b></label>
              <input type="number" class="form-control" placeholder="Terms in months" id="terms" name="terms" required>

            </td>
            <td>

              <label class="col-form-label" for="rate"><b>Rate in percentage</b></label>
              <input type="number" class="form-control" placeholder="Rate in percentage" id="rate" name="rate" required>

            </td>
          </tr>
        </div>
      </table>
      <button type="submit" class="btn btn-outline-success">Add</button>

    </form>

  </div>
</div>

<?php require "template/footer.php"; ?>