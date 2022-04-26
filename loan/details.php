<?php require "template/header.php"; ?>
<br>
<div class="card border-primary mb-3" style="max-width: 100%;">
    <div class="card-header">
        <center>
            <h2>
                Details of <?php
                            $utangID = $_GET['utangID'];
                            $sql = "SELECT * FROM tbl_utang WHERE utangID = '$utangID'";
                            $result = $conn->query($sql);

                            while ($row = $result->fetch_array()) {
                                echo " " . $row['fName'] . ' ' . $row['lName'];
                            }
                            ?>
            </h2>
        </center>
        <a href="javascript:history.back()"><button class="btn btn-outline-warning">Back to home</button></a>
    </div>
    <div class="card-body">
        <table border="1" width="90%" class="table table-hover">
            <thead>
                <tr class="table-success">
                    <!-- <th scope="col">
                        <center>ID
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
                        <center>Interest Rate
                    </th>
                    <th scope="col">
                        <center>Total Interest
                    </th>
                    <th scope="col">
                        <center>Total Payment
                    </th>
                </tr>
            </thead>
            <?php
            $utangID = $_GET['utangID'];
            $sql = "SELECT * FROM tbl_utang WHERE utangID = '$utangID'";
            $result = $conn->query($sql);



            while ($row = $result->fetch_array()) {

                // arithmetic
                $amntborrowed = $row['amntBorrowed'];
                $rate = $row['rate'];
                $interestRate = $rate / 100;
                $totalInterest = $amntborrowed * $interestRate;
                $totalPayment = $amntborrowed + $totalInterest;

                echo '<tr class="table-secondary">';
                // echo '<td align="center">' . $row['utangID'] . '</td>';
                echo '<td align="center">' . $row['lName'] . '</td>';
                echo '<td align="center">' . $row['fName'] . '</td>';
                echo '<td align="center">' . $row['mName'] . '</td>';
                echo '<td align="center">' . number_format($amntborrowed, 2) . '</td>';
                echo '<td align="center">' . $row['terms'] . '</td>';
                echo '<td align="center">' . $row['rate'] . '</td>';
                echo '<td align="center">' . number_format($totalInterest, 2) . '</td>';
                echo '<td align="center">' . number_format($totalPayment, 2) . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
        <br />
        <table border="1" width="90%" class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col">
                        <center>Terms
                    </th>
                    <th scope="col">
                        <center>Beginning Balance
                    </th>
                    <th scope="col">
                        <center>Payment
                    </th>
                    <th scope="col">
                        <center>Ending Balance
                    </th>
                </tr>
            </thead>
            <?php
            $utangID = $_GET['utangID'];
            $sql = "SELECT * FROM tbl_utang WHERE utangID = '$utangID'";
            $result = $conn->query($sql);

            while ($row = $result->fetch_array()) {

                $terms = $row['terms'];
                $termCounter = 1;
                $amntBorrowed = $row['amntBorrowed'];
                $rate = $row['rate'];
                $interestRate = $rate / 100;
                $interest = $amntBorrowed * $interestRate;
                $totalPayment = $amntBorrowed + $interest;
                $payment = ($amntborrowed + $interest) / $terms;
                $bgnBalance = $totalPayment;
                $endBalance = $bgnBalance;

                while ($termCounter != $terms + 1) {

                    echo '<tr class="table-active">';
                    echo '<td align="center">' . $termCounter . '</td>';
                    echo '<td align="center">' . number_format($bgnBalance, 2) . '</td>';
                    echo '<td align="center">' . number_format($payment, 2) . '</td>';
                    $endBalance = $bgnBalance - $payment;
                    echo '<td align="center">' . number_format($endBalance, 2) . '</td>';
                    echo '</tr>';

                    $bgnBalance -= $payment;
                    $termCounter++;
                }
            }

            ?>
        </table>

    </div>
</div>
<?php require "template/footer.php"; ?>