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
  $tittle = "datacenter";
  include "./template/navbar.php";
  include "./system.php";
  $allData = query("SELECT id,tanggal,temprature,windspeed,rain,incident FROM datacenter ORDER BY tanggal DESC");

  //setting pagination
  $jumDataHlm = 25;
  $totalData = count($allData);
  $jumHlm = ceil($totalData / $jumDataHlm);
  $hlmActive = (isset($_GET["page"])) ? $_GET['page'] : 1;
  $awalData = ($jumDataHlm * $hlmActive) - $jumDataHlm;

  $dataPerHlm = query("SELECT id,tanggal,temprature,windspeed,rain,incident FROM datacenter ORDER BY tanggal DESC LIMIT $awalData,$jumDataHlm");
  ?>
  <div class="container">
    <div class="row justify-content-center my-4">
      <div class="col-md-12 mt-4 overflow-auto">
        <div class="d-flex justify-content-between align-items-center my-3">
          <h3 class="m-0 fw-bold text-secondary">DATA CENTER</h3>
          <a href="add.php" class="btn btn-success"><i class="fas fa-plus"></i> ADD NEW INCIDENT</a>
        </div>
        <table class="table text-center align-middle">
          <thead>
            <tr class="align-middle">
              <th scope="col">#</th>
              <th scope="col">Date</th>
              <th scope="col">Tempature</th>
              <th scope="col">WIND SPEED</th>
              <th scope="col">RAIN</th>
              <th scope="col">INCIDENT</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($dataPerHlm as $key => $data) { ?>
              <tr>
                <th scope="row"><?= $awalData + 1 ?></th>
                <td><?= date_format(date_create($data[1]), "d F Y"); ?></td>
                <td><?= $data[2]; ?></td>
                <td><?= $data[3]; ?></td>
                <td><?= $data[4] ?></td>
                <?= $data[5] == 0 ? '<td class="text-success fw-bold"><i class="fab fa-envira"></i> NOT FIRE</td>' : '<td class="text-danger fw-bold"><i class="fas fa-fire-alt"></i> ON FIRE</td>'; ?>
                <td class="d-flex gap-2 justify-content-center">
                  <a href="detail.php?i=<?= $data[0]; ?>" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></a>
                  <form action="" method="POST">
                    <input type="hidden" value="<?= $data[0] ?>" name="id">
                    <button type="submit" name="del" class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure, want to delete this incident?')">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            <?php $awalData++;
            } ?>
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item <?= ($hlmActive - 1 == 0) ? ' disabled' : ''; ?>">
                <a class="page-link" href="datacenter.php?page=<?= $hlmActive - 1; ?>">Previous</a>
              </li>
              <?php
              for ($i = 1; $i <= $jumHlm; $i++) {
                if ($hlmActive == $i) {
                  $active = " active";
                } else {
                  $active = "";
                }
                echo '<li class="page-item' . $active . ' "><a class="page-link" href="datacenter.php?page=' . $i . '">' . $i . '</a></li>';
              }
              ?>
              <li class="page-item<?= ($hlmActive == $jumHlm) ? ' disabled' : ''; ?>">
                <a class="page-link" href="datacenter.php?page=<?= $hlmActive + 1; ?>">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <?php
  //btn hapus action
  if (isset($_POST['del'])) {
    delete($_POST['id']);
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
  </script>
</body>

</html>