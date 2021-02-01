<form action="./create.php" method="post">
  <div class="mb-3">
    <label for="naam" class="form-label">Naam</label>
    <input type="text" class="form-control" id="naam" placeholder="name" name="naam">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
      placeholder="email-adress" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
  </div>
  <div class="form-floating">
    <label for="floatingSelect">Choose your gender</label>
    <br>
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="gender">
      <option selected>Open this select menu</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Rather not say">Rather not say</option>
    </select>
  </div>
  <div class="form-floating">
    <label for="floatingSelect">Houd jij van koekjes?</label>
    <br>
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="koekjes">
      <option selected>Open this select menu</option>
      <option value="Ja">Ja</option>
      <option value="Nee">Nee</option>
      <option value="Rather not say">Rather not say</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>