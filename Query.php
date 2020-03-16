<li class="dropdown hidden-xs">
                        <div href="#" class="dropdown-toggle ProfileImg" data-toggle="dropdown" role="button"
                            aria-haspopup="true">
                        </div>
                        
                        <div class="ProfileCard">
                            <?php
                            $query=mysqli_query($con,"select * from users where md5(id)='$id'");
                            while($row=mysqli_fetch_array($query)){
                                ?>
                            <div class="col-xs-offset-4 col-xs-4">
                                <img src="<?php echo $row['image']; ?>"  class="img-responsive">
                            </div>
                            
                            
                            <div class="col-xs-12">
                                <h1><?php echo $row['fname'];
                                echo ' ';
                                echo $row['lname'];
                                ?></h1>
                                <h2><?php echo $row['email']; ?></h2>
                            </div>
                            <div class="col-xs-12 CardDetails">
                                <div><i class="fa fa-phone"></i>
                                <?php echo $row['telephone']; ?>
                                </div>
                                <div><i class="fa fa-map-marker"></i>
                                <?php echo $row['address']; ?></div>
                            </div>
                            
                            <div class="col-xs-12 logout">

                                <a href="logout.php" type="submit" name="login" class="btn MyButton">
                                    Logout
                                </a>
                                <a href="update.php?id=<?php echo $id ?>" type="submit" name="login" class="btn MyButton">
                                    update
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                            ?>
                    </li>