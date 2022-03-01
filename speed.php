<?php
if(isset($_POST['submitForm'])){
  $outputNumber=0;
  $inputNumber=(float)$_POST['inputnumber']; //take inputvalue from the form 
  $inputFormat=$_POST['inputformat'];        //take inputformat from the form example meter,kilometer etc
  $outputFormat=$_POST['outputformat'];      //take outputformat from the form example meter,kilometer etc
    switch($inputFormat){
      case "mps":
        switch($outputFormat){
               case "mps": $outputNumber=$inputNumber;break;
               case "kpm": $outputNumber = $inputNumber*0.06;break;           
               case "fph": $outputNumber = $inputNumber*11811.023622;break;
               case "voliv": $outputNumber = $inputNumber*3.335640951E-9;break;          
               case "ev": $outputNumber = $inputNumber*0.0000335965;break;  
           }
      break;
      case "kpm":
        switch($outputFormat){
               case "mps": $outputNumber=$inputNumber*16.666666667;break;
               case "kpm": $outputNumber = $inputNumber*1;break;           
               case "fph": $outputNumber = $inputNumber*196850.3937;break;
               case "voliv": $outputNumber = $inputNumber*5.559401586E-8;break;         
               case "ev": $outputNumber = $inputNumber*0.0005599418;break;  
        }
      break;
      case "fph":
        switch($outputFormat){
               case "mps": $outputNumber=$inputNumber*0.0000846667;break;
               case "kpm": $outputNumber = $inputNumber*0.00000508;break;           
               case "fph": $outputNumber = $inputNumber*1;break;
               case "voliv": $outputNumber = $inputNumber*2.824176006E-13;break;          
               case "ev": $outputNumber = $inputNumber*2.844504171E-9;break;  
        }
      break;
      case "voliv":
        switch($outputFormat){
               case "mps": $outputNumber=$inputNumber*299792458;break;
               case "kpm": $outputNumber = $inputNumber*17987547.48;break;           
               case "fph": $outputNumber = $inputNumber*3540855803150;break;
               case "voliv": $outputNumber = $inputNumber*1;break;         
               case "ev": $outputNumber = $inputNumber*10071.979103;break;  
        
        }
      break;
      case "ev":
        switch($outputFormat){
               case "mps": $outputNumber=$inputNumber*29765;break;
               case "kpm": $outputNumber = $inputNumber*1785.9;break;           
               case "fph": $outputNumber = $inputNumber*351555118.11;break;
               case "voliv": $outputNumber = $inputNumber*0.0000992854;break;         
               case "ev": $outputNumber = $inputNumber*1;break;  
        
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
        <a class="navbar-brand">Speed<span class="joe"> Measurement</span></a>
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
        <a href="temparature.php" class="btn btn-outline-success">Temparature</a>
        <a href="area.php" class="btn btn-outline-success">Area</a>
        <a href="volume.php" class="btn btn-outline-success">Volume</a>
        <a href="weight.php" class="btn btn-outline-success">Weight</a>
        <a href="speed.php" class="btn btn-primary">Speed</a>
</div>
<form action="speed.php" method="post">
    <div class="vk2 container">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="number" class="col-form-label">From:</label>
            </div>
            <div class="col-auto">
              <input type="float number" value="<?php if(isset($_POST['submitForm'])){ echo $inputNumber;} ?>" id="inputPassword6" class="form-control" name="inputnumber" aria-describedby="passwordHelpInline">
            </div>
            <select class="vk" aria-label="Default select example" name="inputformat">
              <option value="mps" <?php if(isset($inputFormat) && $inputFormat=="mps") echo "selected";?>>meter/second[m/s]</option>
              <option value="kpm" <?php if(isset($inputFormat) && $inputFormat=="kpm") echo "selected";?>>kilometer/minute[k/m]</option>
              <option value="fph" <?php if(isset($inputFormat) && $inputFormat=="fph") echo "selected";?>>foot/hour[f/h]</option>
              <option value="voliv" <?php if(isset($inputFormat) && $inputFormat=="voliv") echo "selected";?>>Velocity Of Light In Vaccuum</option>
              <option value="ev" <?php if(isset($inputFormat) && $inputFormat=="ev") echo "selected";?>>Earth's Velocity</option>
            </select>  
            <div class="col-auto">
                <label for="number" class="col-form-label">To:</label>
              </div>
              <div class="col-auto">
                <input type="number" value="<?php echo $outputNumber; ?>" id="inputPassword6" class="form-control" name="outputnumber" aria-describedby="passwordHelpInline" name="outputformat">
              </div>
            <select class="vk" aria-label="Default select example" name="outputformat">
              <option value="mps" <?php if(isset($outputFormat) && $outputFormat=="mps") echo "selected";?>>meter/second[m/s]</option>
              <option value="kpm" <?php if(isset($outputFormat) && $outputFormat=="kpm") echo "selected";?>>kilometer/minute[k/m]</option>
              <option value="fph" <?php if(isset($outputFormat) && $outputFormat=="fph") echo "selected";?>>foot/hour[f/h]</option>
              <option value="voliv" <?php if(isset($outputFormat) && $outputFormat=="voliv") echo "selected";?>>Velocity Of Light In Vaccuum</option>
              <option value="ev" <?php if(isset($outputFormat) && $outputFormat=="ev") echo "selected";?>>Earth's Velocity</option>
            </select>
            <button type="submit" class="vk1 btn btn-success" value="Convert" name="submitForm">Convert</button>
            <button type="submit" class="vk1 btn btn-danger" value="home" name="home"><a href="index.php" class="text-white">Home</a></button>
            </div>
     </div>
  </form>
</body>
</html>
