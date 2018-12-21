<?php
namespace App\Repositories;
abstract class EloquentRepository implements RepositoryInterface{
	/**
     * @var \Illuminate\Database\Eloquent\Model
     */
	 protected $model;
	 /**
     * EloquentRepository Constructor
     */
	 // public function __construct(){
	 // 	$this->setModel();
	 // }
	 /** 
	 * get model
	 * @return String
	 */
	// abstract public function getModel();
	 /**
	 *set model
	 */
	 // public function setModel(){
	 // 	$this->model=app()->make(
	 // 		$this->getModel());
	 // }
	 /**
	 *get all
	 */
	  public function getAll(){
	  	return $this->model->orderBy('created_at','DESC')->get();
	  }
	  /**
	  *get one
	  *@param $id
	  *@return mixed
	  */
	  public function find($id){
	  	$result= $this->model->find($id);
	  	return $result;
	  }
	  /**
     * Create
     * @param array $attributes
     * @return mixed
     */
	  public function create (array $attributes){
	  	return $this->model->create($attributes);
	  }

	  /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */

	  public function update ($id, array $attributes){
	  	$result=$this->find($id);
	  	if($result){
	  		$result->update($attributes);
	  		return $result;
	 	}
	  return false;
	  }
	   /**
     * Delete
     * 
     * @param $id
     * @return bool
     */
	  public function delete($id){
	  	$result = $this->find($id);
        if($result) {
            $result->delete();
            return true;
        }

        return false;
	  }
}
?>