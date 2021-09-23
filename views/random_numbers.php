<?php
$_GET['current_id'] = 1;
$_GET['title'] = "r4nd0m_num83r5";

function random_numbers($min, $max, $n)
{
    $random_numbers = [];
    while (count($random_numbers) < $n) {
        $random_number = mt_rand($min, $max);
        if (!in_array($random_number, $random_numbers)) {
            $random_numbers[] = $random_number;
        }
    }
    return $random_numbers;
}
$fifteen_rand_num = random_numbers(1, 100, 15);
sort($fifteen_rand_num);
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
                <div class="col-auto text-center">
                    <h1>Random numbers</h1>
                    <ul class="list-unstyled">
                        <?php
                        foreach ($fifteen_rand_num as $num) {
                            echo "<li>$num</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>

</html>