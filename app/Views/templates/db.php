<?php 

    function Createdb(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="login";

        //pravimo konekciju
       $con = mysqli_connect($servername, $username,$password);

        //provera konekcije
        if(!$con){
            die("Connection Failed:" .mysqli_connect_error());
        }

        //kreiramo bazu
        $sql ="CREATE DATABASE IF NOT EXISTS $dbname";
        if(mysqli_query($con,$sql)){
            $con = mysqli_connect($servername, $username,$password,$dbname);
            $sql="
            CREATE TABLE IF NOT EXISTS books(
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                book_image longblob NOT NULL,
                book_name VARCHAR (25) NOT NULL,
                book_publisher VARCHAR (20),
                book_price FLOAT,
                book_details VARCHAR (255)
            );
            ";
            if(mysqli_query($con,$sql)){
                return $con;
            }else{
                echo "Cannot create table!";
        }}else{
            echo "Error creating database".mysqli_error($con);
        }
    }
global $con;
    

