<?php
$current_id = $_GET["current_id"];
$menu_links = [
    [
        "id" => 1,
        "text" => "r4nd0m_num83r5",
        "url" => "http://localhost/Projects/php-snacks-b1/views/random_numbers.php",
    ],
    [
        "id" => 2,
        "text" => "5tud3nt_r3p0rt5",
        "url" => "http://localhost/Projects/php-snacks-b1/views/student_reports.php",
    ],
    [
        "id" => 3,
        "text" => "f4k3_l0g1n",
        "url" => "http://localhost/Projects/php-snacks-b1/views/fake_login.php",
    ],
];

?>


<header class="container">
    <div class="row justify-content-between align-items-center py-4">
        <div class="col-auto">
            <a href="<?php if ($current_id != 0) echo "http://localhost/Projects/php-snacks-b1";
                        else echo "#"; ?>" class="d-inline-block">
                <img id="logo" src="http://localhost/Projects/php-snacks-b1/img/logo.png" alt="PHP Snacks - Logo">
            </a>
        </div>
        <div class="col-auto">
            <nav>
                <ul>
                    <?php
                    foreach ($menu_links as $link) {
                    ?>
                        <li class="d-inline-block mx-4">
                            <a href="<?php if ($current_id != $link["id"]) echo $link["url"];
                                        else echo "#"; ?>" class="d-inline-block <?php if ($link["id"] == $current_id) echo "active" ?>">
                                <?= $link["text"]; ?>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</header>