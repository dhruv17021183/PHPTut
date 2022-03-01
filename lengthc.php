<?php
// if form is submit 
if(isset($_POST['submitForm'])){
  $outputNumber=0;
  $inputNumber=(float)$_POST['inputnumber']; //take inputvalue from the form 
  $inputFormat=$_POST['inputformat'];        //take inputformat from the form example meter,kilometer etc
  $outputFormat=$_POST['outputformat'];      //take outputformat from the form example meter,kilometer etc

   switch($inputFormat){
       case "meter":               // meter to any lengthconversion
         switch($outputFormat){
                case "meter": $outputNumber = $inputNumber;break;                    //METER TO METER
                case "km": $outputNumber = $inputNumber*.001;break;                  //meter to kilometer
                case "cm": $outputNumber = $inputNumber*100;break;                   //METER TO CM
                case "milli": $outputNumber = $inputNumber*1000;break;               //METER TO Millimeter
                case "mm": $outputNumber = $inputNumber*1000000;break;               //METER TO micrometer
                case "nm": $outputNumber = $inputNumber*1000000000;break;            //METER TO nenometer
                case "mile": $outputNumber = $inputNumber*0.000621371;break;         //METER TO mile
                case "yard": $outputNumber = $inputNumber*1.09361;break;             //METER TO yard
                case "foot": $outputNumber = $inputNumber*3.2808399;break;           //METER TO foot
                case "inches": $outputNumber = $inputNumber*39.3700787;break;        //METER TO INCHES
                case "ly": $outputNumber = $inputNumber*1.057008707E-16;break;       //METER TO LightYears
                
            }
            break;
            case "cm":        //    centimeter to any lengthconversion
              switch($outputFormat){
                    case "meter": $outputNumber = $inputNumber*0.01;break;           //centimeter TO METER
                    case "km": $outputNumber = $inputNumber*.00001;break;               //centimeter TO kilometer
                    case "cm": $outputNumber = $inputNumber*1;break;                  //centimeter TO cm
                    case "milli": $outputNumber = $inputNumber*10;break;     //centimeter TO Millimeter
                    case "mm": $outputNumber = $inputNumber*10000;break;     //centimeter TO micrometer
                    case "nm": $outputNumber = $inputNumber*10000000;break;  //centimeter to nenometer
                    case "mile": $outputNumber = $inputNumber*0.00000621371;break;     //centimeter TO mile
                    case "yard": $outputNumber = $inputNumber*0.0109361;break;     //centimeter TO yard
                    case "foot": $outputNumber = $inputNumber*0.032808399;break;  //centimeter TO foot
                    case "inches": $outputNumber = $inputNumber*0.393700787;break;//centimeter TO INCHES
                    case "ly": $outputNumber = $inputNumber*1.057008707E-18;break;//centimeter TO LightYears
                    
                }
                break;
            
                case "foot": //    foot to any lengthconversion
                  switch($outputFormat){
                        case "meter": $outputNumber = $inputNumber*0.3048;break;           //foot to meter
                        case "km": $outputNumber = $inputNumber*0.0003048;break;           // foot to kilometer
                        case "cm": $outputNumber = $inputNumber*30.48;break;          //foot to centimeter
                        case "milli": $outputNumber = $inputNumber*304.8;break;  //foot TO Millimeter
                        case "mm": $outputNumber = $inputNumber*304800;break;  //food TO micrometer
                        case "nm": $outputNumber = $inputNumber*304800000;break;  //foot TO nanometer
                        case "mile": $outputNumber = $inputNumber*0.0001893932;break;  //foot to mile
                        case "yard": $outputNumber = $inputNumber*0.3333333333;break;  //foot to yard
                        case "foot": $outputNumber = $inputNumber*1;break;  //FT TO FT
                        case "inches": $outputNumber = $inputNumber*12;break;//foot TO inches
                        case "ly": $outputNumber = $inputNumber*3.22176254E-17;break;//foot TO LightYears
                        
                    }
                break;
            
                case "inches": // inches to any lengthconversion
                  switch($outputFormat){
                    case "foot": 
                        $outputNumber=$inputNumber;break;
                        case "meter": $outputNumber = $inputNumber*0.0254;break;           //METER TO METER
                        case "km": $outputNumber = $inputNumber*0.0000254;break;
                        case "cm": $outputNumber = $inputNumber*2.54;break;          //METER TO CM
                        case "milli": $outputNumber = $inputNumber*25.4;break;  //METER TO Milli
                        case "mm": $outputNumber = $inputNumber*25400;break;  //METER TO FT
                        case "nm": $outputNumber = $inputNumber*25400000;break;  //METER TO FT
                        case "mile": $outputNumber = $inputNumber*0.0000157828;break;  //METER TO FT
                        case "yard": $outputNumber = $inputNumber*0.0277777778;break;  //METER TO FT
                        case "foot": $outputNumber = $inputNumber*0.0833333333;break;  //METER TO FT
                        case "inches": $outputNumber = $inputNumber*1;break;//METER TO INCHES
                        case "ly": $outputNumber = $inputNumber*2.684802117E-18;break;//METER TO LightYears
                        
                    }
                break;  
                case "km":// kilometer to any lengthconversion
                  switch($outputFormat){
                    case "km": 
                        $outputNumber=$inputNumber;break;
                        case "meter": $outputNumber = $inputNumber*1000;break;          
                        case "km": $outputNumber = $inputNumber*1;break;
                        case "cm": $outputNumber = $inputNumber*100000;break;         
                        case "milli": $outputNumber = $inputNumber*1000000;break;  
                        case "mm": $outputNumber = $inputNumber*1000000000;break;  
                        case "nm": $outputNumber = $inputNumber*1000000000000;break;  
                        case "mile": $outputNumber = $inputNumber*0.6213688756;break;  
                        case "yard": $outputNumber = $inputNumber*1093.6132983;break;  
                        case "foot": $outputNumber = $inputNumber*3280.839895;break; 
                        case "inches": $outputNumber = $inputNumber*39370.07874;break;
                        case "ly": $outputNumber = $inputNumber*1.057008707E-13;break;
                        
                    }
                break;  
                case "milli": // millimeter to any lengthconversion
                  switch($outputFormat){
                    case "milli": 
                        $outputNumber=$inputNumber;break;
                        case "meter": $outputNumber = $inputNumber*0.001;break;         
                        case "km": $outputNumber = $inputNumber*0.000001;break;
                        case "cm": $outputNumber = $inputNumber*0.1;break;          
                        case "milli": $outputNumber = $inputNumber*1;break;  
                        case "mm": $outputNumber = $inputNumber*1000;break;  
                        case "nm": $outputNumber = $inputNumber*1000000;break;  
                        case "mile": $outputNumber = $inputNumber*6.213688756E-7;break;  
                        case "yard": $outputNumber = $inputNumber*0.0010936133;break;  
                        case "foot": $outputNumber = $inputNumber*0.0032808399;break;  
                        case "inches": $outputNumber = $inputNumber*0.0393700787;break;
                        case "ly": $outputNumber = $inputNumber*1.057008707E-19;break;
                        
                    }
                break;  
                case "mm": // micrometer to any lengthconversion
                  switch($outputFormat){
                    case "mm": 
                        $outputNumber=$inputNumber;break;
                        case "meter": $outputNumber = $inputNumber*0.000001;break;           
                        case "km": $outputNumber = $inputNumber*9.999999999E-10;break;
                        case "cm": $outputNumber = $inputNumber*0.0001;break;          
                        case "milli": $outputNumber = $inputNumber*1;break;  
                        case "mm": $outputNumber = $inputNumber*1;break;  
                        case "nm": $outputNumber = $inputNumber*1000;break;  
                        case "mile": $outputNumber = $inputNumber*6.213688756E-10;break; 
                        case "yard": $outputNumber = $inputNumber*0.0000010936;break;  
                        case "foot": $outputNumber = $inputNumber*0.0000032808;break;  
                        case "inches": $outputNumber = $inputNumber*0.0000393701;break;
                        case "ly": $outputNumber = $inputNumber*1.057008707E-22;break;
                        
                    }
                break;  
                case "nm": //nenometer to any lengthconversion
                  switch($outputFormat){
                        case "meter": $outputNumber = $inputNumber*1.E-9;break;          
                        case "km": $outputNumber = $inputNumber*1.E-12;break;
                        case "cm": $outputNumber = $inputNumber*1.E-7;break;          
                        case "milli": $outputNumber = $inputNumber*0.000001;break;  
                        case "mm": $outputNumber = $inputNumber*0.001;break;  
                        case "nm": $outputNumber = $inputNumber*1;break;  
                        case "mile": $outputNumber = $inputNumber*6.213688756E-13;break;  
                        case "yard": $outputNumber = $inputNumber*1.093613298E-9;break;  
                        case "foot": $outputNumber = $inputNumber*3.280839895E-9;break;  
                        case "inches": $outputNumber = $inputNumber*3.937007874E-8;break;
                        case "ly": $outputNumber = $inputNumber*1.057008707E-25;break;
                        
                    }
                break; 
                case "mile": // mile to any lengthconversion
                  switch($outputFormat){
                        case "meter": $outputNumber = $inputNumber*1609.35;break;           
                        case "km": $outputNumber = $inputNumber*1.60935;break;
                        case "cm": $outputNumber = $inputNumber*160935;break;          
                        case "milli": $outputNumber = $inputNumber*1609350;break;  
                        case "mm": $outputNumber = $inputNumber*1609350000;break;  
                        case "nm": $outputNumber = $inputNumber*1609350000000;break;  
                        case "mile": $outputNumber = $inputNumber*1;break;  
                        case "yard": $outputNumber = $inputNumber*1760.0065617;break;  
                        case "foot": $outputNumber = $inputNumber*5280.019685;break;  
                        case "inches": $outputNumber = $inputNumber*63360.23622;break; 
                        case "ly": $outputNumber = $inputNumber*1.701096963E-13;break;
                        
                    }
                break; 
                case "ly": // lightyears to any lengthconversion
                  switch($outputFormat){
                    case "ly": 
                        $outputNumber=$inputNumber;break;
                        case "meter": $outputNumber = $inputNumber*9460660000000000;break;          
                        case "km": $outputNumber = $inputNumber*9460660000000;break;
                        case "cm": $outputNumber = $inputNumber*946066000000000000;break;          
                        case "milli": $outputNumber = $inputNumber*9460660000000000000;break;  
                        case "mm": $outputNumber = $inputNumber*9.46066E+21;break;  
                        case "nm": $outputNumber = $inputNumber*9.460659999E+24;break;  
                        case "mile": $outputNumber = $inputNumber*5878559666946;break;  
                        case "yard": $outputNumber = $inputNumber*10346303587051618;break;  
                        case "foot": $outputNumber = $inputNumber*31038910761154856;break;  
                        case "inches": $outputNumber = $inputNumber*372466929133858300;break;
                        case "ly": $outputNumber = $inputNumber*1;break;
                        
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
        <a class="navbar-brand">Length<span class="joe"> Measurement</span></a>
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
        <a href="lengthc.php" class="btn btn-primary" aria-current="page">Length</a>
        <a href="temparature.php" class="btn btn-outline-success">Temparature</a>
        <a href="area.php" class="btn btn-outline-success">Area</a>
        <a href="volume.php" class="btn btn-outline-success">Volume</a>
        <a href="weight.php" class="btn btn-outline-success">Weight</a>
        <a href="speed.php" class="btn btn-outline-success">Speed</a>
      </div>
    
  <form action="lengthc.php" method="post">
    <div class="vk2 container">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="number" class="col-form-label">From:</label>
            </div>
            <div class="col-auto">
              
            <input type="float number" value="<?php if(isset($_POST['submitForm'])){ echo $inputNumber;} ?>" id="inputPassword6" class="form-control" name="inputnumber" aria-describedby="passwordHelpInline">
                   
            </div>
            <select class="vk form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="inputformat">
                <option value="meter" <?php if(isset($inputFormat) && $inputFormat=="meter") echo "selected";?>>Meter</option>
                <option value="km" <?php if(isset($inputFormat) && $inputFormat=="km") echo "selected";?>>Kilometer</option>
                <option value="cm" <?php if(isset($inputFormat) && $inputFormat=="cm") echo "selected";?>>Centimeter</option>
                <option value="milli" <?php if(isset($inputFormat) && $inputFormat=="milli") echo "selected";?>>Millimeter</option>
                <option value="mm" <?php if(isset($inputFormat) && $inputFormat=="mm") echo "selected";?>>Micrometer</option>
                <option value="nm" <?php if(isset($inputFormat) && $inputFormat=="nm") echo "selected";?>>Nanometer</option>
                <option value="mile" <?php if(isset($inputFormat) && $inputFormat=="mile") echo "selected";?>>Mile</option>
                <option value="yard" <?php if(isset($inputFormat) && $inputFormat=="yard") echo "selected";?>>Yard</option>
                <option value="foot" <?php if(isset($inputFormat) && $inputFormat=="foot") echo "selected";?>>Foot</option>
                <option value="inches" <?php if(isset($inputFormat) && $inputFormat=="inches") echo "selected";?>>Inches</option>
                <option value="ly" <?php if(isset($inputFormat) && $inputFormat=="ly") echo "selected";?>>Lightyear</option>
            </select>
            
            <div class="col-auto">
                <label for="number" class="col-form-label">To:</label>
              </div>
              <div class="col-auto">
                
              <input type="number" value="<?php echo $outputNumber; ?>" id="inputPassword6" name="outputnumber" aria-describedby="passwordHelpInline"class="form-control" name="outputformat">
              
              </div>
              
              <select class="vk" aria-label="Default select example" name="outputformat">
                <option value="meter" <?php if(isset($outputFormat) && $outputFormat=="meter") echo "selected";?>>Meter</option>
                <option value="km" <?php if(isset($outputFormat) && $outputFormat=="km") echo "selected";?>>Kilometer</option>
                <option value="cm" <?php if(isset($outputFormat) && $outputFormat=="cm") echo "selected";?>>Centimeter</option>
                <option value="milli" <?php if(isset($outputFormat) && $outputFormat=="milli") echo "selected";?>>Millimeter</option>
                <option value="mm" <?php if(isset($outputFormat) && $outputFormat=="mm") echo "selected";?>>Micrometer</option>
                <option value="nm" <?php if(isset($outputFormat) && $outputFormat=="nm") echo "selected";?>>Nanometer</option>
                <option value="mile" <?php if(isset($outputFormat) && $outputFormat=="mile") echo "selected";?>>Mile</option>
                <option value="yard" <?php if(isset($outputFormat) && $outputFormat=="yard") echo "selected";?>>Yard</option>
                <option value="foot" <?php if(isset($outputFormat) && $outputFormat=="foot") echo "selected";?>>Foot</option>
                <option value="inches" <?php if(isset($outputFormat) && $outputFormat=="inches") echo "selected";?>>Inches</option>
                <option value="ly" <?php if(isset($outputFormat) && $outputFormat=="ly") echo "selected";?>>Lightyear</option>
              </select>
              <button type="submit" class="vk1 btn btn-success" value="Convert" name="submitForm">Convert</button>
              <button type="submit" class="vk1 btn btn-danger" value="home" name="home"><a href="index.php" class="text-white">Home</a></button>
            </div>
     </div>
     

  </form>
</body>
</html>
