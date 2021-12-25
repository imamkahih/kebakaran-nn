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
  $tittle = 'about';
  include "./template/navbar.php";

  ?>

  <div class="container">
    <div class="row justify-content-center my-4">
      <div class="col-md-8 rounded p-3 mt-4">
        <div class="my-4">
          <h4 class="fw-bold">Temprature (c&#176;)</h4>
          <p class="text-secondary">Determine the degree of temperature in an area, where the higher the temperature,
            the hotter the temperature in the area. In this program, the unit is Celsius(c&#176;). </p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Relative Humidity (%)</h4>
          <p class="text-secondary">One of the units commonly used to represent the number of water droplets in the air.
            Ideally the RH is between 50 - 55% which indicates that the air is half filled with the maximum water
            capacity that can be accommodated.</p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Wind Speed (km/h)</h4>
          <p class="text-secondary">Air flow velocity from high pressure to low pressure in km/h. Normally the wind
            speed ranges from 5-30 km/h.</p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Rain (mm/m<sup>2</sup>)</h4>
          <p class="text-secondary">Measuring the height of the amount of water that is accommodated in a place / area.
            In this program take the size mm/m<sup>2</sup>. </p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Fire Fuel Moisture Code (FFMC)</h4>
          <p class="text-secondary">Indicates the level of potential ease of fire in the soil surface layer.</p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Duff Moisture Code (DMC)</h4>
          <p class="text-secondary">Shows the average moisture level of organic soil that is not compacted.</p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Drought Code (DC)</h4>
          <p class="text-secondary">Shows the potential ease of fire in terms of weather parameters on organic matter in
            the subsurface layer of soil and wood material.
          </p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Initial Spread Index (ISI)</h4>
          <p class="text-secondary">This is a numerical rating of the expected rate of fire spread.</p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Build Up Index (BUI)</h4>
          <p class="text-secondary">a numerical rating of the total amount of fuel available for combustion.</p>
        </div>
        <div class="my-4">
          <h4 class="fw-bold">Fire Weather Index (FWI)</h4>
          <p class="text-secondary">Indicates the potential magnitude of the fire in the event of a fire.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
  </script>
</body>

</html>