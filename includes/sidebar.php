 <div class="col-md-4">

             <!-- Login-->
             <div class="well border border-warning p-4 mb-4 mt-4" style="background-color:#fbf2e6">
                    <h4>Admin Login</h4>
                    <form action="login.php" method="post">
                    <div class="input-group pb-3">
                        <input type="text" class="form-control" name="username" placeholder="Enter username ">
                    </div>

                    <div class="input-group pb-3">
                        <input type="password" class="form-control" name="password" placeholder="Enter password ">
                    </div>

                    <button class="btn btn-warning" type="submit" name="login"> Login </button>


                    </form>
                    <!-- /.input-group -->
                </div>




                <!-- Blog Search Well -->
                <div class="well border border-warning p-4 mb-4 mt-4" style="background-color:#fbf2e6">
                    <h4>Search by tags</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" name="submit" type="submit" style="background:#ddbc95;>
                                <span class="input-group-text pt-0 pb-0">🔍</span>
                            </button>
                        </span>
                    </div>
                    </form>
                </div>




                <!-- Blog Categories Well -->
                <div class="well border border-warning pt-4 pb-0 pr-4 pl-4 mb-4 mt-4" style="background-color:#fbf2e6"">

            <?php
                $query="SELECT * FROM categories";
                $select_categories_sidebar=mysqli_query($connection,$query);
            ?>



                    <h4>Topics</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">

                        <?php
                            while($row=mysqli_fetch_assoc($select_categories_sidebar)){
                            $cat_title=$row['cat_title'];
                            $cat_id=$row['cat_id'];
                            echo "<li><a href='./category_read_all.php?category=$cat_id'>$cat_title</a></li>";
                        }
                        ?>

                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>



                <!-- Side Widget Well -->
                <?php include "widget.php"; ?>

            </div>