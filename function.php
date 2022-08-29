<?php 
require 'connection.php'; 

$con = $conn; 


function queryData($query) {
    global $con; 

    $data = mysqli_query($con, $query); 
    $rows = []; 
    while($row = mysqli_fetch_array($data)) {
        $rows[] = $row; 

    }

    return $rows;
}

function newData($data){
    global $con; 
        //get data 
        $name = $data['name']; 
        $gender = $data['gender']; 
        $number = $data['number']; 
        $address = $data['address']; 
    
        //insert to databse 
    
        $query = "INSERT INTO person VALUES(
            '',
            '$name', 
            '$gender',
            '$number', 
            '$address')";
    
        //execute sql command 
        mysqli_query($con, $query); 
        return mysqli_affected_rows($con);

}


function updateContact($data) {
    global $con; 
        //get data 
        $id = $data['id']; 
        $name = $data['name']; 
        $gender = $data['gender']; 
        $number = $data['number']; 
        $address = $data['address']; 
    
        //update  databse 
    
        $query = "UPDATE person SET
        nama = '$name',
        jenis_kelamin = '$gender',
        nomor = '$number',
        alamat = '$address'
        WHERE id = $id
        ";
    
        //execute sql command 
        mysqli_query($con, $query); 
        return mysqli_affected_rows($con);
}


function deleteContact($data) {
    global $con;

    $query = "DELETE FROM  person  WHERE id = '$data'";
    
        //execute sql command 
        mysqli_query($con, $query); 
        return mysqli_affected_rows($con);
}

?>