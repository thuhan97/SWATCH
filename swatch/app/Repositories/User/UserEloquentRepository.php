<?php
namespace App\Repositories\User;
use App\Repositories\EloquentRepository;
use App\User;
/**
 * 
 */
class UserEloquentRepository extends EloquentRepository implements UserRepositoryInterface
{
	protected $model;
	public function __construct(User $model)
	{
		$this->model= $model;
	}
	
}
?>