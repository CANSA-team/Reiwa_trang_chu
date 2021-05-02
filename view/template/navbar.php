<?php
$navbar = setNavBar();
foreach ($navbar as $item) {
    echo $item['url'];
}
