<?php

namespace matacms\post\controllers;

use matacms\post\models\Post;
use matacms\post\models\PostSearch;
use matacms\controllers\module\Controller;

class PostController extends Controller {

	public function getModel() {
		return new Post();
	}

	public function getSearchModel() {
		return new PostSearch();
	}
}
