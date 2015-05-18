<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace matacms\post\clients;

use matacms\post\models\Post;

class PostClient extends \matacms\clients\SimpleClient {

	public function findByURI($uri) {
		$model = $this->getModel();
		return $model::find()->where(['and', "PublicationDate <= NOW()", "URI = '$uri'"])->one();
	}

	public function findAll() {
		$model = $this->getModel();
		$this->closureParams = [$model];

		$model = $model::getDb()->cache(function ($db) {
			$closureParams = $this->getClosureParams();
			return $closureParams[0]->find()->where([
				'and', "PublicationDate <= NOW()"
				])->all();
		}, null, new \matacms\cache\caching\MataLastUpdatedTimestampDependency());

		return $model;
	}

	/**
	 * Get the query to find all posts with PublicationDate > NOW(). 
	 * Useful for passing to ActiveDataProvider
	 */
	public function getFindAllQuery() {
		return $this->getModel()->find()->where([
			'and', "PublicationDate <= NOW()"
			]);
	}

	public function getModel() {
		return new Post();
	}

}
