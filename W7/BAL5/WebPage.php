<?php
    include "Page.php";
    $a="";
    $newPage = new Page("Title ", 2022, ", Copyright by ABC company.");
    echo $newPage->get();
    $a = "Oh! I was add some content here!!";
    $newPage->addContent($a);
    echo $newPage->get();
?>