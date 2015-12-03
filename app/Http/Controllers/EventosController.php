<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEventosRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\EventosRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class EventosController extends AppBaseController
{

	/** @var  EventosRepository */
	private $eventosRepository;

	function __construct(EventosRepository $eventosRepo)
	{
                $this->middleware('auth');
		$this->eventosRepository = $eventosRepo;
	}

	/**
	 * Display a listing of the Eventos.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->eventosRepository->search($input);

		$eventos = $result[0];

		$attributes = $result[1];

		return view('eventos.index')
		    ->with('eventos', $eventos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Eventos.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('eventos.create');
	}

	/**
	 * Store a newly created Eventos in storage.
	 *
	 * @param CreateEventosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateEventosRequest $request)
	{
        $input = $request->all();

		$eventos = $this->eventosRepository->store($input);

		Flash::message('Registo gravado com sucesso');

		return redirect(route('eventos.index'));
	}

	/**
	 * Display the specified Eventos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$eventos = $this->eventosRepository->findEventosById($id);

		if(empty($eventos))
		{
			Flash::error('Sem registos');
			return redirect(route('eventos.index'));
		}

		return view('eventos.show')->with('eventos', $eventos);
	}

	/**
	 * Show the form for editing the specified Eventos.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$eventos = $this->eventosRepository->findEventosById($id);

		if(empty($eventos))
		{
			Flash::error('Sem registos');
			return redirect(route('eventos.index'));
		}

		return view('eventos.edit')->with('eventos', $eventos);
	}

	/**
	 * Update the specified Eventos in storage.
	 *
	 * @param  int    $id
	 * @param CreateEventosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateEventosRequest $request)
	{
		$eventos = $this->eventosRepository->findEventosById($id);

		if(empty($eventos))
		{
			Flash::error('Sem registos');
			return redirect(route('eventos.index'));
		}

		$eventos = $this->eventosRepository->update($eventos, $request->all());

		Flash::message('Registo actualizado com sucesso');

		return redirect(route('eventos.index'));
	}

	/**
	 * Remove the specified Eventos from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$eventos = $this->eventosRepository->findEventosById($id);

		if(empty($eventos))
		{
			Flash::error('Sem registos');
			return redirect(route('eventos.index'));
		}

		$eventos->delete();

		Flash::message('Registo apagado com sucesso');

		return redirect(route('eventos.index'));
	}

}
