<?php

require_once('../private/initialize.php');
$page_title = "Home";

include(SHARED_PATH . '/public_header.php');

?>

<div class="container-lg pt-5">

    <div class="mb-4">
        <h1 class=" fw-bold">All Your Developer Tools in One Place</h1>
        <p>Discover, organize, and access the resources you need to build faster and smarter.</p>
    </div>

    <div class="row g-3">
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="link">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>

<?php
include(SHARED_PATH . '/public_footer.php');
?>