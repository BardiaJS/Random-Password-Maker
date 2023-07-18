<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Password Maker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<?php
  $length = "" ;
  $counterOfNumbers = "";
  $capital;
  $special;
  $finalRes= "";


  $capitalErr = $lengthErr = $counterOfNumbersErr = "";



  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["length"])){
      $lengthErr ="Length is required!";
    }else{
      if(is_numeric((string)$_POST["length"])){
        $length = test_input($_POST["length"]);
        if(empty($_POST["counterOfNumbers"])){
          $counterOfNumbers = rand(0 , 9);
          while($counterOfNumbers > $length){
            $counterOfNumbers = rand(0 , 9);
          }
        }else{
          if(is_numeric((string)$_POST["counterOfNumbers"])){
            $counterOfNumbers = test_input($_POST["counterOfNumbers"]);
            if(empty($_POST["special"])){
              if(empty($_POST["capital"])){
                $numberList = array(0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 );
                $alphabetList = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s" , "t" , "u" , "v" , "w" , "x" , "y" , "z");
                $mergedArray = array_merge($numberList , $alphabetList);
                $numberCounter = 0;
                $alphbetCounter = 0;
                for($i = 0 ; $i < $length ; $i++){
                  $randNum = rand(0 , 35);
                  if($mergedArray[$randNum] == 0 || $mergedArray[$randNum] == 1 || $mergedArray[$randNum] == 2 || $mergedArray[$randNum] == 3 || $mergedArray[$randNum] == 4 || $mergedArray[$randNum] == 5 || $mergedArray[$randNum] == 6 || $mergedArray[$randNum] == 7 || $mergedArray[$randNum] == 8 || $mergedArray[$randNum] == 9  ){
                    $numberCounter += 1;
                    if($numberCounter <= $counterOfNumbers){
                      $finalRes .= $mergedArray[$randNum];
                    }else{
                      $i--;
                    }
                    
                  }else{
                    $alphbetCounter++;
                    if($alphbetCounter <= $length - $counterOfNumbers){
                      $finalRes .= $mergedArray[$randNum];
                    }else{
                      $i--;
                    }
                    
                  }
                  
                }
        
              }else{
                $capital = test_input($_POST["capital"]);
                $numberList = array(0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 );
                $alphabetList = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "H", "K", "L", "M", "N", "O", "P", "Q", "R", "S" , "T" , "U" , "V" , "W" , "X" , "Y" , "Z");
                $mergedArray = array_merge($numberList , $alphabetList);
                $numberCounter = 0;
                $alphbetCounter = 0;
                for($i = 0 ; $i < $length ; $i++){
                  $randNum = rand(0 , 35);
                  if($mergedArray[$randNum] == 0 || $mergedArray[$randNum] == 1 || $mergedArray[$randNum] == 2 || $mergedArray[$randNum] == 3 || $mergedArray[$randNum] == 4 || $mergedArray[$randNum] == 5 || $mergedArray[$randNum] == 6 || $mergedArray[$randNum] == 7 || $mergedArray[$randNum] == 8 || $mergedArray[$randNum] == 9  ){
                    $numberCounter += 1;
                    if($numberCounter <= $counterOfNumbers){
                      $finalRes .= $mergedArray[$randNum];
                    }else{
                      $i--;
                    }
                    
                  }else{
                    $alphbetCounter++;
                    if($alphbetCounter <= $length - $counterOfNumbers){
                      $finalRes .= $mergedArray[$randNum];
                    }else{
                      $i--;
                    }
                    
                  }
                  
                }
        
              }
            }else{
              $special = test_input($_POST["special"]);
              if(empty($_POST["capital"])){
                $numberList = array(0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 );
                $specialList = array("!" , "@" , "#" , "$" , "%" , "^" , "&" , "*" , "(" , ")");
                $randomSpecial = rand(0 , 9);
                $randomSpecial = $specialList[$randomSpecial];
                $alphabetList = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "t", "s" , "t" , "u" , "v" , "w" , "x" , "y" , "z");
                $finalRes = $randomSpecial;
                $mergedArray = array_merge($numberList , $alphabetList  );
                $numberCounter = 0;
                $alphbetCounter = 0;
                for($i = 0 ; $i < $length - 1 ; $i++){
                  $randNum = rand(0 , 35);
                  if($mergedArray[$randNum] == 0 || $mergedArray[$randNum] == 1 || $mergedArray[$randNum] == 2 || $mergedArray[$randNum] == 3 || $mergedArray[$randNum] == 4 || $mergedArray[$randNum] == 5 || $mergedArray[$randNum] == 6 || $mergedArray[$randNum] == 7 || $mergedArray[$randNum] == 8 || $mergedArray[$randNum] == 9  ){
                    $numberCounter += 1;
                    if($numberCounter <= $counterOfNumbers){
                      $finalRes .= $mergedArray[$randNum];
                    }else{
                      $i--;
                    }
                    
                  }else{
                    $alphbetCounter++;
                    if($alphbetCounter <= $length - $counterOfNumbers - 1){
                      $finalRes .= $mergedArray[$randNum];
                    }else{
                      $i--;
                    }
                    
                  }
                  
                }
        
              }else{
                $capital = test_input($_POST["capital"]);
                $numberList = array(0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 );
                $specialList = array("!" , "@" , "#" , "$" , "%" , "^" , "&" , "*" , "(" , ")");
                $randomSpecial = rand(0 , 9);
                $randomSpecial = $specialList[$randomSpecial];
                $alphabetList = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "H", "K", "L", "M", "N", "O", "P", "Q", "R", "S" , "T" , "U" , "V" , "W" , "X" , "Y" , "Z");
                $finalRes = $randomSpecial;
                $mergedArray = array_merge($numberList , $alphabetList  );
                $numberCounter = 0;
                
                $alphbetCounter = 0;
                for($i = 0 ; $i < $length - 1 ; $i++){
                  $randNum = rand(0 , 35);
                  if($mergedArray[$randNum] == 0 || $mergedArray[$randNum] == 1 || $mergedArray[$randNum] == 2 || $mergedArray[$randNum] == 3 || $mergedArray[$randNum] == 4 || $mergedArray[$randNum] == 5 || $mergedArray[$randNum] == 6 || $mergedArray[$randNum] == 7 || $mergedArray[$randNum] == 8 || $mergedArray[$randNum] == 9  ){
                    $numberCounter += 1;
                    if($numberCounter <= $counterOfNumbers){
                      $finalRes .= $mergedArray[$randNum];
                    }else{
                      $i--;
                    }
                    
                  }else{
                    $alphbetCounter++;
                    if($alphbetCounter <= $length - $counterOfNumbers - 1){
                      $finalRes .= $mergedArray[$randNum];
                    }else{
                      $i--;
                    }
                    
                  }
                  
                }
        
              }
            }
          }else{
            $counterOfNumbersErr ="Mismatch input for counter of numbers!";
          }
          
        }
      }else{
        $lengthErr ="Mismatch input for length!";
      }
      
    }

    }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

   ?>




  <div class="project-name">
    <h1>Random Password Maker</h1>
    <p class="star-info">* is required!</p>
  </div>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class ="first-question">
    <p>How many character do you want to make password? </p>
    <input type="text"  name="length" value="<?php echo $length ?>">
    <span class="error"></span>
  </div>
  <div class ="second-question">
    <p>How many numbers do you want to be in your  password? </p>
    <input type="text"  name="counterOfNumbers" value="<?php echo $counterOfNumbers ?>"> 
    <span class="error"> </span><br>
  </div>
  <div class ="checkboxes">
    <input class="special-class" type="checkbox" name="special" value="<?php echo $special ?>"> special characters(@ , # , ...)
    <br>
    <input class="capital-class" type="checkbox" name="capital" value="<?php echo $capital ?>"> capitalize
    <br>
    <input class="submit" type="submit" name="submit" value="Make me a password">
  </div>
 


<div class="answer-div">
<span class="error"><?php echo $lengthErr ?> </span> <br>
<span class="error"><?php echo $counterOfNumbersErr ?> </span>
  <h1> Your Password is: </h1>
  <p>
  <?php
  echo $finalRes;
  ?>
  </p>
</div>
  
</body>
</html>
