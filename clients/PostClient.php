<?php 

namespace matacms\post\clients;

use matacms\post\models\Post;

class PostClient extends \matacms\clients\SimpleClient {

	public function findByURI($uri) {
		return $this->findByAttributes(["URI" => $uri]);
	}

	public function getModel() {
		return new Post();
	}
}