<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>Document</title>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand">Volume And Capacity<span class="joe"> Measurement</span></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <style>
      .vk{
        margin-top: 120px;
        margin-left: -100px;
      }
      .vk1{
        margin-left: 90px;
      }
    </style>
</head>
<body>
<div class="btn-group d-flex justify-content-center">
        <a href="lengthc.php" class="btn btn-primary" aria-current="page">Length</a>
        <a href="temparature.php" class="btn btn-secondary">Temparature</a>
        <a href="area.php" class="btn btn-primary">Area</a>
        <a href="volume.php" class="btn btn-secondary">Volume</a>
        <a href="weight.php" class="btn btn-primary">Weight</a>
        <a href="speed.php" class="btn btn-secondary">Speed</a>
</div>
<form action="area.php" method="post">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="number" class="col-form-label">From:</label>
            </div>
            <div class="col-auto">
              <input type="number" value="<?php if(isset($_POST['submitForm'])){ echo $inputNumber;} ?>" id="inputPassword6" class="form-control" name="inputnumber" aria-describedby="passwordHelpInline">
            </div>
            <select class="vk" aria-label="Default select example" name="inputformat">
                <option value="sqmeter">Square Meter</option>
                <option value="sqkm">Square Kilometer</option>
                <option value="sqcm">Square Centimeter</option>
                <option value="sqmilli">Square Millimeter</option>
                <option value="sqmm">Square Micrometer</option>
                <option value="hectare">Hectare</option>
                <option value="Sqmile">Square Mile</option>
                <option value="sqyard">Square Yard</option>
                <option value="sqfoot">Square Foot</option>
                <option value="sqinches">Square Inch</option>
                <option value="Acre">Acre</option>
              </select>
            <div class="col-auto">
                <label for="number" class="col-form-label">To:</label>
              </div>
              <div class="col-auto">
                <input type="number" value="<?php echo $outputNumber; ?>" id="inputPassword6" class="form-control" name="outputnumber" aria-describedby="passwordHelpInline" name="outputformat">
              </div>
              <select class="vk" aria-label="Default select example" name="outputformat">
              <option value="sqmeter">Square Meter</option>
                <option value="sqkm" <?php if(isset($outputFormat) && $outputFormat=="sqkm") echo "selected";?>>Square Kilometer</option>
                <option value="sqcm" <?php if(isset($outputFormat) && $outputFormat=="sqcm") echo "selected";?>>Square Centimeter</option>
                <option value="sqmilli">Square Millimeter</option>
                <option value="sqmm">Square Micrometer</option>
                <option value="hectare">Hectare</option>
                <option value="Sqmile">Square Mile</option>
                <option value="sqyard">Square Yard</option>
                <option value="sqfoot">Square Foot</option>
                <option value="sqinches">Square Inch</option>
                <option value="Acre">Acre</option>
              </select>
      
            </div>
     </div>
     <!-- <input type="submit" name="submitForm" value="Convert!" /> -->
     <button type="submit" class="vk1 btn btn-success" value="Convert" name="submitForm">Convert</button>

  </form>
</body>
</html>
