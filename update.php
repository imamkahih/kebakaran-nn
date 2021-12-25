<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@0,700;1,400&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="app.css">

  <title>Prediction Forest Fire's</title>
</head>

<body>
  <?php
  include "./template/navbar.php";
  require "./system.php";

  $data = query("SELECT * FROM datacenter WHERE id = " . $_GET['i'] . " ")[0];
  ?>

  <div class="container">
    <div class="row justify-content-center my-4">
      <div class="col-md-8 px-0">
        <h3 class="m-0 fw-bold text-secondary">UPDATE THE INCIDENT</h3>
      </div>
      <div class="col-md-8 rounded px-3 pt-3 mt-4 predict-page">
        <form action="" class="mb-4" method="POST">
          <div class="d-flex justify-content-center mb-4">
            <div class="input-group w-50 mb-4">
              <input type="date" name="tgl" value="<?= $data[1]; ?>" class="form-control text-center fs-5" placeholder="DATE" required autofocus>
            </div>
          </div>
          <div class="d-flex justify-content-center gap-4 flex-wrap">
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">TEMP (c&#176;)</p>
              <input type="number" value="<?= $data[2]; ?>" name="temp" class="basic-form-control" min="22" max="42" step=".0" placeholder="42" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">RM (%)</p>
              <input type="number" value="<?= $data[3]; ?>" name="rm" class="basic-form-control" min="21" max="90" placeholder="90" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">Wind Speed (km/h)</p>
              <input type="number" value="<?= $data[4]; ?>" name="ws" class="basic-form-control" min="6" max="29" placeholder="29" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">RAIN (mm/m<sup>2</sup>)</p>
              <input type="number" value="<?= $data[5]; ?>" name="rain" class="basic-form-control" min="0" max="16.8" step="0.01" placeholder="16,8" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">FFMC</p>
              <input type="number" value="<?= $data[6]; ?>" name="ffmc" class="basic-form-control" min="28.6" max="92.5" step="0.01" placeholder="92,5" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">DMC</p>
              <input type="number" value="<?= $data[7]; ?>" name="dmc" class="basic-form-control" min="1.1" max="65.9" step="0.01" placeholder="65,9" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">DC</p>
              <input type="number" value="<?= $data[8]; ?>" name="dc" class="basic-form-control" min="7" max="220.4" step="0.01" placeholder="220,4" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">ISI</p>
              <input type="number" value="<?= $data[9]; ?>" name="isi" class="basic-form-control" min="0" max="18.5" step="0.01" placeholder="18,5" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">BUI</p>
              <input type="number" value="<?= $data[10]; ?>" name="bui" class="basic-form-control" min="1.1" max="68" step="0.01" placeholder="68" required>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">FWI</p>
              <input type="number" value="<?= $data[11]; ?>" name="fwi" class="basic-form-control" min="0" max="31.1" step="0.01" placeholder="31,1" required>
            </div>
          </div>
          <div class="d-flex text-left  justify-content-center">
            <div class="incidentBox d-flex gap-3 my-4 p-3 rounded">
              <div class="form-check">
                <input class="form-check-input" type="radio" <?= $data[12] == 0 ? 'checked' : ''; ?> value="0" name="incident" id="no-fire">
                <label class="form-check-label" for="no-fire">
                  <h4 class="fw-bold m-0 text-success"><i class="fab fa-envira"></i> NOT FIRE</h4>
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" <?= $data[12] == 1 ? 'checked' : ''; ?> value="1" name="incident" id="fire">
                <label class="form-check-label" for="fire">
                  <h4 class="fw-bold m-0 text-danger"><i class="fas fa-fire-alt"></i> ON FIRE</h4>
                </label>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-lg btn-success fw-bold">SAVE</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    update($_POST, $data[0]);
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
  </script>
</body>

</html>