<?php  
namespace App\Repositories\Product;
interface ProductRepositoryInterface{
	public function getNewProduct();
	public function getSpecialProduct();
	public function getByGender($gender);
	public function getById($id);
	public function getType($id);
	public function getSearch($key);
	
	
}
?>
