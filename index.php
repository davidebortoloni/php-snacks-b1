<?php
$_GET['current_id'] = 0;
$_GET['title'] = "Home";
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
    <main class="my-4">
        <div class="container">
            <div class="row justify-content-center g-5">
                <div class="col-6">
                    <a class="snack-link" href="http://localhost/Projects/php-snacks-b1/views/random_numbers.php">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            r4nd0m_num83r5
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a class="snack-link" href="http://localhost/Projects/php-snacks-b1/views/student_reports.php">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            5tud3nt_r3p0rt5
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a class="snack-link" href="http://localhost/Projects/php-snacks-b1/views/fake_login.php">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            f4k3_l0g1n
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>