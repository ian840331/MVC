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
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>
        </div>

        <div class="col-md-9">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="slide-image" src="image/book1.png" alt="" style="width:850px;height:500px;">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="image/book2.png" alt="" style="width:850px;height:500px;">
                            </div>
                            <div class="item">
                                <img class="slide-image" src="image/book3.png" alt="" style="width:850px;height:500px;">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <?php

                foreach ($books as $book)
                {
                    $book_info = <<<bookInfo
<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="$book->picture" alt="" style="width:320px;height:150px;">
                            <div class="caption">
                                <h4 class="pull-right">$book->price</h4>
                                <h4><a href="index.php?book=$book->id">$book->title</a>
                                </h4>
                                <p>$book->description</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">Rating: $book->rating</p>
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
bookInfo;

                    echo $book_info;

                }

                ?>

            </div>

        </div>

    </div>

</div>
<!-- /.container -->

<?php
include('include/footer.php');
?>
