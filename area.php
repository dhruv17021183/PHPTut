<?php
if(isset($_POST['submitForm'])){
$outputNumber=0;
$inputNumber=(float)$_POST['inputnumber'];
$inputFormat=$_POST['inputformat'];
$outputFormat=$_POST['outputformat'];

   switch($inputFormat){
       case "sqmeter":
         switch($outputFormat){
            case "sqmeter": 
                $outputNumber=$inputNumber;break;
                case "sqmeter": $outputNumber = $inputNumber;break;           //METER TO METER
                case "sqkm": $outputNumber = $inputNumber*.000001;break;
                case "sqcm": $outputNumber = $inputNumber*10000;break;          //METER TO CM
                case "sqmilli": $outputNumber = $inputNumber*1000000;break;  //METER TO Milli
                case "sqmm": $outputNumber = $inputNumber*1000000000000;break;  //METER TO FT
                case "hectare": $outputNumber = $inputNumber*0.0001;break;  //METER TO FT
                case "sqmile": $outputNumber = $inputNumber*3.861018768E-7;break;  //METER TO FT
                case "sqyard": $outputNumber = $inputNumber*1.1959900463;break;  //METER TO FT
                case "sqfoot": $outputNumber = $inputNumber*10.763910417;break;  //METER TO FT
                case "sqinches": $outputNumber = $inputNumber*1550.0031;break;//METER TO INCHES
                case "Acre": $outputNumber = $inputNumber*0.0002471054;break;//METER TO LightYears
                
            }
            break;
            case "sqkm":
              switch($outputFormat){
                case "sqkm": 
                    $outputNumber=$inputNumber;break;
                    case "sqmeter": $outputNumber = $inputNumber*1000000;break;           //METER TO METER
                    case "sqkm": $outputNumber = $inputNumber*1;break;
                    case "sqcm": $outputNumber = $inputNumber*10000000000;break;          //METER TO CM
                    case "sqmilli": $outputNumber = $inputNumber*1000000000000;break;  //METER TO Milli
                    case "sqmm": $outputNumber = $inputNumber*1000000000000000000;break;  //METER TO FT
                    case "hectare": $outputNumber = $inputNumber*100;break;  //METER TO FT
                    case "sqmile": $outputNumber = $inputNumber*0.3861018768;break;  //METER TO FT
                    case "sqyard": $outputNumber = $inputNumber*1195990.0463;break;  //METER TO FT
                    case "sqfoot": $outputNumber = $inputNumber*10763910.417;break;  //METER TO FT
                    case "sqinches": $outputNumber = $inputNumber*1550003100;break;//METER TO INCHES
                    case "Acre": $outputNumber = $inputNumber*247.10538147;break;//METER TO LightYears
                    
                }
                break;
            
                case "sqfoot":
                  switch($outputFormat){
                    case "foot": 
                        $outputNumber=$inputNumber;break;
                    case "sqmeter": $outputNumber = $inputNumber*0.09290304;break;           //METER TO METER
                    case "sqkm": $outputNumber = $inputNumber*9.290304E-8;break;
                    case "sqcm": $outputNumber = $inputNumber*929.0304;break;          //METER TO CM
                    case "sqmilli": $outputNumber = $inputNumber*92903.04;break;  //METER TO Milli
                    case "sqmm": $outputNumber = $inputNumber*92903040000;break;  //METER TO FT
                    case "hectare": $outputNumber = $inputNumber*0.0000092903;break;  //METER TO FT
                    case "sqmile": $outputNumber = $inputNumber*3.58700381E-8;break;  //METER TO FT
                    case "sqyard": $outputNumber = $inputNumber*0.1111111111;break;  //METER TO FT
                    case "sqfoot": $outputNumber = $inputNumber*1;break;  //METER TO FT
                    case "sqinches": $outputNumber = $inputNumber*144;break;//METER TO INCHES
                    case "Acre": $outputNumber = $inputNumber*0.0000229568;break;//METER TO LightYears
                    
                        
                    }
                break;
            
                case "sqinches":
                    switch($outputFormat){
                        case "sqinches": 
                            $outputNumber=$inputNumber;break;
                        case "sqmeter": $outputNumber = $inputNumber*0.00064516;break;           //METER TO METER
                        case "sqkm": $outputNumber = $inputNumber*6.4516E-10;break;
                        case "sqcm": $outputNumber = $inputNumber*6.4516;break;          //METER TO CM
                        case "sqmilli": $outputNumber = $inputNumber*645.16;break;  //METER TO Milli
                        case "sqmm": $outputNumber = $inputNumber*645160000;break;  //METER TO FT
                        case "hectare": $outputNumber = $inputNumber*6.4516E-8;break;  //METER TO FT
                        case "sqmile": $outputNumber = $inputNumber*2.490974868E-10;break;  //METER TO FT
                        case "sqyard": $outputNumber = $inputNumber*0.0007716049;break;  //METER TO FT
                        case "sqfoot": $outputNumber = $inputNumber*0.0069444444;break;  //METER TO FT
                        case "sqinches": $outputNumber = $inputNumber*1;break;//METER TO INCHES
                        case "Acre": $outputNumber = $inputNumber*1.594225079E-7;break;//METER TO LightYears
                        
                            
                        }
                break;  
                case "sqkm":
                  switch($outputFormat){
                    case "sqkm": 
                        $outputNumber=$inputNumber;break;
                    case "sqmeter": $outputNumber = $inputNumber*1000000;break;           //METER TO METER
                    case "sqkm": $outputNumber = $inputNumber*1;break;
                    case "sqcm": $outputNumber = $inputNumber*10000000000;break;          //METER TO CM
                    case "sqmilli": $outputNumber = $inputNumber*1000000000000;break;  //METER TO Milli
                    case "sqmm": $outputNumber = $inputNumber*1000000000000000000;break;  //METER TO FT
                    case "hectare": $outputNumber = $inputNumber*100;break;  //METER TO FT
                    case "sqmile": $outputNumber = $inputNumber*0.3861018768;break;  //METER TO FT
                    case "sqyard": $outputNumber = $inputNumber*1195990.0463;break;  //METER TO FT
                    case "sqfoot": $outputNumber = $inputNumber*10763910.417;break;  //METER TO FT
                    case "sqinches": $outputNumber = $inputNumber*1550003100;break;//METER TO INCHES
                    case "Acre": $outputNumber = $inputNumber*247.10538147;break;//METER TO LightYears
                    
                    }
                break;  
                case "sqmilli":
                  switch($outputFormat){
                    case "sqmilli": 
                        $outputNumber=$inputNumber;break;
                    case "sqmeter": $outputNumber = $inputNumber*0.000001;break;           //METER TO METER
                    case "sqkm": $outputNumber = $inputNumber*1.E-12;break;
                    case "sqcm": $outputNumber = $inputNumber*0.01;break;          //METER TO CM
                    case "sqmilli": $outputNumber = $inputNumber*1;break;  //METER TO Milli
                    case "sqmm": $outputNumber = $inputNumber*1000000;break;  //METER TO FT
                    case "hectare": $outputNumber = $inputNumber*9.999999999E-11;break;  //METER TO FT
                    case "sqmile": $outputNumber = $inputNumber*3.861018768E-13;break;  //METER TO FT
                    case "sqyard": $outputNumber = $inputNumber*0.000001196;break;  //METER TO FT
                    case "sqfoot": $outputNumber = $inputNumber*0.0000107639;break;  //METER TO FT
                    case "sqinches": $outputNumber = $inputNumber*0.0015500031;break;//METER TO INCHES
                    case "Acre": $outputNumber = $inputNumber*2.471053814E-10;break;//METER TO LightYears
                    
                    }
                break;  
                case "sqmm":
                  switch($outputFormat){
                    case "sqmm": 
                        $outputNumber=$inputNumber;break;
                    case "sqmeter": $outputNumber = $inputNumber*1.E-12;break;           //METER TO METER
                    case "sqkm": $outputNumber = $inputNumber*1.E-18;break;
                    case "sqcm": $outputNumber = $inputNumber*9.999999999E-9;break;          //METER TO CM
                    case "sqmilli": $outputNumber = $inputNumber*0.000001;break;  //METER TO Milli
                    case "sqmm": $outputNumber = $inputNumber*1;break;  //METER TO FT
                    case "hectare": $outputNumber = $inputNumber*1.E-16;break;  //METER TO FT
                    case "sqmile": $outputNumber = $inputNumber*3.861018768E-19;break;  //METER TO FT
                    case "sqyard": $outputNumber = $inputNumber*1.195990046E-12;break;  //METER TO FT
                    case "sqfoot": $outputNumber = $inputNumber*1.076391041E-11;break;  //METER TO FT
                    case "sqinches": $outputNumber = $inputNumber*1.5500031E-9;break;//METER TO INCHES
                    case "Acre": $outputNumber = $inputNumber*2.471053814E-16;break;//METER TO LightYears
                    
                    }
                break;  
                case "hectare":
                  switch($outputFormat){
                    case "hectare": 
                        $outputNumber=$inputNumber;break;
                    case "sqmeter": $outputNumber = $inputNumber*10000;break;           //METER TO METER
                    case "sqkm": $outputNumber = $inputNumber*0.01;break;
                    case "sqcm": $outputNumber = $inputNumber*100000000;break;          //METER TO CM
                    case "sqmilli": $outputNumber = $inputNumber*10000000000;break;  //METER TO Milli
                    case "sqmm": $outputNumber = $inputNumber*10000000000000000;break;  //METER TO FT
                    case "hectare": $outputNumber = $inputNumber*1;break;  //METER TO FT
                    case "sqmile": $outputNumber = $inputNumber*0.0038610188;break;  //METER TO FT
                    case "sqyard": $outputNumber = $inputNumber*11959.900463;break;  //METER TO FT
                    case "sqfoot": $outputNumber = $inputNumber*107639.10417;break;  //METER TO FT
                    case "sqinches": $outputNumber = $inputNumber*15500031;break;//METER TO INCHES
                    case "Acre": $outputNumber = $inputNumber*2.4710538147;break;//METER TO LightYears
                    
                    }
                break; 
                case "sqmile":
                  switch($outputFormat){
                    case "sqmile": 
                        $outputNumber=$inputNumber;break;
                    case "sqmeter": $outputNumber = $inputNumber*2589990;break;           //METER TO METER
                    case "sqkm": $outputNumber = $inputNumber*2.58999;break;
                    case "sqcm": $outputNumber = $inputNumber*25899900000;break;          //METER TO CM
                    case "sqmilli": $outputNumber = $inputNumber*2589990000000;break;  //METER TO Milli
                    case "sqmm": $outputNumber = $inputNumber*2589990000000000000;break;  //METER TO FT
                    case "hectare": $outputNumber = $inputNumber*258.999;break;  //METER TO FT
                    case "sqmile": $outputNumber = $inputNumber*1;break;  //METER TO FT
                    case "sqyard": $outputNumber = $inputNumber*3097602.26;break;  //METER TO FT
                    case "sqfoot": $outputNumber = $inputNumber*27878420.34;break;  //METER TO FT
                    case "sqinches": $outputNumber = $inputNumber*4014492529;break;//METER TO INCHES
                    case "Acre": $outputNumber = $inputNumber*640.00046695;break;//METER TO LightYears
                    
                    }
                break; 
                case "Acre":
                  switch($outputFormat){
                    case "Acre": 
                        $outputNumber=$inputNumber;break;
                    case "sqmeter": $outputNumber = $inputNumber*4046.8564224;break;           //METER TO METER
                    case "sqkm": $outputNumber = $inputNumber*0.0040468564;break;
                    case "sqcm": $outputNumber = $inputNumber*40468564.224;break;          //METER TO CM
                    case "sqmilli": $outputNumber = $inputNumber*4046856422.4;break;  //METER TO Milli
                    case "sqmm": $outputNumber = $inputNumber*4046856422400000;break;  //METER TO FT
                    case "hectare": $outputNumber = $inputNumber*0.4046856422;break;  //METER TO FT
                    case "sqmile": $outputNumber = $inputNumber*0.0015624989;break;  //METER TO FT
                    case "sqyard": $outputNumber = $inputNumber*4840;break;  //METER TO FT
                    case "sqfoot": $outputNumber = $inputNumber*43560;break;  //METER TO FT
                    case "sqinches": $outputNumber = $inputNumber*6272640;break;//METER TO INCHES
                    case "Acre": $outputNumber = $inputNumber*1;break;//METER TO LightYears
                    
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
        <a class="navbar-brand">Area<span class="joe"> Measurement</span></a>
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
    <!-- <h1>Area Measurement</h1> -->
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
