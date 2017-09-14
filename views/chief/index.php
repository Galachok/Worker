<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Отображаем подменю при наведении</title>
    <link rel="stylesheet" href="/component/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/component/css/simplePagination.css">
    <script src="/component/js/jquery.js"></script>
    <script src="/component/js/Index.js"></script>
    <script src="/component/js/jquery.simplePagination.js" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid">
    <div class="work list-group">
        <?php
        for ($i = 1; $i < count($indexList); $i += 2) {
            echo '<a href="/Sector/?id=' . $indexList[$i + 1] . '" class="worker list-group-item" id=' . $indexList[$i + 1] . '>' . $indexList[$i] . '</a>';
        }
        ?>
    </div>
    <div class="menu-pagination">
        <nav aria-label="Page navigation">
            <ul class="pagination" id="pagination"></ul>
        </nav>
    </div>
</div>
<div id='secret' hidden="true" title="<?php echo $indexList[0] ?>">
    <h1 hidden="true" id='currentPage' title="<?php
    $temp = explode('/', (trim($_SERVER['REQUEST_URI'], '/')));
    echo array_pop($temp);
    ?>">
    </h1>
</div>
</body>

