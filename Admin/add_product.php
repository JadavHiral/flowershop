<?php
ob_start();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<body style="background-image: url('../images/aesthetic.jpg'); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="box col-md-12">

                <form role="form" action="" method="post" enctype="multipart/form-data"
                    style="padding:20px; border:1px solid #5c4033; background-color:#fffbea; margin-top:50px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
                    <h2 align="center" style="color:#5c4033" class="mt-3">🌹 ADD PRODUCT 🌹</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <select name="subcatnm" class="form-control">
                            <option value="1">Flowers</option>
                            <option value="2">Buckes</option>
                            <option value="3">Gift</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" name="pnm" id="exampleInputEmail1"
                            placeholder="Enter Product Name" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Product Price</label>
                        <input type="text" class="form-control" name="price" id="exampleInputEmail1"
                            placeholder="Enter Product Price" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="exampleInputFile">Product Image</label>
                        <input type="file" name="pimg" id="exampleInputFile" required>
                    </div>
                    <div class="mt-3">
                        <!--<button type="submit" class="btn btn-info mt-3">Add</button>-->
                        <!--<button type="submit" class="btn btn-success mt-3 ml-10">Delete</button>-->
                        <!--<button type="submit" class="btn btn-dark mt-3">Edit</button>-->
                        <input type="button" id="b1" value="➕ADD"
                            style="background-color:cornflowerblue; color: white; margin: top 3px;"></input>
                        <script>
                            $("#b1").click(function () {
                                alert("Product added successfully!");
                            }
                            );
                        </script>
                        <input type="button" id="b2" value="✏️EDIT"
                            style="background-color:black; color: white; margin: top 3px;"></input>
                        <script>
                            $("#b2").click(function () {
                                alert("Product edited successfully!");
                            }
                            );
                        </script>
                        <input type="button" id="b3" value="🗑️DELETE"
                            style="background-color:green; color: white; margin: top 3px;"></input>
                        <script>
                            $("#b3").click(function () {
                                alert("Product deleted successfully!");
                            }
                            );
                        </script>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!--/span-->

    </div><!--/row-->
    <?php
    $content1 = ob_get_clean();
    include_once "layout.php";
    include("footer.php");
    ?>