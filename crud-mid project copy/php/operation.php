<?php

require_once ("db.php");
require_once ("component.php");

$con = Createdb();

// create button click
if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();

}

function createData(){
    $bookname = textboxValue("book_name");
    $bookauthor = textboxValue("book_author");
    $bookpage = textboxValue("book_page");
    $bookyear = textboxValue("book_year");
// add button data here

    if (strlen($bookname) < 5 || strlen($bookname) >20 ) {
        TextNode("Error", "Book Name Must be Between 5 and 20 letters.");
    } elseif (strlen($bookauthor) < 5 || strlen($bookauthor) >20 ) {
        TextNode("Error", "Author Name Must be Between 5 and 20 letters.");
    } elseif ($bookpage <= 0) {
        TextNode("Error", "Book Page Must Be More Than 0.");
    } elseif ($bookyear < 2000 || $bookyear > 2021) {
    TextNode("Error", "Must Be Between year 2000 and 2021");
    } else {
            if($bookname && $bookauthor && $bookpage && $bookyear){
        
                $sql = "INSERT INTO books (book_name, book_author, book_page, book_year) 
                                VALUES ('$bookname','$bookauthor','$bookpage','$bookyear')";

                if(mysqli_query($GLOBALS['con'], $sql)){
                    TextNode("Success", "Record Successfully Inserted.");
                }else{
                    echo "Error";
                }

            }else{
                    TextNode("Error", "Please Insert Data in the Textbox.");
            }
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// get data from mysql database
function getData(){
    $sql = "SELECT * FROM books";
    $result = mysqli_query($GLOBALS['con'], $sql);
    if(mysqli_num_rows($result) > 0){
        return $result;
    }
}

// update dat
function UpdateData(){
    $bookid = textboxValue("book_id");
    $bookname = textboxValue("book_name");
    $bookauthor = textboxValue("book_author");
    $bookpage = textboxValue("book_page");
    $bookyear = textboxValue("book_year");


    if (strlen($bookname) < 5 || strlen($bookname) >20 ) {
        TextNode("Error", "Book Name Must be Between 5 and 20 letters.");
    } elseif (strlen($bookauthor) < 5 || strlen($bookauthor) >20 ) {
        TextNode("Error", "Author Name Must be Between 5 and 20 letters.");
    } elseif ($bookpage <= 0) {
        TextNode("Error", "Book Page Must Be More Than 0.");
    } elseif ($bookyear < 2000 || $bookyear > 2021) {
     TextNode("Error", "Must Be Between year 2000 and 2021");
    } else {
        if($bookname && $bookauthor && $bookpage && $bookyear){
            $sql = "
                        UPDATE books SET book_name='$bookname', book_author = '$bookauthor', book_page = '$bookpage',book_year = '$bookyear' WHERE id='$bookid';                    
            ";

            if(mysqli_query($GLOBALS['con'], $sql)){
                TextNode("Success", "Data Successfully Updated");
            }else{
                TextNode("Error", "Unable to Update Data");
            }

        }else{
            TextNode("error", "Select Data Using Edit Icon");
        }
    }
}


function deleteRecord(){
    $bookid = (int)textboxValue("book_id");

    $sql = "DELETE FROM books WHERE id=$bookid";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("Success","Record Deleted Successfully.");
    }else{
        TextNode("Error","Unable to Delete Record.");
    }

}


function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 3){
                buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}


function deleteAll(){
    $sql = "DROP TABLE books";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","All Record Deleted.");
        Createdb();
    }else{
        TextNode("error","Something Went Wrong, Record Not Deleted");
    }
}


// basically get the ID to keep rising
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['id'];
        }
    }
    return ($id + 1);
}








