<?php
class ContactModel extends Db
{
    //lấy thông tin liên hệ
    public function getContact()
    {
        $sql = parent::$conection->prepare('SELECT * FROM `contact`');
        return parent::select($sql);
    }
//lấy thông tin liên hệ
public function getContactById($id)
{
    $sql = parent::$conection->prepare('SELECT * FROM `contact` WHERE `id` = ?');
        $sql->bind_param('i', $id);
        return parent::select($sql)[0];
}
    //sửa thông tin liên hệ
    public function updateContact($data)
    {
        if (empty($data['link']) && empty($data['id'])) {
            return false;
        }
        $link = $data['link'];
        $id = $data['id'];
        $sql = parent::$conection->prepare('UPDATE `contact` SET `link`=? WHERE `id`=?');
        $sql->bind_param('si', $link, $id);
        return $sql->execute();
    }
}
