<?php

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    // create connection
    $con = mysqli_connect($servername, $username, $password);
     
    // Check more connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // creates the Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
                        CREATE TABLE IF NOT EXISTS books(
                            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            book_name VARCHAR (25) NOT NULL,
                            book_author VARCHAR (20),
                            book_page INT,
                            book_year INT 
                        );
        ";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Uh oh, youre table's not gonna be done.";
        }

    }else{
        echo "Error while creating database ". mysqli_error($con);
    }
}
