<?php

class Blog_PostsSuccessView extends PerformanceCheckSampleBlogBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Posts');
	}
}

?>