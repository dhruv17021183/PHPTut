<?php
if(isset($_POST['submitForm'])){
    $outputNumber=0;
    $inputNumber=(float)$_POST['inputnumber'];
    $inputFormat=$_POST['inputformat'];
    $outputFormat=$_POST['outputformat'];

    switch($inputFormat){
        case "kg":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber;break;
                case "g": $outputNumber = $inputNumber*1000;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*1000000;break;
                case "mt": $outputNumber = $inputNumber*0.001;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*0.0009842073;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*0.0011023122;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*2.2046244202;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*35.273990723;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*5000;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*6.022136652E+26;break;  //METER TO FT
            }
        break;
        case "g":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber*0.001;break;
                case "g": $outputNumber = $inputNumber*1;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*1000;break;
                case "mt": $outputNumber = $inputNumber*0.000001;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*9.842073304E-7;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*0.0000011023;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*0.0022046244;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*0.0352739907;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*5;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*6.022136652E+23;break;  //METER TO FT
            }
        break;
        case "mg":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber*0.000001;break;
                case "g": $outputNumber = $inputNumber*0.001;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*1;break;
                case "mt": $outputNumber = $inputNumber*9.999999999E-10;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*9.842073304E-10;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*1.10231221E-9;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*0.0000022046;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*0.000035274;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*0.005;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*602213665200000000000;break;  //METER TO FT
            }
        break;
        case "mt":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber*1000;break;
                case "g": $outputNumber = $inputNumber*1000000;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*1000000000;break;
                case "mt": $outputNumber = $inputNumber*1;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*0.9842073304;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*1.1023122101;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*2204.6244202;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*35273.990723;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*5000000;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*6.022136652E+29;break;  //METER TO FT
            }
        break;
        case "lt":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber*1016.04608;break;
                case "g": $outputNumber = $inputNumber*1016046.08;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*1016046080;break;
                case "mt": $outputNumber = $inputNumber*1.01604608;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*1;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*1.12;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*2240;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*35840;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*5080230.4;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*6.118768338E+29;break;  //METER TO FT
          
            }
        break;
        case "st":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber*907.184;break;
                case "g": $outputNumber = $inputNumber*907184;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*907184000;break;
                case "mt": $outputNumber = $inputNumber*0.907184;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*0.8928571429;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*1;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*2000;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*32000;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*4535920;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*5.463186016E+29;break;  //METER TO FT
          
            }
        break;
        case "pound":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber*0.453592;break;
                case "g": $outputNumber = $inputNumber*453.592;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*453592;break;
                case "mt": $outputNumber = $inputNumber*0.000453592;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*0.0004464286;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*0.0005;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*1;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*16;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*2267.96;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*2.731593008E+26;break;  //METER TO FT
          
            }
        break;
        case "ounce":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber*0.0283495;break;
                case "g": $outputNumber = $inputNumber*28.3495;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*28349.5;break;
                case "mt": $outputNumber = $inputNumber*0.0000283495;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*0.0000279018;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*0.00003125;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*0.0625;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*1;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*141.7475;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*1.70724563E+25;break;  //METER TO FT
          
            }
        break;
        case "carrat":
            switch($outputFormat){
                case "kg": $outputNumber=$inputNumber*0.0002;break;
                case "g": $outputNumber = $inputNumber*0.2;break;           //METER TO METER
                case "mg": $outputNumber = $inputNumber*200;break;
                case "mt": $outputNumber = $inputNumber*2.E-7;break;          //METER TO CM
                case "lt": $outputNumber = $inputNumber*1.96841466E-7;break;  //METER TO Milli
                case "st": $outputNumber = $inputNumber*2.20462442E-7;break;  //METER TO FT
                case "pound": $outputNumber = $inputNumber*0.0004409249;break;  //METER TO FT
                case "ounce": $outputNumber = $inputNumber*0.0070547981;break;  //METER TO FT
                case "carrat": $outputNumber = $inputNumber*1;break;  //METER TO FT
                case "amu": $outputNumber = $inputNumber*1.20442733E+23;break;  //METER TO FT
          
            }
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
        <a class="navbar-brand">Weight<span class="joe"> Measurement</span></a>
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
<form action="weight.php" method="post">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="number" class="col-form-label">From:</label>
            </div>
            <div class="col-auto">
              <input type="number" value="<?php if(isset($_POST['submitForm'])){ echo $inputNumber;} ?>" id="inputPassword6" class="form-control" name="inputnumber" aria-describedby="passwordHelpInline">
            </div>
            <select class="vk" aria-label="Default select example" name="inputformat">
                <option value="kg" <?php if(isset($inputFormat) && $inputFormat=="kg") echo "selected";?>>Kilogram</option>
                <option value="g" <?php if(isset($inputFormat) && $inputFormat=="g") echo "selected";?>>Gram</option>
                <option value="mg" <?php if(isset($inputFormat) && $inputFormat=="mg") echo "selected";?>>Milligram</option>
                <option value="mt" <?php if(isset($inputFormat) && $inputFormat=="mt") echo "selected";?>>Metric Ton</option>
                <option value="lt" <?php if(isset($inputFormat) && $inputFormat=="lt") echo "selected";?>>Long Ton</option>
                <option value="st" <?php if(isset($inputFormat) && $inputFormat=="st") echo "selected";?>>Short Ton</option>
                <option value="pound" <?php if(isset($inputFormat) && $inputFormat=="pound") echo "selected";?>>pound</option>
                <option value="ounce" <?php if(isset($inputFormat) && $inputFormat=="ounce") echo "selected";?>>Ounce</option>
                <option value="carrat" <?php if(isset($inputFormat) && $inputFormat=="carrat") echo "selected";?>>Carrat</option>
                <option value="amu" <?php if(isset($inputFormat) && $inputFormat=="amu") echo "selected";?>>Atomic Mass Unit</option>
              </select>
            <div class="col-auto">
                <label for="number" class="col-form-label">To:</label>
              </div>
              <div class="col-auto">
                <input type="number" value="<?php echo $outputNumber; ?>" id="inputPassword6" class="form-control" name="outputnumber" aria-describedby="passwordHelpInline" name="outputformat">
              </div>
              <select class="vk" aria-label="Default select example" name="outputformat">
                <option value="kg" <?php if(isset($outputFormat) && $outputFormat=="kg") echo "selected";?>>Kilogram</option>
                <option value="g" <?php if(isset($outputFormat) && $outputFormat=="g") echo "selected";?>>Gram</option>
                <option value="mg" <?php if(isset($outputFormat) && $outputFormat=="mg") echo "selected";?>>Milligram</option>
                <option value="mt" <?php if(isset($outputFormat) && $outputFormat=="mt") echo "selected";?>>Metric Ton</option>
                <option value="lt" <?php if(isset($outputFormat) && $outputFormat=="lt") echo "selected";?>>Long Ton</option>
                <option value="st" <?php if(isset($outputFormat) && $outputFormat=="st") echo "selected";?>>Short Ton</option>
                <option value="pound" <?php if(isset($outputFormat) && $outputFormat=="pound") echo "selected";?>>pound</option>
                <option value="ounce" <?php if(isset($outputFormat) && $outputFormat=="ounce") echo "selected";?>>Ounce</option>
                <option value="carrat" <?php if(isset($outputFormat) && $outputFormat=="carrat") echo "selected";?>>Carrat</option>
                <option value="amu" <?php if(isset($outputFormat) && $outputFormat=="amu") echo "selected";?>>Atomic Mass Unit</option>
              </select>
      
            </div>
     </div>
     <!-- <input type="submit" name="submitForm" value="Convert!" /> -->
     <button type="submit" class="vk1 btn btn-success" value="Convert" name="submitForm">Convert</button>

  </form>
</body>
</html>
