<?php
include('arrays.php');
?>

    <!-- main section -->

    <div class="my-container">
        <h1>my store</h1>
        <div class="row my-row">
            <?php
            foreach ($Items as $member) {
                ?>
                <div class="col-sm-4 my-col">
                    <div class="card c<?php echo $member['id']; ?>">
                        <img class="card-img-top"
                             src="<?php echo $member['picture']; ?>"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo $member['name']; ?></h5>
                            <h5 class="card-title"><?php echo $member['price']; ?></h5>
                            <p class="card-text"><?php echo $member['description']; ?></p>
                        </div>
                        <div class="card-footer text-muted">
                            <button type="button" class="btn btn-secondary" id="btn<?php echo $member['id']; ?>">Add to
                                Cart
                            </button>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
        </div>
    </div>
