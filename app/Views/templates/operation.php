<?php 
require_once ('db.php');
require_once ('input.php');

$con = Createdb();

//create dugme klik
if(isset($_POST['create'])){
    createData();
}

//dugme update
if(isset($_POST['update'])){
    UpdateData();
}
//dugme delete 
if(isset($_POST['delete'])){
    deleteRecord();
}
//brisanje svega
if(isset($_POST['deleteall'])){
    deleteAll();
}

function createData(){
    $bookimg = textboxValue("book_image");
    $bookname = textboxValue("book_name");
    $bookpublisher = textboxValue("book_publisher");
    $bookprice = textboxValue("book_price");
    $bookdetails = textboxValue("book_details");

    if($bookimg && $bookname && $bookprice && $bookpublisher){
        $sql= "INSERT INTO books (book_image, book_name, book_publisher, book_price, book_details)
        VALUES ('$bookimg','$bookname','$bookpublisher','$bookprice', '$bookdetails')";

        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Record Successfully inserted!");
            
        }else{
            echo "Error";
        }
    }else{
        TextNode("error", "Provide Data in the Textbox");
    }
}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}
//poruke
function TextNode($classname, $msg){
    $element ="<h6 class='$classname'>$msg</h6>";
    echo $element;
}
//prikaz u tabeli
function getData(){
    $sql= "SELECT * FROM books";
   $res = mysqli_query($GLOBALS['con'], $sql);

   if(mysqli_num_rows($res)>0){
        return $res;
   }
}
//update knjiga
function UpdateData(){
    $bookid= textboxValue("book_id");
    $bookname = textboxValue("book_name");
    $bookpublisher= textboxValue("book_publisher");
    $bookprice= textboxValue("book_price");
    $bookdetails= textboxValue("book_details");

    if($bookname && $bookpublisher && $bookprice){
        $sql = "
         UPDATE books SET book_name='$bookname', book_publisher='$bookpublisher', book_price='$bookprice', book_details='$bookdetails' WHERE id='$bookid'
        ";
        if(mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Data Successfully Updated");
            }else{
            TextNode("error", "Unable to Update Data");
        } 
    }else{
        TextNode("error", "Select Data Using Edit Icon.");
        
    }
}
//za pojedinacno brisanje
function deleteRecord(){
    $bookid = (int)textboxValue("book_id");

    $sql = "DELETE FROM books WHERE id=$bookid";

    if(mysqli_query($GLOBALS['con'],$sql)){
        TextNode("success", "Record Deleted Successfully!");
    }else{
        TextNode("error", "Unable to Delete Record!");
    }
}
//dugme za brisanje svega
function deleteBtn(){
    $res = getData();
    $i=0;
    if($res){
        while($row = mysqli_fetch_assoc($res)){
            $i++;
            if($i> 3){
                buttonElement("btn-deleteall","btn btn-danger","<i class='fa fa-trash'></i> Delete All","deleteall","");
                return;
            }
        }
    }
}
//f-ja za brisanje svega
function deleteAll(){
    $sql="DROP TABLE books";

    if(mysqli_query($GLOBALS['con'],$sql)){
        TextNode("success", "ALL RECORDS DELETED");
        Createdb();
    }else{
        TextNode("error", "Records cannot be deleted");
    }
}
//da pise id koji se unosi 
function setID(){
    $getid=getData();
    $id=0;
    if($getid){
        while($row= mysqli_fetch_assoc($getid)){
           $id= $row['id'];
        }
    }
    return ($id +1);
}
