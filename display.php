<?php include("header.php");?>
<?php include("menu.php");?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br/>
                <table class="table table-bordered">
                <thead class="thead-dark">
                    <th>Id</th>
                    <th>College</th>
                    <th>Category</th>
                    <th>Merit</th>

                </thead>
                <?php
                        include("dao.php");
                        $sql = "select * from apply_tbl";

                        $result = mysqli_query($connection,$sql);
                        
                        while($row = mysqli_fetch_assoc($result))
                        {
                        
                            echo  "<tr><td>".$row['id']."</td>";
                            echo  "<td>".$row['college']."</td>";
                            echo  "<td>".$row['category']."</td>";
                            echo  "<td>".$row['merit']."</td></tr>";
                           
                        }
                ?>
               </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
<?php include("footer.php");?>
    