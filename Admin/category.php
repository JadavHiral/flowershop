<?php
$title_page = "";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .category-list {
            max-width: 500px;
            margin: 40px auto;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .category-title {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }
    </style>
</head>

<body>
    <div class="category-list">
        <h2 class="category-title">Categories</h2>
        <ul class="list-group">

            <div class="card" style="width:400px">
                <img class="card-img-top" src="../images/redlilies.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">RED LILIES</h4>
                    <!--<p class="card-text">Some example text.</p>-->
                    <!--<a href="#" class="btn btn-primary">See Profile</a>-->
                </div>
            </div>

            <div class="card" style="width:400px">
                <img class="card-img-top" src="../images/sunflower.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">RED LILIES</h4>
                    <!--<p class="card-text">Some example text.</p>-->
                    <!--<a href="#" class="btn btn-primary">See Profile</a>-->
                </div>
            </div>


            <?php
            $categories = [
                "Roses",
                "Lilies",
                "Tulips",
                "Orchids",
                "Daisies"
            ];
            foreach ($categories as $cat) {
                echo "<li class='list-group-item'>{$cat}</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>
<?php
$content1 = ob_get_clean();
include_once('layout.php');
?>