<?php 
    // STEP 1 - DATABASE CONNECTION HERE
    $connection = mysql_connect("localhost", "root","");
    if (!$connection) {
        die("NO DATABASE CONNECTION". mysql_error());
    }
    
    // STEP 2 - DATABASE SELECTION HERE  
  $db_select = mysql_select_db ("subject", $connection);
  if (!$db_select){
    die ("DATABASE SELECTION FAILED" .mysql_error());
  }   
?>       


<?php   
    //   DECLEARING AND USING OF WHILE LOOP TO INCREMENT BY 1 
   $count = 0;   
   while ($count <=10){
    print $count . ",";
    $count ++; 
   }    
?>      <br/>

<?php 
    //FOR LOOP
    for($count=0; $count<=10; $count++){
    print $count. " ";
    }
?>

<?php 
    $array = array(9,0,20,23,2);  //Using Array function Here 
?>

<?php 
     echo $array [4]; // Calling my Array function Here
?> <br/>

<?php 
    $array2 = array (6,"dog","cat", array("x","y","z"));
    echo $array2[3][1]; 
?>
<?php 
    $array2[3] = "man"
?>  <br/>

<?php 
        echo $array2 [3]; 
?> <br/>

<?php 
    $array3= array("First Name" => "Aliyu", "Last Name" => "Ibrahim", "Other Name" => "Agaie");
?>  <br/>


<?php 
  echo $array3["First Name"]. " ". $array3["Last Name"] . " " . $array3["Other Name"]; 
    
?><br/>
 
 <?php 
    // STEP 3- PERFORMING A DATABASE QUEERY 
        $result = mysql_query("SELECT * FROM test");
    if(!$result){
    die ("DATABASE QUERY JUST FAILED".mysql_error());
    }
      // STEP 4- USING THE RESULT FROM  DATABASE QUEERY
    while ($row = mysql_fetch_array($result)){
    print ($row["menu_name"] . " ". $row["position"]) . "<br/>" ;
    }
    
 ?>
    


<?php 
 $a = 3;
 $b = 5;
 $c = 10;
    if($a > $b){
        print "Yes"; 
        
        $d = $b + $c;
        print $d;
    }

?>

<?php 
    //  STEP 5 - DATABASE CLOSED HERE
   mysql_close($connection);
    
?>
