<?php

namespace App\Repositories;

use App\Models\User

class UserRepository extends BaseRepository{

	public function_construct(User $model){
		$this->model = $model;
	}

	public function getAllDoctors(User $model){
		return $this->model->where('type','doctor')=>orderBy('name','asc')=>get();
	}
}
