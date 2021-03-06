<?php
class NavBarModel extends Db
{
    //lấy danh sách NavBar
    public function getNavBar()
    {
        $sql = parent::$conection->prepare('SELECT * FROM `navbar` ORDER BY `pos` ASC');
        return parent::select($sql);
    }

    //lấy danh sách DropdownNavBar
    public function getDropdownNavBar($id)
    {
        $sql = parent::$conection->prepare('SELECT * FROM `dropdown` WHERE `navbar_id`=?');
        $sql->bind_param('i',$id);
        return parent::select($sql);
    }
}
