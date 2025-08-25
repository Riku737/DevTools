<?php
require_once('../private/initialize.php');
$page_title = "Login";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $args = $_POST['resource'];
    echo var_dump($args);
}

include(SHARED_PATH . '/public_header.php');
?>

<div class="container-lg mt-5">

    <div class="mb-5">
        <h1 class="fw-bold">Got a Favorite Tool?</h1>
        <p>Help the community grow — suggest a resource and share it with developers worldwide.</p>
    </div>

    <div class="row">
        <form class="col-lg-6" action="suggest.php" method="POST">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Resource Name" name="resource[name]" required>
                <label for="floatingInput">Resource Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Resource URL" name="resource[url]" required>
                <label for="floatingInput">Resource URL</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="resource[category]" required>
                    <option value="" selected disabled>Select a category</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Category</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" required name="resource[description]"></textarea>
                <label for="floatingTextarea">Short Description</label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

</div>

<?php
include(SHARED_PATH . '/public_footer.php')
?>