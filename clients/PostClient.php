<?php

namespace matacms\post\clients;

use matacms\post\models\Post;

class PostClient extends \matacms\clients\SimpleClient {

	protected function getModel() {
		return new Post;
	}

	public function findByURI($uri) {
		return $this->findByAttributes([
			"URI" => $uri
			]);
	}

}




// /**
//  * If set to false, exceptions will be thrown if a Content Block does not exist, and it's proprety is requested.
//  * Check renderText()
//  */
// private $safeMode = true;

// private $_regionToFind;

// public function getText($region) {

// 	// the only way we can pass parameters to the closure below
// 	$this->_regionToFind = $region;

// 	$cb = ContentBlock::getDb()->cache(function ($db) {
// 	    return ContentBlock::find()->where(["Region" => $this->getRegionToFind()])->one();
// 	}, null, new \matacms\cache\caching\MataLastUpdatedTimestampDependency());

// 	$this->_regionToFind = null;

// 	if ($cb == null && $this->safeMode == false)
// 		throw new HttpException(sprintf("Could not find content block for region %s", $region));

// 	return $cb != null ? $cb->Text : "";
// }

// public function renderText($region) {
// 	echo $this->getText($region);
// }

// // TO BASE
//

// // TO BASE
// // 

// 

// public function getRegionToFind() {
// 	$retVal = $this->_regionToFind;
// 	$this->_regionToFind = null;

// 	return $retVal;
// }


