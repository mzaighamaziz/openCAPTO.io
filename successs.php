
  <?php 

if(isset($_GET['amount'])){
        $amount=$_GET['amount'];
        $id=$_GET['user'];
       
        
}

 //header('location:success.php?amount='.$amount.'&id='.$id.'');
 //if(!isset($_GET['amount'])){
 date_default_timezone_set('Asia/karachi');
     $dateS = date('y/m/d');

$query=mysqli_query($con,"insert into payment values (null,'$amount','$id','$dateS')");
if(!$query){
    echo "error";
}
//}
 
 ?>