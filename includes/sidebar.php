<div class="col-md-4">

        <?php

        if(isset( $_POST['submit'])){
        $search =  $_POST['search'];

        $query = "SELECT * FROM posts where post_tags like '%$search%'";

        $search_query = mysqli_query($connection, $query);

        if(!$search_query){

            die("QUERY FAILED". mysqli_error($connection));

        }

        $count = mysqli_num_rows($search_query);

        if($count === 0){
            echo "Sorry No Tag Matched!";
        }else{

            
        }

        }
        ?>

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
        <div class="input-group">
            <input type="text" class="form-control" name="search">
            <span class="input-group-btn">
                <button class="btn btn-default" name="submit">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
        </form><!--Form End-->
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">

        <?php

        $query = "SELECT * FROM categories";
        $select_all_categories_query = mysqli_query($connection,$query);
        ?>

        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">

                <?php
                while($row = mysqli_fetch_assoc($select_all_categories_query)){
                    $cat_title = $row['cat_title'];

                    echo "<li><a href='#'>$cat_title</a></li>";
                }   

                ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
           
        <!-- /.col-lg-6 -->
