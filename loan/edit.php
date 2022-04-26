<?php require "template/header.php"; ?>

<br />

<br />
<div class="card border-primary mb-3" style="max-width: 100%;">
    <div class="card-header">
        <center>
            <b>
                <h2>Edit Information of <?php
                                        $utangID = $_GET['utangID'];
                                        $sql = "SELECT * FROM tbl_utang WHERE utangID = '$utangID'";
                                        $result = $conn->query($sql);

                                        while ($row = $result->fetch_array()) {
                                            echo " " . $row['fName'].' '.$row['lName'];
                                        }
                                        ?>
                </h2>
            </b>
        </center>
        <a href="view.php"><button class="btn btn-outline-danger">Cancel</button></a>
    </div>
    <div class="card-body">
        <br />
        <?php
        $utangID = $_GET['utangID'];
        $sql = "SELECT * FROM tbl_utang WHERE utangID = '$utangID'";
        $result = $conn->query($sql);

        while ($row = $result->fetch_array()) {
        ?>
            <form method="POST" action="serverside/update.php">
                <table border="1" width="90%" class="table table-hover">
                    <div class="form-group">

                        <tr class="table-active">
                            <td>

                                <label class="col-form-label" for="lName"><b>Last Name</b></label>
                                <input type="text" class="form-control" placeholder="Last Name" id="lName" name="lName" value="<?php echo $row['lName']; ?>">

                            </td>
                            <td>

                                <label class="col-form-label" for="fName"><b>First Name</b></label>
                                <input type="text" class="form-control" placeholder="First Name" id="fName" name="fName" value="<?php echo $row['fName']; ?>">

                            </td>
                            <td>

                                <label class="col-form-label" for="mName"><b>Middle Name</b></label>
                                <input type="text" class="form-control" placeholder="Middle Name" id="mName" name="mName" value="<?php echo $row['mName']; ?>">

                            </td>
                        </tr>
                        <tr class="table-active">
                            <td>

                                <label class="col-form-label" for="amntBorrowed"><b>Amount Borrowed</b></label>
                                <input type="text" class="form-control" placeholder="Amount Borrowed" id="amntBorrowed" name="amntBorrowed" value="<?php echo $row['amntBorrowed']; ?>"></input>

                            </td>
                            <td>

                                <label class="col-form-label" for="terms"><b>Terms in Months</b></label>
                                <input type="text" class="form-control" placeholder="Terms in months" id="terms" name="terms" value="<?php echo $row['terms']; ?>">

                            </td>
                            <td>

                                <label class="col-form-label" for="rate"><b>Rate in percentage</b></label>
                                <input type="text" class="form-control" placeholder="Rate in percentage" id="rate" name="rate" value="<?php echo $row['rate']; ?>">

                            </td>
                        </tr>
                    </div>
                </table>
                <button type="submit" name="utangID" id="utangID" value="<?php echo $row['utangID']; ?>" class="btn btn-outline-success">Update</button>
            </form>

        <?php
        }
        ?>

    </div>
</div>

<?php require "template/footer.php"; ?>