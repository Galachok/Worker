<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div id="wrapper">
        <div id="leftColumn">
            <?php
            for ($i = 0; $i < count($newsList); $i++) {
                echo "<div class=\"article\">";
                echo '<img src="img/articles/' . $newsList[$i]["id_news"] . '.jpg" alt="' . $newsList[$i]["title_news"] . '" title="' . $newsList[$i]["title_news"] . '">
                <h2>' . $newsList[$i]["title_news"] . '</h2>
                <p>
                   ' . $newsList[$i]["intro_text_news"] . '
                </p>
                <a href="/news/' . $newsList[$i]["id_news"] . '">
                    <div>Далее</div>
                </a>
            </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
