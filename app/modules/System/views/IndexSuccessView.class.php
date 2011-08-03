<?php

class System_IndexSuccessView extends PerformanceCheckSampleSystemBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		
		$this->setAttribute('_title', 'Index');
	}
}

?>