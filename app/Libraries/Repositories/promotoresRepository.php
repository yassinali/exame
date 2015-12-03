<?php

namespace App\Libraries\Repositories;


use App\Models\promotores;
use Illuminate\Support\Facades\Schema;

class promotoresRepository
{

	/**
	 * Returns all promotores
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return promotores::all();
	}

	public function search($input)
    {
        $query = promotores::query();

        $columns = Schema::getColumnListing('promotores');
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
	 * Stores promotores into database
	 *
	 * @param array $input
	 *
	 * @return promotores
	 */
	public function store($input)
	{
		return promotores::create($input);
	}

	/**
	 * Find promotores by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|promotores
	 */
	public function findpromotoresById($id)
	{
		return promotores::find($id);
	}

	/**
	 * Updates promotores into database
	 *
	 * @param promotores $promotores
	 * @param array $input
	 *
	 * @return promotores
	 */
	public function update($promotores, $input)
	{
		$promotores->fill($input);
		$promotores->save();

		return $promotores;
	}
}