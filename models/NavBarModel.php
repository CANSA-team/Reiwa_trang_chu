<?php
class NavBarModel extends Db
{
    //lấy danh sách NavBar
    public function getNavBar()
    {
        $sql = parent::$conection->prepare('SELECT * FROM `navbar`');
        return parent::select($sql);
    }

    //lấy danh sách DropdownNavBar
    public function getDropdownNavBar($id)
    {
        $sql = parent::$conection->prepare('SELECT * FROM `dropdown` WHERE `id`=?');
        $sql->bind_param('i',$id);
        return parent::select($sql)[0]['url'];
    }
}
