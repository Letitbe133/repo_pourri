<?php

$menu = array(
    "accueil",
    "about",
    "contact",
    "blog"
);

?>

<header>
    <nav>
        <ul>
            <?php
                foreach ($menu as $item) {
                    echo "<li><a href=$item.php>$item</a></li>";
                }
            ?>
            <li><a href="http://google.com" target='_top' rel='noopener'>Gogol</a></li>
        </ul>
    </nav>
</header>