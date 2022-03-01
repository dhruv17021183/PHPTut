<?php 
if(isset($_POST['submitForm'])){
  $outputNumber=0;
  $inputNumber=(float)$_POST['inputnumber']; //take inputvalue from the form 
  $inputFormat=$_POST['inputformat'];        //take inputformat from the form example meter,kilometer etc
  $outputFormat=$_POST['outputformat'];      //take outputformat from the form example meter,kilometer etc
    
    switch($inputFormat){
        case "cubicm" :
            switch($outputFormat){
                case "cubicm" :$outputNumber=$inputNumber; break;
                case "liter" :$outputNumber=$inputNumber*1000; break;
                case "tablespoon" :$outputNumber=$inputNumber*67628.045404; break;
                case "cup" :$outputNumber=$inputNumber*4226.7528377; break;
                case "gallon" :$outputNumber=$inputNumber*264.17205236; break;
                
              }
        break;
        case "liter" :
            switch($outputFormat){
                case "cubicm" :$outputNumber=$inputNumber*0.001; break;
                case "liter" :$outputNumber=$inputNumber*1; break;
                case "tablespoon" :$outputNumber=$inputNumber*67.628045404; break;
                case "cup" :$outputNumber=$inputNumber*4.2267528377; break;
                case "gallon" :$outputNumber=$inputNumber*0.2641720524; break;
                  
            }
        break;
        case "tablespoon" :
            switch($outputFormat){
              case "cubicm" :$outputNumber=$inputNumber*0.0000147868; break;
              case "liter" :$outputNumber=$inputNumber*0.0147867648; break;
              case "tablespoon" :$outputNumber=$inputNumber*1; break;
              case "cup" :$outputNumber=$inputNumber*0.0625; break;
              case "gallon" :$outputNumber=$inputNumber*0.00390625; break;
                
            }
        break;
        case "cup" :
          switch($outputFormat){
            case "cubicm" :$outputNumber=$inputNumber*0.0002365882; break;
            case "liter" :$outputNumber=$inputNumber*0.2365882365; break;
            case "tablespoon" :$outputNumber=$inputNumber*16; break;
            case "cup" :$outputNumber=$inputNumber*1; break;
            case "gallon" :$outputNumber=$inputNumber*0.0625; break;
              
          }
        break;
        case "gallon" :
          switch($outputFormat){
            case "cubicm" :$outputNumber=$inputNumber*0.0037854118; break;
            case "liter" :$outputNumber=$inputNumber*3.785411784; break;
            case "tablespoon" :$outputNumber=$inputNumber*256; break;
            case "cup" :$outputNumber=$inputNumber*16; break;
            case "gallon" :$outputNumber=$inputNumber*1; break;
              
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
        <a class="navbar-brand">Volume And Capacity<span class="joe"> Measurement</span></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <style>
          body{
        background-color: #e3f2fd;
      }
      span{
        color: green;
      }
      .vk{
        margin-top: 120px;
        margin-left: -100px;
      }
      .vk1{
        margin-left: 90px;
      }
      .vk2{
        margin-top: 60px;
        border: 1px solid black;
        height: 70%;
        background-color: grey;
        box-shadow: 20px 20px 50px grey;
      }
    </style>
</head>
<body>
<div class="btn-group d-flex justify-content-center">
        <a href="lengthc.php" class="btn btn-outline-success" aria-current="page">Length</a>
        <a href="temparature.php" class="btn btn-outline-success">Temparature</a>
        <a href="area.php" class="btn btn-outline-success">Area</a>
        <a href="volume.php" class="btn btn-primary">Volume</a>
        <a href="weight.php" class="btn btn-outline-success">Weight</a>
        <a href="speed.php" class="btn btn-outline-success">Speed</a>
</div>
<form action="volume.php" method="post">
    <div class="vk2 container">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="number" class="col-form-label">From:</label>
            </div>
            <div class="col-auto">
              <input type="float number" value="<?php if(isset($_POST['submitForm'])){ echo $inputNumber;} ?>" id="inputPassword6" class="form-control" name="inputnumber" aria-describedby="passwordHelpInline">
            </div>
            <select class="vk" aria-label="Default select example" name="inputformat">
              <option value="cubicm" <?php if(isset($inputFormat) && $inputFormat=="cubicm") echo "selected";?>>Cubic Meter[m^3]</option>
              <option value="liter" <?php if(isset($inputFormat) && $inputFormat=="liter") echo "selected";?>>Liter[L,i]</option>
              <option value="tablespoon" <?php if(isset($inputFormat) && $inputFormat=="tablespoon") echo "selected";?>>Tablespoon(US)</option>
              <option value="cup" <?php if(isset($inputFormat) && $inputFormat=="cup") echo "selected";?>>Cup(US)</option>
              <option value="gallon" <?php if(isset($inputFormat) && $inputFormat=="gallon") echo "selected";?>>Gallon(US)</option>
          
            </select>
            <div class="col-auto">
                <label for="number" class="col-form-label">To:</label>
              </div>
              <div class="col-auto">
                <input type="number" value="<?php echo $outputNumber; ?>" id="inputPassword6" class="form-control" name="outputnumber" aria-describedby="passwordHelpInline" name="outputformat">
              </div>
              <select class="vk" aria-label="Default select example" name="outputformat">
                <option value="cubicm" <?php if(isset($outputFormat) && $outputFormat=="cubicm") echo "selected";?>>Cubic Meter[m^3]</option>
                <option value="liter" <?php if(isset($outputFormat) && $outputFormat=="liter") echo "selected";?>>Liter[L,i]</option>
                <option value="tablespoon" <?php if(isset($outputFormat) && $outputFormat=="tablespoon") echo "selected";?>>Tablespoon(US)</option>
                <option value="cup" <?php if(isset($outputFormat) && $outputFormat=="cup") echo "selected";?>>Cup(US)</option>
                <option value="gallon" <?php if(isset($outputFormat) && $outputFormat=="gallon") echo "selected";?>>Gallon(US)</option>
              </select>
              <button type="submit" class="vk1 btn btn-success" value="Convert" name="submitForm">Convert</button>
              <button type="submit" class="vk1 btn btn-danger" value="home" name="home"><a href="index.php" class="text-white">Home</a></button>
            </div>
     </div>
  </form>
</body>
</html>
