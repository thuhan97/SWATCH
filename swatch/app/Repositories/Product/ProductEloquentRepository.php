<?php
namespace App\Repositories\Product;
use App\Repositories\EloquentRepository;
use App\Product;
/**
 * 
 */
class ProductEloquentRepository extends EloquentRepository implements ProductRepositoryInterface
{
	protected $model;
	public function __construct(Product $model)
	{
		$this->model= $model;
	}
	public function getNewProduct(){
		$result= $this->model->orderby('id','desc')->limit(6)->get();
		return $result;
	}
	public function getSpecialProduct(){
		$result= $this->model->where('special','1')->limit(6)->get();
		return $result;
	}
	public function getByGender($gender){
		$result= $this->model->where('gender',$gender)->paginate(9);
		return $result;
	}

	public function getById($id){
		$result= $this->model->findOrFail($id);
		return $result;
	}
	public function getType($id){
		$brand =$this->model->find($id)->brand->id;
		$result= $this->model->where('brand_id',$brand)->limit(10)->get();
		return $result;
	}
	public function getSearch($key){
		$result=$this->model->where('name','like','%'.$key.'%')->orWhere('price',$key)->paginate(9);
		return $result;
	}
}
?>