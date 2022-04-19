<?php 
    include "db.php";

    //Everything in a function is in a local scope
//So nothing gets in unless you put it in
//yourself
//hence making connection var global
  function showAllData()
  {
    global $connection;
    $query = "SELECT id FROM users";
    $result = mysqli_query($connection, $query);
     if (!$result) {
       //all commands stop
       die('Query FAILED' . mysqli_error($connection));
     }

     while ($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
       //// TODO: always set the value otherwise the post won't read the it
       echo " <option value='$id'>$id</option>";
     }
  }

  function ReadUsers()
  {
    global $connection;
    $query = "SELECT * FROM loadshedding";
    $result = mysqli_query($connection, $query);
     if (!$result) {
       //all commands stop
       die('Query FAILED' . mysqli_error($connection));
     }
     while ($row = mysqli_fetch_assoc($result)) {
      echo "<pre>";
         print_r($row);
      echo "</pre>";
     }
  }

?>