<?php

namespace Controller;

use Core\Controller;

class MainController extends Controller
{
	function indexAction()
	{
		echo $this->view->render('main_view.php');
	}

	function error404Action()
	{
		echo $this->view->render('Main/error404.php');
	}

	function staticPageAction($slug)
	{
		$model_pages = $this->loadModel('Pages');
		$result = $model_pages->getPage($slug);
		if (!$result) {
			$this->stopAndRedirect($this->router->generate('error404'));
		}
		echo $this->view->render('Main/static_page.php', array('page' => $result));
	}

}
