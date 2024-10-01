
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <link rel="stylesheet"  href="design.css">
    <!-- <script type="text/javascript">
      function submit_form()
      {
        var medicine=document.getElementById("search1").value;
        var price=parseInt(document.getElementById("search2").value);
        var illness=document.getElementById("search3").value;
        if(medicine=="")
        {
          alert("please enter medicine name");
          return false;
        }
        else if(price=="")
        {
          alert("please enter medicine price");
          return false;
        }
        else if(illness=="")
        {
          alert("please enter the illness or disease");
          return false;
        }
        else{
          alert("ok");
        }


      }
    </script> -->
<header>
  <marquee  direction="right"> <h1>crud app</h1>
  </marquee>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <a href=""><span class="nav">HOME</span></a>
  <a href=""><span class="nav">ABOUT US</span> </a>
  <a href=""><span class="nav">PRACTICE AREAS</span> </a>
  <a href=""><span class="nav">CLIENT REGISTRATION</span></a> 
</header>
 <div class="crud">
  <div id="col1">
    
    <form  method="post" action="" id="myForm" >     
    <h1>create </h1>
 <label for="search1">enter medicine name</label>
 <input type="text" name='medicine' id="search1">
   <br><br>
 <label for="search2">enter medicine price</label>
 <input type="text" name="price" id="search2">
 <br><br>
 <label for="search3">enter type of illness</label>
 <input type="text" name="illness" id="search3"> 
 <br><br>
 <input type="submit" value="submit">
 </form>

 
 </div>
<div id="col2">
  <p class="ops"><a href="#">create</a></p>
  <p class="ops"><a href="read.php">read</a></p>
  <p class="ops"><a href="updateapp.php">update</a></p>
  <p class="ops"><a href="delete.php">delete</a></p>
</div>
  
</div>
<?php 



include'connecting.php';

  
  $s1=$_POST['medicine'];
  $s2=$_POST['price'];
  $s3=$_POST['illness'];
  $resql="insert into pharmacist (drug_name,drug_price,drug_ailment) values('$s1','$s2','$s3')";
  $result=mysqli_query($conn,$resql);
  if($result)
  {
    echo"data submitted";
    
  }
  else
  {
    echo"query failed";
  }
  $cresql1="select * from pharmacist";
  $result1=mysqli_query($conn,$cresql1);
  if($result1)
  {
    $i=0;
     while($i<mysqli_num_rows($result1)){
      $row=mysqli_fetch_assoc($result1);
      echo $row['drug_name'].$row['drug_price'].$row['drug_ailment' ];
      echo"<br>";
      $i++;
     }
  }
  else
  {
    echo"query failed!";
  }
//   $insql="insert into pharmacist (drug_name,drug_price,drug_ailment) values('$s1','$s2','$s3')";
//  $resql="select * from pharmacist";

//   echo"$resql";
  
  
  

?>
</body>
</html>
