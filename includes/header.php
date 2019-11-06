<?php

// le header et le menu sont communs à toutes les pages
// on peut dont les stocker dans un fichier externe qu'on pourra inclure là où on en a besoin

// on crée un tableau qui contient les différentes entrées du menu de navigation et on les stocke dans une variable
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
                // on parcours le tableau et pour chaque élément du tableau on affiche un li
                // à l'intérieur de chaque li, on insère un a et on récupère l'élément courant pour créer le chemin vers le fichier correspondant en faisant une concaténation
                foreach ($menu as $item) {
                    echo "<li><a href=$item.php>$item</a></li>";
                }
            ?>
            <!-- exemple de lien vers une ressource externe avec ouverture dans un nouvel onglet -->
            <li><a href="http://google.com" target='_blank' rel='noopener'>Gogol</a></li>
        </ul>
    </nav>
</header>