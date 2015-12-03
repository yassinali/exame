<?php

namespace App\Libraries\Repositories;


use App\Models\Participante;
use Illuminate\Support\Facades\Schema;

class ParticipanteRepository
{

	/**
	 * Returns all Participantes
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Participante::all();
	}

	public function search($input)
    {
        $query = Participante::query();

        $columns = Schema::getColumnListing('participantes');
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
	 * Stores Participante into database
	 *
	 * @param array $input
	 *
	 * @return Participante
	 */
	public function store($input)
	{
		return Participante::create($input);
	}

	/**
	 * Find Participante by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Participante
	 */
	public function findParticipanteById($id)
	{
		return Participante::find($id);
	}

	/**
	 * Updates Participante into database
	 *
	 * @param Participante $participante
	 * @param array $input
	 *
	 * @return Participante
	 */
	public function update($participante, $input)
	{
		$participante->fill($input);
		$participante->save();

		return $participante;
	}
}