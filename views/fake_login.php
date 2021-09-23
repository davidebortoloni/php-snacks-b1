<?php
$_GET['current_id'] = 3;
$_GET['title'] = "f4k3_l0g1n";

?>

<!DOCTYPE html>
<html lang="en">

<?php
// Head
include_once($_SERVER['DOCUMENT_ROOT'] . '/Projects/php-snacks-b1/components/head.php');
?>

<body>
    <?php
    // Header
    include_once($_SERVER['DOCUMENT_ROOT'] . '/Projects/php-snacks-b1/components/header.php');
    ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Write here...">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Write here...">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" min="1" placeholder="Write here...">
                        </div>
                        <button type="submit" class="btn btn-dark my-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>