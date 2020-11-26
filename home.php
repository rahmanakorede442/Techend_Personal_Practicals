<?php
if(isset($_GET['status']) && ($_GET['status'] == 'success')){

?>
<div class="alert alert-success">
<span> Registeration Successful!</span>
</div>
<?php
}
else{

?>
<div class="alert alert-danger">
<span> Ooops! You are overage and can not register</span>
</div>
<?php
}
?>

<?php  
include 'header.php';
include 'connection.php';
?>
<?php 
//  $result = $connect->query("SELECT * FROM tbl_profiles") or die($connect->error);
//  align($result);
//  align($result->fetch_assoc());

//  function align($array){
//      echo '<pre>';
//      print_r($array);
//      echo '</pre>';
//  }
?>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>Middle Name</td>
                        <th>First Name</th>
                        <th>Sex</th>
                        <th>Age</th>
                        <th>Class</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                // if ($result->num_rows > 0){
                //     while(){

                //     }
                // }
                ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>    
<?php 
include 'add_form.php';
include 'footer.php'; 
?>