<?php
/**
 * @package SubVQMod
 * @version 0.1.0
 * @author Dan Nicholson
 * @license https://github.com/danic85/subvqmod/blob/master/LICENSE - MIT Licence (MIT)
 * @link   http://dannicholson.co.uk/projects
 */
class SimpleXMLExtended extends SimpleXMLElement {
	/**
	 * Add CData Text to XML Element
	 * @param string $text CDataText
	 */
	public function addCData($text) {
		$node = dom_import_simplexml($this);
		$od   = $node->ownerDocument;
		$node->appendChild($od->createCDATASection($text));
	}
}