<?php

include_once  ROOT . '/components/Renderer.php';
    include_once  ROOT . '/models/News.php';

class NewsController
{
    public function actionIndex()
    {
        $newsList = [];
        $newsList = News::getNewsList();
        echo Renderer::includeWithVariables( ROOT . '/views/news/index.php', ['newsList'=> $newsList]);
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = News::getNewsItemById($id);

            echo "<pre>";
            print_r($newsItem);
            echo "</pre>";

            echo 'actionView';
        }
        return true;
    }
}