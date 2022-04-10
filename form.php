<!DOCTYPE html>
<?php
if (isset($_POST["vote"])) {
  setcookie("vote", $_POST["vote"], time() + 360);
} else {
  setcookie("vote", null, time() + 360);
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>

</head>

<body style="margin-top: 20px;margin:auto;width: 50%;">
  <div class="mx-0 mx-sm-auto">
    <div class="card">
      <div class="card-header bg-primary">
        <h5 class="card-title text-white mt-2" id="exampleModalLabel">Feedback request</h5>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
          <p>
            <strong>Your opinion matters</strong>
          </p>
          <p>
            Comment voyez vous la qualité du contenu du cours PHP ?
            <strong>Give us your feedback.</strong>
          </p>
        </div>

        <hr />

        <form class="px-4" action="./form.php" ) method="post">
          <p class="text-center"><strong>Your rating:</strong></p>

          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="vote" value="Bon" id="radio3Example1" />
            <label class="form-check-label" for="radio3Example1">
              Bon
            </label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="vote" value="Moyen" id="radio3Example2" />
            <label class="form-check-label" for="radio3Example2">
              Moyen
            </label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="vote" value="Mauvais" id="radio3Example3" />
            <label class="form-check-label" for="radio3Example3">
              Mauvais
            </label>
          </div>
          <input type="submit" class="btn btn-primary">


        </form>
      </div>

    </div>
  </div>
  <?php

  if (isset($_COOKIE["vote"]) && ($_SERVER["REQUEST_METHOD"] == "POST")) {

    echo '<script>alert("you have already filled the survey ,\nyour vote :   ' . $_COOKIE["vote"] . '.")</script>';
  }

  ?>


</body>

</html>