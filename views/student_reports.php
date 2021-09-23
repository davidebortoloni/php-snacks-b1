<?php
$_GET['current_id'] = 2;
$_GET['title'] = "5tud3nt5_r3p0rt5";

$students = [
    [
        "name" => "Davide",
        "lastname" => "Bortoloni",
        "votes" => [
            10, 7, 8,
        ],
    ],
    [
        "name" => "Marilena",
        "lastname" => "Cantisani",
        "votes" => [
            7, 9, 6,
        ],
    ],
    [
        "name" => "Giorgio",
        "lastname" => "Andrei",
        "votes" => [
            10, 6, 8,
        ],
    ],
];

function getAverageArray($arr)
{
    $num = array_sum($arr) / count($arr);
    return number_format($num, 2);
}
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
                    <h1>Student reports</h1>
                    <ul class="list-unstyled">
                        <?php
                        foreach ($students as $student) {
                        ?>
                            <li class="my-4">
                                <?php
                                echo "<h3>" . $student["name"] . " " . $student["lastname"] . "</h3>";
                                echo "<strong>Average: </strong>" . getAverageArray($student["votes"]);
                                ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>

</html>