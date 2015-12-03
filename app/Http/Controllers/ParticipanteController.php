<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateParticipanteRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\ParticipanteRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class ParticipanteController extends AppBaseController
{

	/** @var  ParticipanteRepository */
	private $participanteRepository;

	function __construct(ParticipanteRepository $participanteRepo)
	{
                 $this->middleware('auth');
		$this->participanteRepository = $participanteRepo;
	}

	/**
	 * Display a listing of the Participante.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->participanteRepository->search($input);

		$participantes = $result[0];

		$attributes = $result[1];

		return view('participantes.index')
		    ->with('participantes', $participantes)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Participante.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('participantes.create');
	}

	/**
	 * Store a newly created Participante in storage.
	 *
	 * @param CreateParticipanteRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateParticipanteRequest $request)
	{
        $input = $request->all();

		$participante = $this->participanteRepository->store($input);

		Flash::message('Registo gravado com sucesso.');

		return redirect(route('participantes.index'));
	}

	/**
	 * Display the specified Participante.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$participante = $this->participanteRepository->findParticipanteById($id);

		if(empty($participante))
		{
			Flash::error('Registo nao enncontrado.');
			return redirect(route('participantes.index'));
		}

		return view('participantes.show')->with('participante', $participante);
	}

	/**
	 * Show the form for editing the specified Participante.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$participante = $this->participanteRepository->findParticipanteById($id);

		if(empty($participante))
		{
			Flash::error('Registo nao enncontrado.');
			return redirect(route('participantes.index'));
		}

		return view('participantes.edit')->with('participante', $participante);
	}

	/**
	 * Update the specified Participante in storage.
	 *
	 * @param  int    $id
	 * @param CreateParticipanteRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateParticipanteRequest $request)
	{
		$participante = $this->participanteRepository->findParticipanteById($id);

		if(empty($participante))
		{
			Flash::error('Registo nao enncontrado.');
			return redirect(route('participantes.index'));
		}

		$participante = $this->participanteRepository->update($participante, $request->all());

		Flash::message('Registo actualizado com sucesso.');

		return redirect(route('participantes.index'));
	}

	/**
	 * Remove the specified Participante from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$participante = $this->participanteRepository->findParticipanteById($id);

		if(empty($participante))
		{
			Flash::error('Registo nao enncontrado.');
			return redirect(route('participantes.index'));
		}

		$participante->delete();

		Flash::message('Registo apagado com sucesso.');

		return redirect(route('participantes.index'));
	}

}
