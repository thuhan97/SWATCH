<?php
namespace App\Repositories\Order;
use App\Repositories\EloquentRepository;
use App\Order;
/**
 * 
 */
class OrderEloquentRepository extends EloquentRepository implements OrderRepositoryInterface
{
	protected $model;
	public function __construct(Order $model)
	{
		$this->model= $model;
	}
	public function getById($id){
		$result= $this->model->findOrFail($id);
		return $result;
	}
	
}
?>