<?php
namespace Cognifire\TemplateBuilder\FlowQuery;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package                          *
 * "Cognifire.BuilderFoundation".                                         *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */


use Cognifire\Filefish\FlowQuery\AbstractEditorContext;
use Symfony\Component\Finder\Tests\Iterator\Iterator;
use Traversable;
use TYPO3\Flow\Annotations as Flow;

/**
 *
 */
class HtmlEditorContext extends AbstractEditorContext {

	/**
	 * The mediaType that this context can handle.
	 *
	 * @var  string
	 * @api
	 */
	static protected $mediaType = 'text/html';

	//FileOperations & Finder
	//$packageFiles

	//QueryPath
	//$packageFile

	/**
	 * Evaluates the operation in this context.
	 */
	public function evaluateOperation($operationName, $arguments, $operationMethod, $operationClassName) {

	}

	/**
	 * Retrieve an external iterator
	 *
	 * @return Traversable An instance of an object implementing Iterator or Traversable
	 */
	public function getIterator() {
		return new Iterator();
	}
}