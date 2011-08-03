<?php

class Blog_BlogModel extends PerformanceCheckSampleBlogBaseModel
{
	public function getPosts()
	{
		return $this->getPdo()->query('SELECT * FROM posts;')->fetchAll();
	}
	
	public function getPost($id)
	{
		$pdo =  $this->getPdo();
		$statement = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
		$statement->execute(array($id));
		return $statement->fetch();
	}
}

?>