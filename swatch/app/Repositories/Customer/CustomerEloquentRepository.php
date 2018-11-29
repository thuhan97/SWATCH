<?php
namespace App\Repositories\Customer;
use App\Repositories\EloquentRepository;
use App\Customer;
/**
 * 
 */
class CustomerEloquentRepository extends EloquentRepository implements CustomerRepositoryInterface
{
	protected $model;
	public function __construct(Customer $model)
	{
		$this->model= $model;
	}
	
}
?>