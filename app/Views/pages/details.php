<style>
        * {
        box-sizing: border-box;
    }

    .add-inputs,
    .add-inputs input {
        float: left;
        margin-right: 10px;
        margin-bottom: 2px;
    }

    .add-inputs button {
        border-radius: 0;
    }

    .add-inputs input {
        height: 48px;
        width: 65px;
        border-radius: 0;
    }


    .par-title {
        font-size: 1.1rem;
        font-weight: bold;
    }
</style>


<div class="container my-5">


<div class="row">

    <div class="col-md-6">
        <img class="img-fluid details-img" src="<?php echo BASE_URL . $data["product_image1"]; ?>" alt="">
    </div>
    <div class="col-md-6">
        <span><?php echo $data["product_category"]; ?></span>
        <h3><?php echo $data["product_title"]; ?></h3>
        <h3>$<?php echo $data["product_price"]; ?></h3>


        <form class="add-inputs" method="post">
            <input type="number" class="form-control" id="cart_quantity" name="cart_quantity" value="1" min="1" max="10">
            <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Add to cart</button>
        </form>
        <form class="add-inputs" method="post">
            <button name="add_to_cart" type="submit" class="btn btn-primary btn-lg">Add to Wishlist</button>
        </form>
        <div style="clear:both"></div>



        <p class="par-title mt-4 mb-1">About this product</p>
        <p class="dummy-description mb-4">
        <?php echo $data["product_description"]; ?>
        </p>



    </div>
</div>
<!-- End row -->
</div>
<!-- End Container -->