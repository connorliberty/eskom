<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php include "includes/header.php" ?>
    <div class="container-sm">
      <h1 class="text-center">Read user table</h1>
        <div class="col-sm-6">

          <?php
            ReadUsers();
          ?>
<!--
          <?php
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <pre>
                  <?php
                      print_r($row);
                  ?>
              </pre>
            <?php
            }
          ?> -->

        </div>
    </div>