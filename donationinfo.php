<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection sucessful";
}else{
    echo "No connection";
} 
mysqli_select_db($con, 'userinfo');
$Name = $_POST['cardholdername'];
$Address= $_POST['address'];
$mobile = $_POST['no'];
$validdate = $_POST['date'];
$amount = $_POST['amount'];
$cvv = $_POST['verification'];
$cardnumber = $_POST['cardnumber'];
$query = "insert into donationinfo (cardholdername, address,no,date,amount,verification,cardnumber) 
values ('$Name', '$Address', '$mobile', '$validdate','$amount','$cvv','$cardnumber')";
echo "$query";
mysqli_query($con,$query);
header(location:'home.php');
?>