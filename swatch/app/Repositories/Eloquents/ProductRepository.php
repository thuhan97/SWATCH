<?php
namespace App\Repositories;
use App\Product;
/**
 * 
 */
class ProductRepository implements ModelRepositoryInterface
{
	private $model;
	public function __construct(Product $model)
	{
		$this->model= $model;
	}
	 public function index(){
	 	return $this->model->all();	
	 }
	 public function getById($id){
		return $this->model->find($id);
	}

	public function create(array $attributes){
		return $this->model->create($attributes);
	}
	public function searchByName(Request $request){
		return $this->model->where('name', 'like', '%' . $request->value . '%')->get();
	}
	 public function update($id, array $attributes){
	 	return $this->model->find($id)->update($attributes);
	 }
	 public function delete($id){
	 	return $this->model->find($id)->delete();
	 }
}
?>