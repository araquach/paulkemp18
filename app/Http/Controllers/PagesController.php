<?php namespace App\Http\Controllers;
use App\Feedback;
use App\Review;
use App\FeedbackClient;
use App\Blog;
use App\BlogPara;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Pages Controller
	|--------------------------------------------------------------------------
	|
	| This page renders the main pages of the site
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$reviews = Review::where('salon', '2')->orderByRaw("RAND()")->get();
		
		$blogs = Blog::take(4)->where('publish', 2)->orWhere('publish', 3)
			->with('paras')->orderBy('created_at', 'desc')->get();
	
		return view('pages.home', compact('reviews', 'blogs'));
	}
	
	public function details()
	{
		return view('pages.details');
	}
	
	public function news()
	{
		return view('pages.news');
	}
	
	public function oldnews()
	{
		return view('pages.oldnews');
	}
	
	public function offers()
	{
		return view('pages.offers');
	}
	
	public function men()
	{
		return view('pages.men');
	}
	
	public function prices()
	{
		return view('pages.prices_stylist');
	}
	
	public function apprenticePrices()
	{
		return view('pages.prices_apprentice');
	}
	
	public function recruitment()
	{
		return view('pages.recruitment');
	}
	
	public function salon()
	{
		return view('pages.salon');
	}
	
	public function booking()
	{
		return view('pages.booking');
	}
	
	public function kebelo()
	{
		return view('pages.kebelo');
	}	
	
	public function team()
	{
		return view('pages.team');
	}
	
	public function newstaff()
	{
		return view('pages.new_staff');
	}
	
	public function leaver()
	{
		return view('pages.leaver');
	}
	
	public function reviews($stylist = 'all')
	{
		if($stylist == 'all')
		{
			$reviews = Review::where('salon', '2')
			->orderByRaw("RAND()")->limit(9)->get();
		}
		else
		{
			$reviews = Review::where('salon', '2')
			->where('staff', 'LIKE', '%'.$stylist.'%')
			->orderByRaw("RAND()")->limit(9)->get();
		}
		
		return view('pages.reviews', compact('reviews'));
	}
	
	
	public function kel()
	{
		$reviews = Review::where('staff', '=', 'Staff: Kellie Reedy')->orderByRaw("RAND()")->get();
		
		return view('pages.team.kel', compact('reviews'));
	}
	
	public function izzy()
	{
		$reviews = Review::where('staff', '=', 'Staff: Izzy Lamb')->orderByRaw("RAND()")->get();
		
		return view('pages.team.izzy', compact('reviews'));
	}
	
	public function jo()
	{
		$reviews = Review::where('staff', '=', 'Staff: Jo Birchall')->orderByRaw("RAND()")->get();
		
		return view('pages.team.jo', compact('reviews'));
	}
	
	public function leon()
	{
		$reviews = Review::where('staff', '=', 'Staff: Leon  Pritchard')->orderByRaw("RAND()")->get();
		
		return view('pages.team.leon', compact('reviews'));
	}
	
	public function michelle()
	{
		$reviews = Review::where('staff', '=', 'Staff: Michelle  Railton')->orderByRaw("RAND()")->get();
		
		return view('pages.team.michelle', compact('reviews'));
	}
	
	public function kate()
	{
		$reviews = Review::where('staff', '=', 'Staff: Kate  O\'Halleran')->orderByRaw("RAND()")->get();
		
		return view('pages.team.kate', compact('reviews'));
	}
	
	public function matt()
	{
		$reviews = Review::where('staff', '=', 'Staff: Matthew Lane')->orderByRaw("RAND()")->get();
		
		return view('pages.team.matt', compact('reviews'));
	}
	
	public function louise()
	{
		$reviews = Review::where('staff', '=', 'Staff: Louise Bailey')->orderByRaw("RAND()")->get();
		
		return view('pages.team.louise', compact('reviews'));
	}
	
	public function abi()
	{
		$reviews = Review::where('staff', '=', 'Staff: Abi Clarke')->orderByRaw("RAND()")->get();
		
		return view('pages.team.abi', compact('reviews'));
	}

}
