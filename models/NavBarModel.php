<?php
class NavBarModel extends Db
{
    //lấy danh sách banner
    public function getNavBar()
    {
        $sql = parent::$conection->prepare('SELECT * FROM `navbar`');
        return parent::select($sql);
    }
}
