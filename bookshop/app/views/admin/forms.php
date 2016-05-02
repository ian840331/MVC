    <?php include('include/header.php');
       include('include/nav.php');?>
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            New Book
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="forms.php" method="POST">

                           
                            <div class="form-group">
                                <label>Book Title</label>
                                <input class="form-control" placeholder="Title" name="title">
                            </div>
                             <div class="form-group">
                                <label>Author</label>
                                <input class="form-control" placeholder="Author" name="author">
                            </div>
                             <div class="form-group">
                                <label>Category</label>
                                <input class="form-control" placeholder="Category" name="category">
                            </div>

                           <div class="form-group">
                                <label>Price</label>
                                <!-- <span class="input&#45;group&#45;addon">$</span> -->
                                <input type="text" class="form-control" placeholder="Price" name="price">
                                <!-- <span class="input&#45;group&#45;addon">.00</span> -->
                            </div>
                            <div class="form-group">
                                <label>Book Cover</label>
                                <input type="file" name="picture">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            <button type="reset" class="btn btn-default">Clear</button>
                            

                           

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include('include/footer.php');?>
