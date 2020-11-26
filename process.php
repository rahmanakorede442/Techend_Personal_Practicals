<?php 
include ('connection.php');
// $_POST['classie'] = 

$age = $_POST['age'];
 
    if ($age=='0-2'){
         $classie="pre_school";
    }
    elseif ($age=='2-4') {
        $classie= "kindergarten";
    }
    elseif ($age=='4-6') {
        $classie= "primary one";
    }
    elseif ($age=='6-8') {
        $classie= "primary two";
    }
    elseif ($age=='8-10') {
        $classie= "primary three";
    }
    elseif ($age=='10-12') {
        $classie= "primary four";
    }
    elseif ($age=='12-14') {
        $classie= "primary five";
    }
    elseif ($age=='overage') {
        $classie= "overage";
    }
 
    


if (isset($_POST['submit']) && ($_POST['age'] !=='overage')){
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$firstname = $_POST['firstname'];
$gender = $_POST['gender'];
$age = $_POST['age'];

$connect = $conn->query("INSERT INTO tbl_profiles (last_name, middle_name,
 first_name, sex, age, classie ) VALUES ('$lastname', '$middlename',
'$firstname', '$gender',
'$age', '$classie')") or die($connect->error);
//  $conn->query($connect);

header('Location: home.php?status=success');
}
else{
    header('Location: home.php?status=error');
}


?>