<?php

namespace App\Libraries\Repositories;


use App\Models\Eventos;
use Illuminate\Support\Facades\Schema;

class EventosRepository
{

	/**
	 * Returns all Eventos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Eventos::all();
	}

	public function search($input)
    {
        $query = Eventos::query();

        $columns = Schema::getColumnListing('eventos');
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
	 * Stores Eventos into database
	 *
	 * @param array $input
	 *
	 * @return Eventos
	 */
	public function store($input)
	{
		return Eventos::create($input);
	}

	/**
	 * Find Eventos by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Eventos
	 */
	public function findEventosById($id)
	{
		return Eventos::find($id);
	}

	/**
	 * Updates Eventos into database
	 *
	 * @param Eventos $eventos
	 * @param array $input
	 *
	 * @return Eventos
	 */
	public function update($eventos, $input)
	{
		$eventos->fill($input);
		$eventos->save();

		return $eventos;
	}
}