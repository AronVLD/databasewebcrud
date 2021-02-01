<?php
 include("./connectdb.php");

 $sql = "SELECT * FROM `users`";
 $result = mysqli_query($conn, $sql);

 $records = "";
 while ($record = mysqli_fetch_assoc($result)) {
  $records .="<tr>
          <th scope='row'>" . $record["id"] . "</th>
          <td> " . $record["naam"] . "</td>
          <td> " . $record["email"] . "</td>
          <td> " . $record["password"] . "</td>
          <td> " . $record["gender"] . "</td>
          <td> " . $record["koekjes"] . "</td>
          <td>
              <a href='./index.php?content=update&id=". $record["id"] . "'>
                 <img src='./img/b_edit.png' alt='pencil'>
              </a>
          </td>
          <td>
              <a href='./index.php?content=delete&id=". $record["id"] . "'>
                <img src='./img/b_drop.png' alt='cross'>
              </a>
          </td>>
      <tr>";
}
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">naam</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">gender</th>
      <th scope="col">koekjes</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
       echo $records;
      ?>
  </tbody>
</table>