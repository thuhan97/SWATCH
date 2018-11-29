<?php
namespace App\Repositories\Category;
use App\Repositories\EloquentRepository;
use App\Category;
/**
 * 
 */
class CategoryEloquentRepository extends EloquentRepository implements CategoryRepositoryInterface
{
	protected $model;
	public function __construct(Category $model)
	{
		$this->model= $model;
	}
	
}
?>