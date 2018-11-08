<?php
namespace App\Repositories;
interface ModelRepositoryInterface{
	public function index();
	public function getById($id);
	public function create(array $attributes);
	public function searchByName(Request $request);
	public function update($id,array $attributes);
	public function delete($id);
}
?>