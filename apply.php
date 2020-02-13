<?php include("header.php");?>
<?php include("menu.php");?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Hostel Application</div>
                    <div class="card-body">
                        <form action="applyprocess.php" method="post">
                            <table class ="table table-borderless">
                                <tr>
                                    <td>
                                        <?php 
                                            if(isset($_GET['error'])){
                                                echo "Invalid Username / Password";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                            <select class="form-control" name="college">
                                                <option>Select College</option>
                                                <option value="M">Medical</option>
                                                <option value="E">Engineering</option>
                                   catagroy             <option value="P">Pharmacy</option>
                                            </select>


                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                         <select class="form-control" name="category">
                                                <option>Select Catagroy</option>
                                                <option value="ST">ST</option>
                                                <option value="SEBC">SEBC</option>
                                                <option value="SC">SC</option>
                                                <option value="OPEN">OPEN</option>
                                            </select>

                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="merit" class="form-control"/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn btn-warning fullwidth"/></td>
                                </tr>
                            </table>   
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
<?php include("footer.php");?>
    