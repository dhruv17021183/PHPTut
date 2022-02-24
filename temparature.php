<?php 
if(isset($_POST['submitForm'])){
    $outputNumber=0;
    $inputNumber=(float)$_POST['inputnumber'];
    $inputFormat=$_POST['inputformat'];
    $outputFormat=$_POST['outputformat'];
    
    switch($inputFormat){
        case "celsius" :
            switch($outputFormat){
                case "celsius" :$outputNumber=$inputNumber; break;
                case "fahrenheit" :$outputNumber=(float)(($inputNumber * 9 / 5) + 32); break;
                case "kelvin" :$outputNumber=(float)(($inputNumber+273.15)); break;
            }
        break;
        case "kelvin" :
            switch($outputFormat){
                case "celsius" :$outputNumber=(($inputNumber)-273.15); break;
                case "fahrenheit" :$outputNumber=((float)(($inputNumber-273.15)*(9/5))+32); break;
                case "kelvin" :$outputNumber=$inputNumber; break;
            }
        break;
        case "fahrenheit" :
            switch($outputFormat){
                case "celsius" :$outputNumber=($inputNumber-32)*(5/9); break;
                case "fahrenheit" :$outputNumber=$inputNumber; break;
                case "kelvin" :$outputNumber=(float)((5/9)*($inputNumber+459.67)); break;
            }
        break;
    }
  }
?>
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
        <a class="navbar-brand">Temperature<span class="joe"> Measurement</span></a>
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
    
    <!-- <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="lengthc.php">Length</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="temparature.php">Temperature</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="area.php">Area</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Volume</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Weight</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Time</a>
        </li>
      </ul> -->
      <div class="btn-group d-flex justify-content-center">
        <a href="lengthc.php" class="btn btn-primary" aria-current="page">Length</a>
        <a href="temparature.php" class="btn btn-secondary">Temparature</a>
        <a href="area.php" class="btn btn-primary">Area</a>
        <a href="volume.php" class="btn btn-secondary">Volume</a>
        <a href="weight.php" class="btn btn-primary">Weight</a>
        <a href="speed.php" class="btn btn-secondary">Time</a>
      </div>
    
  <form action="temparature.php" method="post">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="number" class="col-form-label">From:</label>
            </div>
            <div class="col-auto">
              <input type="number" value="<?php if(isset($_POST['submitForm'])){ echo $inputNumber;} ?>" id="inputPassword6" class="form-control" name="inputnumber" aria-describedby="passwordHelpInline">
            </div>
            <select class="vk" aria-label="Default select example" name="inputformat">
                <option value="celsius">Celsius</option>
                <option value="kelvin" >Kelvin</option>
                <option value="fahrenheit" <?php if(isset($inputFormat) && $inputFormat=="fahrenheit") echo "selected";?>>Fahrenheit</option>
              </select>
            <div class="col-auto">
                <label for="number" class="col-form-label">To:</label>
              </div>
              <div class="col-auto">
                <input type="number" value="<?php echo $outputNumber; ?>" id="inputPassword6" class="form-control" name="outputnumber" aria-describedby="passwordHelpInline" name="outputformat">
              </div>
              <select class="vk" aria-label="Default select example" name="outputformat">
              <option value="celsius" <?php if(isset($outputFormat) && $outputFormat=="celsius") echo "selected";?>>Celsius</option>
                <option value="kelvin" <?php if(isset($outputFormat) && $outputFormat=="kelvin") echo "selected";?>>Kelvin</option>
                <option value="fahrenheit" <?php if(isset($outputFormat) && $outputFormat=="fahrenheit") echo "selected";?>>Fahrenheit</option>
              </select>
      
            </div>
     </div>
     <!-- <input type="submit" name="submitForm" value="Convert!" /> -->
     <button type="submit" class="vk1 btn btn-success" value="Convert" name="submitForm">Convert</button>
  </form>
</body>
</html>