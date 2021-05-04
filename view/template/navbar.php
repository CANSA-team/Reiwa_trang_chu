<?php
$navbar = setNavBar();
$navbarModel = new NavBarModel();
foreach ($navbar as $item) {
    $dropdown = '';
    $dropdownList = $navbarModel->getDropdownNavBar($item['id']);
    if(!empty($dropdownList)){
        $dropdown .= '<ul class="dropdown">';
        foreach ($dropdownList as $value) {
            $dropdown .= '<li><a href=" '.$value['url'].'" class="nav-text-style-1">'.$value['content'].'</a></li>';
        }
        $dropdown .= '</ul>';
    }
    $content = '<li class="nav-item "><a href="'.$item['url'].'" class="nav-text-style nav-padding is-active">'.$item['name'].'</a>'.$dropdown.'</li>';
    echo $content;
}