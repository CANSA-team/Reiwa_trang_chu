<?php
$navbar = setNavBar();
$navbarModel = new NavBarModel();
foreach ($navbar as $item) {
    $dropdown = '';
    $dropdownList = $navbarModel->getDropdownNavBar($item['id']);
    if (!empty($dropdownList)) {
        $dropdown .= '<ul class="dropdown ul-item">';
        foreach ($dropdownList as $value) {
            if ($value['status'] == 1) {
                $dropdown .= '<li class="item-nav"><a href=" ' . $value['url'] . '" class="nav-text-style-1 nav-a">' . $value['content'] . '</a></li>';
            }
        }
        $dropdown .= '</ul>';
    }
    $active = '';
    if (!empty($_GET['pos'])) {
        $active = ($item['pos']==$_GET['pos'])?'is-active':'';
    }
        $pos =$item['url'] != './'?"&pos=".$item['pos']:"?pos=".$item['pos'];
    $content = '<li class="nav-item item-nav"><a href="' . $item['url'] .$pos. '" class="nav-text-style nav-padding nav-a '.$active.'">' . $item['name'] . '</a>' . $dropdown . '</li>';
    echo $content;
}
