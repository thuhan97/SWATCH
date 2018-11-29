<?php
namespace App\Repositories\Brand;
use App\Repositories\EloquentRepository;
use App\Brand;
/**
 * 
 */
class BrandEloquentRepository extends EloquentRepository implements BrandRepositoryInterface
{
	protected $model;
	public function __construct(Brand $model)
	{
		$this->model= $model;
	}
	 
	public function getBySlug($slug){
		$result= $this->model->where('slug', $slug)->first();
		return $result;
	}
	
}
?>