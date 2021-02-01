<?php
    $id = $_GET["id"];
    include("./connectdb.php");
    include("./functions.php");
    $sql = "SELECT * FROM `users` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    $record = mysqli_fetch_assoc($result);
?>

<form action="./update_script.php" method="post">
  <div class="mb-3">
    <label for="naam" class="form-label">Naam</label>
    <input type="text" class="form-control" id="naam" placeholder="name" name="naam" value="<?php echo $record["naam"] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
      placeholder="email-adress" name="email" value="<?php echo $record["email"] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password" value="<?php echo $record["password"] ?>">
  </div>
  <div class="form-floating">
    <label for="floatingSelect">Choose your gender</label>
    <br>
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="gender" value="<?php echo $record["gender"] ?>">
      <option selected>Open this select menu</option>
      <option value="Male" <?php if($record["gender"] == "Male") {echo "selected";} ?>>Male</option>
      <option value="Female" <?php if($record["gender"] == "Female") {echo "selected";} ?>>Female</option>
      <option value="Rather not say" <?php if($record["gender"] == "Rather not say") {echo "selected";} ?>>Rather not say</option>
    </select>
  </div>
  <div class="form-floating">
    <label for="floatingSelect">Houd jij van koekjes?</label>
    <br>
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="koekjes" value="<?php echo $record["koekjes"] ?>">
      <option selected>Open this select menu</option>
      <option value="Ja" <?php if($record["koekjes"] == "Ja") {echo "selected";} ?>>Ja</option>
      <option value="Nee" <?php if($record["koekjes"] == "Nee") {echo "selected";} ?>>Nee</option>
      <option value="Rather not say" <?php if($record["koekjes"] == "Rather not say") {echo "selected";} ?>>Rather not say</option>
    </select>
    <input type="hidden" values="<?php echo $id; ?>" name="id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>