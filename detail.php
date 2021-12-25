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
  $tittle = 'datacenter';
  include "./template/navbar.php";
  require "./system.php";

  $data = query("SELECT * FROM datacenter WHERE id = " . $_GET['i'] . " ")[0];
  ?>

  <div class="container">
    <div class="row justify-content-center my-4">
      <div class="col-md-8 px-0">
        <h3 class="m-0 fw-bold text-secondary">DETAIL INCIDENT</h3>
      </div>
      <div class="col-md-8 rounded px-3 pt-3 mt-4 predict-page">
        <form action="" class="mb-4" method="POST">
          <div class="d-flex justify-content-center mb-4">
            <div class="input-group w-50 mb-4">
              <input type="date" name="tgl" class="form-control text-center fs-5" placeholder="DATE" readonly value="<?= $data[1]; ?>">
            </div>
          </div>
          <div class="d-flex justify-content-center gap-4 mb-4 flex-wrap">
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">TEMP (c&#176;)</p>
              <input type="number" name="temp" value="<?= $data[2]; ?>" class="basic-form-control" min="22" max="42" step=".0" placeholder="42" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">RM (%)</p>
              <input type="number" name="rm" value="<?= $data[3]; ?>" class="basic-form-control" min="21" max="90" placeholder="90" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">Wind Speed (km/h)</p>
              <input type="number" name="ws" value="<?= $data[4]; ?>" class="basic-form-control" min="6" max="29" placeholder="29" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">RAIN (mm/m<sup>2</sup>)</p>
              <input type="number" name="rain" value="<?= $data[5]; ?>" class="basic-form-control" min="0" max="16.8" step="0.01" placeholder="16,8" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">FFMC</p>
              <input type="number" name="ffmc" value="<?= $data[6]; ?>" class="basic-form-control" min="28.6" max="92.5" step="0.01" placeholder="92,5" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">DMC</p>
              <input type="number" name="dmc" value="<?= $data[7]; ?>" class="basic-form-control" min="1.1" max="65.9" step="0.01" placeholder="65,9" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">DC</p>
              <input type="number" name="dc" value="<?= $data[8]; ?>" class="basic-form-control" min="7" max="220.4" step="0.01" placeholder="220,4" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">ISI</p>
              <input type="number" name="isi" value="<?= $data[9]; ?>" class="basic-form-control" min="0" max="18.5" step="0.01" placeholder="18,5" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">BUI</p>
              <input type="number" name="bui" value="<?= $data[10]; ?>" class="basic-form-control" min="1.1" max="68" step="0.01" placeholder="68" readonly>
            </div>
            <div class="base">
              <p class="m-0 fw-bold text-center text-2">FWI</p>
              <input type="number" name="fwi" value="<?= $data[11]; ?>" class="basic-form-control" min="0" max="31.1" step="0.01" placeholder="31,1" readonly>
            </div>
          </div>
          <?php
          if ($data[12] == 0) {
            echo '
                    <div class="d-flex justify-content-center">
                      <div class="result py-4">
                        <h3 class="no-fire"><i class="fab fa-envira"></i> NOT FIRE</h3>
                      </div>
                    </div>
                  ';
          } else {
            echo '
                    <div class="d-flex justify-content-center">
                      <div class="result py-4">
                        <h3 class="fire"><i class="fas fa-fire-alt"></i> ON FIRE !!!</h3>
                      </div>
                    </div>
                  ';
          }
          ?>
          <div class="d-flex justify-content-center mt-4">
            <a href="update.php?i=<?= $data[0] ?>" class="btn btn-lg btn-secondary fw-bold"><i class="fas fa-pen"></i>
              CHANGE</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    addData($_POST);
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
  </script>
</body>

</html>