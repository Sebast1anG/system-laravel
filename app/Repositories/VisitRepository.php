<?php

namespace App\Repositories;

use App\Models\Visits;

class VisitRepository extends BaseRepository{

	public function __construct(Visit $model){

		$this->model = $model;
	}
}