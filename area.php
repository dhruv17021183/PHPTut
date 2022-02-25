<?php
if(isset($_POST['submitForm'])){
  $outputNumber=0;
  $inputNumber=(float)$_POST['inputnumber']; //take inputvalue from the form 
  $inputFormat=$_POST['inputformat'];        //take inputformat from the form example meter,kilometer etc
  $outputFormat=$_POST['outputformat'];      //take outputformat from the form example meter,kilometer etc

   switch($inputFormat){
       case "sqmeter": // square meter to any area measurement
         switch($outputFormat){
                case "sqmeter": $outputNumber = $inputNumber;break;           
                case "sqkm": $outputNumber = $inputNumber*.000001;break;
                case "sqcm": $outputNumber = $inputNumber*10000;break;          
                case "sqmilli": $outputNumber = $inputNumber*1000000;break;  
                case "sqmm": $outputNumber = $inputNumber*1000000000000;break;  
                case "hectare": $outputNumber = $inputNumber*0.0001;break;  
                case "sqmile": $outputNumber = $inputNumber*3.861018768E-7;break;  
                case "sqyard": $outputNumber = $inputNumber*1.1959900463;break;  
                case "sqfoot": $outputNumber = $inputNumber*10.763910417;break;  
                case "sqinches": $outputNumber = $inputNumber*1550.0031;break;
                case "Acre": $outputNumber = $inputNumber*0.0002471054;break;
                
            }
            break;
            case "sqkm":// square kilometer to any area measurement
              switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*1000000;break;           
                    case "sqkm": $outputNumber = $inputNumber*1;break;
                    case "sqcm": $outputNumber = $inputNumber*10000000000;break;       
                    case "sqmilli": $outputNumber = $inputNumber*1000000000000;break;  
                    case "sqmm": $outputNumber = $inputNumber*1000000000000000000;break;  
                    case "hectare": $outputNumber = $inputNumber*100;break;  
                    case "sqmile": $outputNumber = $inputNumber*0.3861018768;break;  
                    case "sqyard": $outputNumber = $inputNumber*1195990.0463;break;  
                    case "sqfoot": $outputNumber = $inputNumber*10763910.417;break;  
                    case "sqinches": $outputNumber = $inputNumber*1550003100;break;
                    case "Acre": $outputNumber = $inputNumber*247.10538147;break;
                    
                }
                break;
            
                case "sqfoot":// square foot to any area measurement
                  switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*0.09290304;break;           
                    case "sqkm": $outputNumber = $inputNumber*9.290304E-8;break;
                    case "sqcm": $outputNumber = $inputNumber*929.0304;break;          
                    case "sqmilli": $outputNumber = $inputNumber*92903.04;break;  
                    case "sqmm": $outputNumber = $inputNumber*92903040000;break;  
                    case "hectare": $outputNumber = $inputNumber*0.0000092903;break;  
                    case "sqmile": $outputNumber = $inputNumber*3.58700381E-8;break;  
                    case "sqyard": $outputNumber = $inputNumber*0.1111111111;break; 
                    case "sqfoot": $outputNumber = $inputNumber*1;break;  
                    case "sqinches": $outputNumber = $inputNumber*144;break;
                    case "Acre": $outputNumber = $inputNumber*0.0000229568;break;
                    
                        
                    }
                break;
            
                case "sqinches": // square inches to any area measurement
                    switch($outputFormat){
                        case "sqmeter": $outputNumber = $inputNumber*0.00064516;break;           
                        case "sqkm": $outputNumber = $inputNumber*6.4516E-10;break;
                        case "sqcm": $outputNumber = $inputNumber*6.4516;break;          
                        case "sqmilli": $outputNumber = $inputNumber*645.16;break;  
                        case "sqmm": $outputNumber = $inputNumber*645160000;break;  
                        case "hectare": $outputNumber = $inputNumber*6.4516E-8;break; 
                        case "sqmile": $outputNumber = $inputNumber*2.490974868E-10;break;  
                        case "sqyard": $outputNumber = $inputNumber*0.0007716049;break;  
                        case "sqfoot": $outputNumber = $inputNumber*0.0069444444;break;  
                        case "sqinches": $outputNumber = $inputNumber*1;break;
                        case "Acre": $outputNumber = $inputNumber*1.594225079E-7;break;
                        
                            
                        }
                break;  
                case "sqyard": // square yard to any area measurement
                  switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*0.83612736;break;          
                    case "sqkm": $outputNumber = $inputNumber*8.3612736E-7;break;
                    case "sqcm": $outputNumber = $inputNumber*8361.2736;break;          
                    case "sqmilli": $outputNumber = $inputNumber*836127.36;break;  
                    case "sqmm": $outputNumber = $inputNumber*836127360000;break;  
                    case "hectare": $outputNumber = $inputNumber*0.0000836127;break;  
                    case "sqmile": $outputNumber = $inputNumber*3.228303429E-7;break;  
                    case "sqyard": $outputNumber = $inputNumber*1;break;  
                    case "sqfoot": $outputNumber = $inputNumber*9;break;  
                    case "sqinches": $outputNumber = $inputNumber*1296;break;
                    case "Acre": $outputNumber = $inputNumber*0.0002066116;break;
                    
                    }
                break;  
                case "sqmilli": // square milimeter to any area measurement
                  switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*0.000001;break;           
                    case "sqkm": $outputNumber = $inputNumber*1.E-12;break;
                    case "sqcm": $outputNumber = $inputNumber*0.01;break;        
                    case "sqmilli": $outputNumber = $inputNumber*1;break;  
                    case "sqmm": $outputNumber = $inputNumber*1000000;break;  
                    case "hectare": $outputNumber = $inputNumber*9.999999999E-11;break;  
                    case "sqmile": $outputNumber = $inputNumber*3.861018768E-13;break;  
                    case "sqyard": $outputNumber = $inputNumber*0.000001196;break; 
                    case "sqfoot": $outputNumber = $inputNumber*0.0000107639;break;  
                    case "sqinches": $outputNumber = $inputNumber*0.0015500031;break;
                    case "Acre": $outputNumber = $inputNumber*2.471053814E-10;break;
                    
                    }
                break;  
                case "sqmm": // square micrometer to any area measurement
                  switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*1.E-12;break;          
                    case "sqkm": $outputNumber = $inputNumber*1.E-18;break;
                    case "sqcm": $outputNumber = $inputNumber*9.999999999E-9;break;          
                    case "sqmilli": $outputNumber = $inputNumber*0.000001;break;  
                    case "sqmm": $outputNumber = $inputNumber*1;break;  
                    case "hectare": $outputNumber = $inputNumber*1.E-16;break; 
                    case "sqmile": $outputNumber = $inputNumber*3.861018768E-19;break;  
                    case "sqyard": $outputNumber = $inputNumber*1.195990046E-12;break;
                    case "sqfoot": $outputNumber = $inputNumber*1.076391041E-11;break;  
                    case "sqinches": $outputNumber = $inputNumber*1.5500031E-9;break;
                    case "Acre": $outputNumber = $inputNumber*2.471053814E-16;break;
                    
                    }
                break;  
                case "hectare":// hectare to any area measurement
                  switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*10000;break;          
                    case "sqkm": $outputNumber = $inputNumber*0.01;break;
                    case "sqcm": $outputNumber = $inputNumber*100000000;break;         
                    case "sqmilli": $outputNumber = $inputNumber*10000000000;break;  
                    case "sqmm": $outputNumber = $inputNumber*10000000000000000;break;  
                    case "hectare": $outputNumber = $inputNumber*1;break;  
                    case "sqmile": $outputNumber = $inputNumber*0.0038610188;break;  
                    case "sqyard": $outputNumber = $inputNumber*11959.900463;break;  
                    case "sqfoot": $outputNumber = $inputNumber*107639.10417;break;  
                    case "sqinches": $outputNumber = $inputNumber*15500031;break;
                    case "Acre": $outputNumber = $inputNumber*2.4710538147;break;
                    
                    }
                break; 
                case "sqmile":// square mile to any area measurement
                  switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*2589990;break;           
                    case "sqkm": $outputNumber = $inputNumber*2.58999;break;
                    case "sqcm": $outputNumber = $inputNumber*25899900000;break;          
                    case "sqmilli": $outputNumber = $inputNumber*2589990000000;break;  
                    case "sqmm": $outputNumber = $inputNumber*2589990000000000000;break; 
                    case "hectare": $outputNumber = $inputNumber*258.999;break;  
                    case "sqmile": $outputNumber = $inputNumber*1;break;  
                    case "sqyard": $outputNumber = $inputNumber*3097602.26;break;  
                    case "sqfoot": $outputNumber = $inputNumber*27878420.34;break;
                    case "sqinches": $outputNumber = $inputNumber*4014492529;break;
                    case "Acre": $outputNumber = $inputNumber*640.00046695;break;
                    
                    }
                break; 
                case "Acre": // Acre to any area measurement
                  switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*4046.8564224;break;          
                    case "sqkm": $outputNumber = $inputNumber*0.0040468564;break;
                    case "sqcm": $outputNumber = $inputNumber*40468564.224;break;         
                    case "sqmilli": $outputNumber = $inputNumber*4046856422.4;break; 
                    case "sqmm": $outputNumber = $inputNumber*4046856422400000;break;  
                    case "hectare": $outputNumber = $inputNumber*0.4046856422;break;  
                    case "sqmile": $outputNumber = $inputNumber*0.0015624989;break;  
                    case "sqyard": $outputNumber = $inputNumber*4840;break;  
                    case "sqfoot": $outputNumber = $inputNumber*43560;break; 
                    case "sqinches": $outputNumber = $inputNumber*6272640;break;
                    case "Acre": $outputNumber = $inputNumber*1;break;  
                    
                    }
                break; 
                case "sqcm": // square centimeter to any area measurement
                  switch($outputFormat){
                    case "sqmeter": $outputNumber = $inputNumber*0.0001;break;          
                    case "sqkm": $outputNumber = $inputNumber*1.E-10;break;
                    case "sqcm": $outputNumber = $inputNumber*1;break;         
                    case "sqmilli": $outputNumber = $inputNumber*100;break; 
                    case "sqmm": $outputNumber = $inputNumber*100000000;break;  
                    case "hectare": $outputNumber = $inputNumber*1.E-8;break;  
                    case "sqmile": $outputNumber = $inputNumber*3.861018768E-11;break;  
                    case "sqyard": $outputNumber = $inputNumber*0.000119599;break;  
                    case "sqfoot": $outputNumber = $inputNumber*0.001076391;break; 
                    case "sqinches": $outputNumber = $inputNumber*0.15500031;break;
                    case "Acre": $outputNumber = $inputNumber*2.471053814E-8;break;  
                    
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
        <a href="lengthc.php" class="btn btn btn-outline-success" aria-current="page">Length</a>
        <a href="temparature.php" class="btn btn btn-outline-success">Temparature</a>
        <a href="area.php" class="btn btn-primary">Area</a>
        <a href="volume.php" class="btn btn-outline-success">Volume</a>
        <a href="weight.php" class="btn btn-outline-success">Weight</a>
        <a href="speed.php" class="btn btn-outline-success">Speed</a>
      </div>
    
    
  <form action="area.php" method="post">
    <div class="vk2 container">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="number" class="col-form-label">From:</label>
            </div>
            <div class="col-auto">
              <input type="float number" value="<?php if(isset($_POST['submitForm'])){ echo $inputNumber;} ?>" id="inputPassword6" class="form-control" name="inputnumber" aria-describedby="passwordHelpInline">
            </div>
            <select class="vk" aria-label="Default select example" name="inputformat">
                <option value="sqmeter" <?php if(isset($inputFormat) && $inputFormat=="sqmeter") echo "selected";?>>Square Meter</option>
                <option value="sqkm" <?php if(isset($inputFormat) && $inputFormat=="sqkm") echo "selected";?>>Square Kilometer</option>
                <option value="sqcm" <?php if(isset($inputFormat) && $inputFormat=="sqcm") echo "selected";?>>Square Centimeter</option>
                <option value="sqmilli" <?php if(isset($inputFormat) && $inputFormat=="sqmilli") echo "selected";?>>Square Millimeter</option>
                <option value="sqmm" <?php if(isset($inputFormat) && $inputFormat=="sqmm") echo "selected";?>>Square Micrometer</option>
                <option value="hectare" <?php if(isset($inputFormat) && $inputFormat=="hectare") echo "selected";?>>Hectare</option>
                <option value="sqmile" <?php if(isset($inputFormat) && $inputFormat=="sqmile") echo "selected";?>>Square Mile</option>
                <option value="sqyard" <?php if(isset($inputFormat) && $inputFormat=="sqyard") echo "selected";?>>Square Yard</option>
                <option value="sqfoot" <?php if(isset($inputFormat) && $inputFormat=="sqfoot") echo "selected";?>>Square Foot</option>
                <option value="sqinches" <?php if(isset($inputFormat) && $inputFormat=="sqinches") echo "selected";?>>Square Inch</option>
                <option value="Acre" <?php if(isset($inputFormat) && $inputFormat=="Acre") echo "selected";?>>Acre</option>
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
                <option value="sqmilli" <?php if(isset($outputFormat) && $outputFormat=="sqmilli") echo "selected";?>>Square Millimeter</option>
                <option value="sqmm" <?php if(isset($outputFormat) && $outputFormat=="sqmm") echo "selected";?>>Square Micrometer</option>
                <option value="hectare" <?php if(isset($outputFormat) && $outputFormat=="hectare") echo "selected";?>>Hectare</option>
                <option value="Sqmile" <?php if(isset($outputFormat) && $outputFormat=="sqmile") echo "selected";?>>Square Mile</option>
                <option value="sqyard" <?php if(isset($outputFormat) && $outputFormat=="sqyard") echo "selected";?>>Square Yard</option>
                <option value="sqfoot" <?php if(isset($outputFormat) && $outputFormat=="sqfoot") echo "selected";?>>Square Foot</option>
                <option value="sqinches" <?php if(isset($outputFormat) && $outputFormat=="sqinches") echo "selected";?>>Square Inch</option>
                <option value="Acre" <?php if(isset($outputFormat) && $outputFormat=="Acre") echo "selected";?>>Acre</option>
              </select>
              <button type="submit" class="vk1 btn btn-success" value="Convert" name="submitForm">Convert</button>
            </div>
     </div>
    

  </form>
</body>
</html>
