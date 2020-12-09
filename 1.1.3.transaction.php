<?php include 'connection/connect.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Banking Management || Admin Panel</title>
    <link rel="icon" href="icons/title.ico">
    <link rel="stylesheet" href="css/panel.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="panel_body">
      <img src="images/panel-top.jpg" width="100%"> <br>
      <h3>:: Admin Panel ::</h3>
      <hr>
      <div style="width: 100%">
        <div class="part1">
          <a class="panel_a_p" href="1.1.1.admin_profile.php">Profile</a><br>
          <a class="panel_a_p" href="1.1.2.adminpanel_users.php">User details</a><br>
          <a class="panel_a_p" href="1.1.4.userinfo.php">Account information</a><br>
          <a class="panel_a_p" href="#">Transactions</a><br>
        </div>
        <div class="part2">
          <p class="table_title">:: Transaction list ::</p>
            <table>
              <tr>
                <th style="width: 20%">Transaction ID</th>
                <th style="width: 20%">Sender</th>
                <th style="width: 20%">Reciever</th>
                <th style="width: 20%">Transfer amount</th>
                <th style="width: 20%">Transaction Date</th>
              </tr>
              <?php
              $conn = mysqli_connect("localhost", "root", "", "register");
              $sql = "SELECT * FROM transfer;";
              $result = mysqli_query($conn, $sql);

              while($rows = mysqli_fetch_assoc($result)){
                echo "<tr><td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['ID']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['sender']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['reciever']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['amount']."</td>
                      <td style='font-size: 12pt; height: 22px; padding: 5px 7px;'>".$rows['trans_date']."</td></tr>";
              } ?>

            </table>
        </div>
      </div>

      <footer> <hr>
        <ul>
          <li><a class="foot" href="1.1.adminpanel.php">Home</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html></ht>
