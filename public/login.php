<?php
require_once('../private/initialize.php');
$page_title = "Login";

include(SHARED_PATH . '/public_header.php');
?>

<div class="container-lg mt-5">

    <h1 class="mb-5 fw-bold">Login</h1>

    <div class="row">
        <form class="col-lg-6">
            <div class="form-floating mb-3">
                <input type="username" class="form-control" id="floatingInput" placeholder="Username" name="username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

</div>

<?php
include(SHARED_PATH . '/public_footer.php');
?>