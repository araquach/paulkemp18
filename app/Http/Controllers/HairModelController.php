<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HairModel;
use App\Http\Requests\HairModelFormRequest;
use Carbon\Carbon;
use Auth;
use Mail;

/**
 *
 */
class HairModelController extends Controller
{
  public function __construct(HairModel $hairmodel)
	{
		$this->middleware('guest');

		$this->hairmodel = $hairmodel;
	}

  /**
	 * Display a listing of all the model applicants.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hairmodels = $this->hairmodel->orderBy('id', 'desc')->get();

		return view('hairmodel.index', compact('hairmodels'));
	}

  /**
	 * Show the form for creating a new model application.
	 */
	public function create()
	{
		return view('hairmodel.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * @return Response
	 */
	public function store(HairModelFormRequest $request)
	{
		$input = $request->all();

		HairModel::create($input);

		return redirect()->back()->with('message', 'Thanks for sending your details. We\'ll be in touch when a suitable session comes up');
	}
}
