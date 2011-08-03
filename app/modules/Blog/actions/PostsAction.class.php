<?php

class Blog_PostsAction extends PerformanceCheckSampleBlogBaseAction
{
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$blog = $this->getContext()->getModel('Blog', 'Blog');
		
		$post = $blog->getPost($rd->getParameter('id'));
		
		if (empty($post)) return array(AgaviConfig::get('actions.error_404_module'), 'Error404Success');
		
		$this->setAttribute('post', $post);
		return 'Success';
	}
	
	/**
	 * Returns the default view if the action does not serve the request
	 * method used.
	 *
	 * @return     mixed <ul>
	 *                     <li>A string containing the view name associated
	 *                     with this action; or</li>
	 *                     <li>An array with two indices: the parent module
	 *                     of the view to be executed and the view to be
	 *                     executed.</li>
	 *                   </ul>
	 */
	public function getDefaultViewName()
	{
		return 'Success';
	}
	
	public function handleError(AgaviRequestDataHolder $rd)
	{
		return array(AgaviConfig::get('actions.error_404_module'), 'Error404Success');
	}
}

?>