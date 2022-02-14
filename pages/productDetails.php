<?php include "includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <img src="<?php echo $productDetails['image'] ; ?>" alt="" class="img-fluid" style="height: 300px">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body" style="min-height: 400px">
                    <h2 class="font-weight-bold"><?php echo $productDetails ['name'] ; ?>Product Name</h2>
                    <p>Price: BDT <?php echo $productDetails['price'] ; ?></p>
                    <p>Description <?php echo $productDetails['description'] ; ?></p>
                    <a href="javascript:void(0)" class="btn btn-outline-success">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
