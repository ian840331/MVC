<?php
include('include/header.php');

include('include/nav.php');
?>


<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <p class="lead">Shop Name</p>
            <div class="list-group">
                <a href="#" class="list-group-item active">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>
        </div>

        <div class="col-md-9">

            <div class="thumbnail">
                <img class="img-responsive" src="<?php echo $book->picture?>" alt="">
                <div class="caption-full">
                    <h4 class="pull-right">Price: $<?php echo $book->price?></h4>
                    <h4 style="color:blue;"><?php echo $book->title?></h4>
                    <p><?php echo $book->description?></p>
                </div>
                <div class="ratings">

                    <p>
<?php 
$rating = Ceil($book->rating);
for ($i = 0; $i < $rating ; $i++) {
   echo "<span class='glyphicon glyphicon-star'></span>";
}
for ($i = 0; $i < 5 - $rating; $i++) {
   echo "<span class='glyphicon glyphicon-star-empty'></span>";
}
echo $book->rating
?> stars
                    </p>


        </div>

    </div>

</div>
<!-- /.container -->

<?php
include('include/footer.php');
?>
