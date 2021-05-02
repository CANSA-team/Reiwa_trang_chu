<?php
$navbar = setNavBar();
foreach ($navbar as $item) {
    $dropdown = '';
    if(!empty($item['dropdown_id'])){
        $navbarModel = new NavBarModel();
        $dropdown = $navbarModel->getDropdownNavBar($item['dropdown_id']);
    }
    $content = '<li class="nav-item "><a href="'.$item['url'].'" class="nav-text-style nav-padding is-active">'.$item['name'].'</a>'.$dropdown.'</li>';
    echo $content;
}
