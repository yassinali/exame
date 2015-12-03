<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatepromotoresRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\promotoresRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class promotoresController extends AppBaseController
{

	/** @var  promotoresRepository */
	private $promotoresRepository;

	function __construct(promotoresRepository $promotoresRepo)
	{
                 $this->middleware('auth');
		$this->promotoresRepository = $promotoresRepo;
	}

	/**
	 * Display a listing of the promotores.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->promotoresRepository->search($input);

		$promotores = $result[0];

		$attributes = $result[1];

		return view('promotores.index')
		    ->with('promotores', $promotores)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new promotores.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('promotores.create');
	}

	/**
	 * Store a newly created promotores in storage.
	 *
	 * @param CreatepromotoresRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatepromotoresRequest $request)
	{
        $input = $request->all();

		$promotores = $this->promotoresRepository->store($input);

		Flash::message('Registo gravado com sucesso.');

		return redirect(route('promotores.index'));
	}

	/**
	 * Display the specified promotores.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$promotores = $this->promotoresRepository->findpromotoresById($id);

		if(empty($promotores))
		{
			Flash::error('Sem registos');
			return redirect(route('promotores.index'));
		}

		return view('promotores.show')->with('promotores', $promotores);
	}

	/**
	 * Show the form for editing the specified promotores.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$promotores = $this->promotoresRepository->findpromotoresById($id);

		if(empty($promotores))
		{
			Flash::error('Sem registos');
			return redirect(route('promotores.index'));
		}

		return view('promotores.edit')->with('promotores', $promotores);
	}

	/**
	 * Update the specified promotores in storage.
	 *
	 * @param  int    $id
	 * @param CreatepromotoresRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreatepromotoresRequest $request)
	{
		$promotores = $this->promotoresRepository->findpromotoresById($id);

		if(empty($promotores))
		{
			Flash::error('Sem registos');
			return redirect(route('promotores.index'));
		}

		$promotores = $this->promotoresRepository->update($promotores, $request->all());

		Flash::message('Registo actualizado com sucesso.');

		return redirect(route('promotores.index'));
	}

	/**
	 * Remove the specified promotores from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$promotores = $this->promotoresRepository->findpromotoresById($id);

		if(empty($promotores))
		{
			Flash::error('Sem registos');
			return redirect(route('promotores.index'));
		}

		$promotores->delete();

		Flash::message('Registo apagado com sucesso');

		return redirect(route('promotores.index'));
	}

}
