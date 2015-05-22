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
		$attributes = ['and', "URI = '$uri'"];
		if(\Yii::$app->user->isGuest) {
			$attributes = array_merge($attributes, ['PublicationDate <= NOW()']);
		}
		return $model::find()->where($attributes)->one();
	}

	public function findAll() {
		$model = $this->getModel();
		$this->closureParams = [$model];

		$model = $model::getDb()->cache(function ($db) {
			$closureParams = $this->getClosureParams();

			$query = $closureParams[0]->find();

			if(\Yii::$app->user->isGuest) {
				$query->andWhere('PublicationDate <= NOW()');
			}

			return $query->all();
		}, null, new \matacms\cache\caching\MataLastUpdatedTimestampDependency());

		return $model;
	}

	/**
	 * Get the query to find all posts with PublicationDate > NOW(). 
	 * Useful for passing to ActiveDataProvider
	 */
	public function getFindAllQuery() {
		$query = $this->getModel()->find();

		if(\Yii::$app->user->isGuest) {
			$query->andWhere('PublicationDate <= NOW()');
		}
		
		return $query;
	}

	public function getModel() {
		return new Post();
	}

}
