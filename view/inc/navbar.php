<nav>
        <a href="./" class="logo">DevPortfolio</a>
        <button class="menu-toggle">☰</button>
            <ul class="nav-links">
<?php
if(!isset($_GET['p'])):
?>
        <li><a href="./" class="active">Accueil</a></li>
<?php
else:
?>
        <li><a href="./">Accueil</a></li>
<?php                             
endif; 
foreach(ARRAY_VALID_PAGES as $page):
    $active = (isset($_GET['p']) && ($page == $_GET['p']))
    ? 'class="active"'
    :" ";
?>
<li><a href="?p=<?= $page?>"><?= ucfirst($page)?></a></li>
<?php
endforeach;   
?>
</ul>
    </nav>