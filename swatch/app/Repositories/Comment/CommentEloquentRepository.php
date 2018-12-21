<?php
namespace App\Repositories\Comment;
use App\Repositories\EloquentRepository;
use App\Comment;
/**
 * 
 */
class CommentEloquentRepository extends EloquentRepository implements CommentRepositoryInterface
{
	protected $model;
	public function __construct(Comment $model)
	{
		$this->model= $model;
	}

	public function getById($id){
		$result= $this->model->findOrFail($id);
		return $result;
	}
	
}
?>