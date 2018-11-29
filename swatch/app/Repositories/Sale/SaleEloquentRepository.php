<?php
namespace App\Repositories\Sale;
use App\Repositories\EloquentRepository;
use App\Sale;
use Date;
/**
 * 
 */
class SaleEloquentRepository extends EloquentRepository implements SaleRepositoryInterface
{
	protected $model;
	public function __construct(Sale $model)
	{
		$this->model= $model;
	}
	public function getSale(){
		$date = Date('Y-m-d');
		
		$result= $this->model->where('end_at','>',$date)->where('start_at','<',$date)->get();
		return $result;
	}

}
?>