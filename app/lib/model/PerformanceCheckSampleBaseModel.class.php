<?php

/**
 * The base model from which all project models inherit.
 */
class PerformanceCheckSampleBaseModel extends AgaviModel
{
	/**
	 * @return PDO
	 */
	public function getPdo()
	{
		return $this->getContext()->getDatabaseConnection();
	}
}

?>