<?php

class UserHandler
{
    public function setUserValues()
    {
        return mysqli_query(mysqli_connect("mysql", 'root', getenv('MYSQL_ROOT_PASSWORD')), "INSERT INTO db_name.user
                        (name, lastname)
                        VALUES ('hello','2')");
    }

    public function setArticleValues()
    {
        return mysqli_query(mysqli_connect("mysql", 'root', getenv('MYSQL_ROOT_PASSWORD')), "INSERT INTO db_name.article
                            (userId, label, text)
                            VALUES (2, 'dfghfgd','2')");
    }

    public function getUsers()
    {
        $result = mysqli_query(mysqli_connect("mysql", 'root', getenv('MYSQL_ROOT_PASSWORD')), "SELECT * FROM db_name.user");
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return "users: " . json_encode($emparray);
    }

    public function getUserArticles($userId)
    {
        $result = mysqli_query(mysqli_connect("mysql", 'root', getenv('MYSQL_ROOT_PASSWORD'), 'db_name'), "SELECT article.id,label,text FROM article
        INNER JOIN user ON (article.userId = user.id) WHERE user.id = {$userId}");
        $emparray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $emparray[] = $row;
        }
        return "articles: " . json_encode($emparray);
    }
}