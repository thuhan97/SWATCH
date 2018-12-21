<?php
namespace App\Repositories\OrderDetail;
use App\Repositories\EloquentRepository;
use App\OrderDetail;
/**
 * 
 */
class OrderDetailEloquentRepository extends EloquentRepository implements OrderDetailRepositoryInterface
{
	protected $model;
	public function __construct(OrderDetail $model)
	{
		$this->model= $model;
	}
	
}
?>