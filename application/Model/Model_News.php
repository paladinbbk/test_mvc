<?php

class Model_News extends Model
{

	public function getNews()
	{
		$conn = $this->ConnectDB();
		$query = $conn->query("SELECT * FROM news");
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getArticleById($id)
	{
		$conn = $this->ConnectDB();
		$query = $conn->query("SELECT * FROM news WHERE id='$id'");
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function getArticleBySlug($slug)
	{
		$conn = $this->ConnectDB();
		$query = $conn->query("SELECT * FROM news WHERE slug='$slug' LIMIT 1");
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function saveNews()
	{
		$conn = $this->ConnectDB();
		
		$slug = $this->checkUserData($_POST['slug']);
		$title = $this->checkUserData($_POST['title']);
		$content = $this->checkUserData($_POST['content']);

		if (isset($_POST['news_id'])) {
			$id = $this->checkUserData($_POST['news_id']);
			$conn->query("UPDATE news SET slug='$slug',
										 title='$title',
									   content='$content'
						  WHERE id='$id'");
		} else {
			$conn->query("INSERT INTO news SET slug='$slug',
										      title='$title',
										    content='$content'");
		}
	}
}