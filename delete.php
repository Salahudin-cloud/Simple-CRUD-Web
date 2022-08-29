<?php 

require 'function.php'; 
//get id 

$getID = $_GET['id']; 


//query data 


//delete data 
if( deleteContact($getID) > 0 ){
    echo "<script> 
              alert('data deleted successfully');
              location.href = 'index.php';
          </script>";
  }else{
    echo "<script> 
              alert(' data failed to delete  ');
          </script>";
  }

?>