<?php

namespace App\Http\Controllers;

use App\Booking;
use Auth;   
use Illuminate\Http\Request;
use App\Http\Requests\BookingFormRequest;

class BookingController extends Controller
{
    public function __construct(Booking $booking)
	{
		$this->middleware('guest');

        $this->booking = $booking;
	}

    public function create()
	{
		return view('booking.create');
    }
    
    public function store(BookingFormRequest $request)
    {
        $input = $request->all();

        Booking::create($input);

        return redirect()->back()->with('message', 'Thanks for registering. Your stylist will be in touch soon to get you booked in. We look forward to seeing you!');
    }
}
