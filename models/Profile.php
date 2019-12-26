<?php


class Profile
{
    # USERS id name last_name email created at avatar
    public static function actionProfile($id)
    {
        $id = intval($id);
        if ($id){
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM users WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $userInfo = $result->fetch();
            return $userInfo;
        }
    }
}