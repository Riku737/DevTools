<?php
require_once('../private/initialize.php');
$page_title = "Login";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $args = $_POST['resource'];
    $suggestion = new Suggestion($args);
    $_SERVER['alert'] = "Suggestion successfully submitted. Thank you.";
} else {
    $suggestion = new Suggestion();
}

include(SHARED_PATH . '/public_header.php');
?>

<div class="container-lg mt-5">

    <div class="row">

        <form class="col-lg-6 offset-lg-3" action="suggest.php" method="POST">

            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Suggestion submitted!</strong> Thank you for your suggestion.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->

            <div class="mb-4">
                <h1 class="fw-bold">Got a Favorite Tool?</h1>
                <p>Help the community grow — suggest a resource and share it with developers worldwide.</p>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Resource Name" name="resource[name]" required value="<?php echo $suggestion->getName(); ?>">
                <label for="floatingInput">Resource Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Resource URL" name="resource[url]" required value="<?php echo $suggestion->getURL(); ?>">
                <label for=" floatingInput">Resource URL</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="resource[category]" required>
                    <option
                        <?php if ($suggestion->getCategory()) {
                            echo "selected";
                        } ?>>
                        Select a category
                    </option>
                    <?php foreach (Suggestion::getCategories() as $value) { ?>
                        <?php if ($value == $suggestion->getCategory()) { ?>
                            <option selected value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    <?php } ?>
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