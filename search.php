
<?php
    include("connect.php");

    if(isset($_GET['searchdata'])){
        $name=$_GET['searchdata'];
        
  
    
            ?>
            
            <div class="table-responsive">
            
                <table class="table table-bordered table-hover" cellspacing="0" cellpadding="4">
            

                <thead>
                 <tr>
                            <th class="table_titles">ID</th>
                            
                            <th class="table_titles">Country</th>
                            <th class="table_titles">Brand</th>
                            <th class="table_titles">Operator</th>
                            <th class="table_titles">Mobile Country Code</th>
                            <th class="table_titles">Mobile Network code</th>
                            <th class="table_titles">Local Area Code</th>
                            <th class="table_titles">Cell Id</th>
                            
                        </tr>
                    </thead>
                    <tbody>
            <?php
            
             $result_per_page=10;
            $query=mysqli_query($con,"select * from gsm_data order by id");
            $number_of_result=mysqli_num_rows($query);
             $number_of_pages=ceil($number_of_result/$result_per_page);
             
            if(!isset($_GET['page'])){
             $page=1;
         }else{
             $page=$_GET['page'];
         }
       
         $this_page_first_result=($page-1)*$result_per_page;
            
            
        $query=mysqli_query($con,"select * from gsm_data where id like '%$name%' or country like '%$name%' or Brand like '%$name%' or Operator like '%$name%' or MCC like '%$name%' or MNC like '%$name%' or LAC like '%$name%' or CellID like '%$name%' order by id limit ".$this_page_first_result.','.$result_per_page);
        while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['country']?></td>
            <td><?php echo $row['Brand']?></td>
            <td><?php echo $row['Operator']?></td>
            <td><?php echo $row['MCC']?></td>
            <td><?php echo $row['MNC']?></td>
            <td><?php echo $row['LAC']?></td>
            <td><?php echo $row['CellID']?></td>
            
            
       </tr>
       </tbody>
                </table>
               
            </div>
            
        <?php
    }
    
        //echo $ouput;
    }
    
     if(isset($_GET['searchlac'])){
        $name=$_GET['searchlac'];
        $lachex=dechex($name);
        echo $lachex;?>
        
                <?php
    }
     if(isset($_GET['searchcid'])){
        $name=$_GET['searchcid'];
        $cidhex=dechex($name);
        echo $cidhex;?>
        
                <?php
    }
    
    
    if(isset($_GET['searchuser'])){
        $name=$_GET['searchuser'];
        //echo $name;
        
        ?>
        <div class="table-responsive">
        <table class="table table-bordered table-hover" cellspacing="0" cellpadding="4">
                    <thead>
                        <tr>
                            <th class="table_titles">ID</th>
                            <th class="table_titles">Name</th>
                            <th class="table_titles">Email</th>
                            <th class="table_titles">Address</th>
                            <th class="table_titles">Telephone</th>
                            <th class="table_titles">Cnic</th>
                            <th class="table_titles">Description</th>
                            
                        </tr>
                    </thead>
                    <tbody>
        <?php
            
        $query=mysqli_query($con,"select * from users  where id like '%$name%' or name like '%$name%'
        or email like '%$name%' or address like '%$name%' or telephone like '%$name%' or cnic like '%$name%' or description like '%$name%' order by id ");
         while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['telephone']?></td>
            <td><?php echo $row['cnic']?></td>
            <td><?php echo $row['description']?></td>
            
       </tr>
       </tbody>
                </table>
               
            </div>
            <?php
    }
    }
    
   
    
?>
