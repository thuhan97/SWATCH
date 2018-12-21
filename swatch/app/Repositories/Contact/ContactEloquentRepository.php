<?php
namespace App\Repositories\Contact;
use App\Repositories\EloquentRepository;
use App\Contact;
/**
 * 
 */
class ContactEloquentRepository extends EloquentRepository implements ContactRepositoryInterface
{
	protected $model;
	public function __construct(Contact $model)
	{
		$this->model= $model;
	}
	
}
?>