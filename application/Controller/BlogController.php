<?php

namespace Controller;

use Core\Controller;

class BlogController extends Controller
{
	public function indexAction()
	{
		$model_news = $this->loadModel('News');
		$news = $model_news->getNews();
		echo $this->view->render('News/news_view.php', array('news' => $news));
	}

	public function articleAction($slug)
	{
		$model_news = $this->loadModel('News');
		$article = $model_news->getArticleBySlug($slug);
		echo $this->view->render('News/article_view.php', array('article' => $article));
	}

	public function editAction($id = null)
	{
		$model_news = $this->loadModel('News');
		if (isset($_POST['save_news'])) {
			$model_news->saveNews();
		}
		$article = $model_news->getArticleById($id);
		echo $this->view->render('News/article_edit.php', array('article' => $article));
	}

}
