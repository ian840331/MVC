<?php 
include('include/header.php');
include('include/nav.php');
?>        
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tables
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-9">
                        <h2>Orders</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Order Number</th>
                                        <th>Book</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Quantity</th>
                                        <th>Total Amount</th>
                                        <th>Order Time</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php 
foreach ($orders as $order){
    echo "
        <tr>
        <td>$order->id</td>
        <td>$order->bookId</td>
        <td>$order->userId</td>
        <td>$order->qty</td>
        <td>$order->orderTime</td>
        <td>1265</td>
        <td>32.3%</td>
        </tr>
        "; 
}
?>


                                </tbody>
                            </table>
                        </div>
                    </div>
</div>
                <div class="row">

                    <div class="col-lg-9">
                        <h2>Book Stock</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
foreach ($books as $book){
    echo "
        <tr>
        <td>$book->id</td>
        <td>$book->title</td>
        <td>$book->author</td>
        <td>$book->category</td>
        <td>$book->description</td>
        <td>$book->price</td>
        <td>$book->rating</td>
        </tr>
        "; 
}
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">

                    <div class="col-lg-9">
                        <h2>Users</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
foreach ($users as $user){
    echo "
        <tr>
        <td>$user->id</td>
        <td>$user->username</td>
        <td>$user->firstName</td>
        <td>$user->lastName</td>
        <td>$user->email</td>
        <td>$user->status</td>
        </tr>
        "; 
}
?>
                                </tbody>
                            </table>
                        </div>
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

