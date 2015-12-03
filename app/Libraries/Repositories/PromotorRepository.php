<?php

namespace App\Libraries\Repositories;


use App\Models\Promotor;
use Illuminate\Support\Facades\Schema;

class PromotorRepository
{

	/**
	 * Returns all Promotors
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Promotor::all();
	}

	public function search($input)
    {
        $query = Promotor::query();

        $columns = Schema::getColumnListing('promotors');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores Promotor into database
	 *
	 * @param array $input
	 *
	 * @return Promotor
	 */
	public function store($input)
	{
		return Promotor::create($input);
	}

	/**
	 * Find Promotor by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Promotor
	 */
	public function findPromotorById($id)
	{
		return Promotor::find($id);
	}

	/**
	 * Updates Promotor into database
	 *
	 * @param Promotor $promotor
	 * @param array $input
	 *
	 * @return Promotor
	 */
	public function update($promotor, $input)
	{
		$promotor->fill($input);
		$promotor->save();

		return $promotor;
	}
}