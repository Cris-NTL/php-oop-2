<main>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $key => $product) { ?>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product->image; ?>" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <i class="<?php echo $product->category->icon; ?>"></i>
                            <p>Category: <?php echo $product->category->name ?></p>
                            <p>Price: € <?php echo $product->price ?></p>
                            <p><?php echo $product->getDetails(); ?></p>
                            <?php if (get_class($product) === "Food") { ?>
                                <p><?php echo $product->getExpiration(); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>