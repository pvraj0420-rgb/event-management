<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use App\Models\EventModels;
use App\Http\Controllers\InvoiceController;
use App\Models\Speaker;
use App\Models\Booking;

class front extends Controller
{
    public function register()
    {
        return view('front.register');
    }
    public function login()
    {
        return view('front.login');
    }
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function event()
    {
        $events = EventModels::all();
        return view('front.event', compact('events'));
    }
    public function eventDetails($id)
    {
        $event = EventModels::find($id);

        if (!$event) {
            abort(404);
        }


        $speaker = Speaker::where('name', $event->speaker_name)->first();


        return view('front.event-details', compact('event', 'speaker'));
    }
    public function news()
    {
        return view('front.news');
    }

    public function newsDetails()
    {
        return view('front.news-details');
    }

    public function gallery()
    {
        return view('front.gallery');
    }

    public function pricing()
    {
        return view('front.pricing');
    }

    public function team()
    {
        $speakers = Speaker::all();
        return view('front.team', compact('speakers'));
    }

    public function teamDetails($id)
    {
        $speaker = Speaker::findOrFail($id);
        return view('front.team-details', compact('speaker'));
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function index2()
    {
        return view('front.index-2');
    }
    public function newsGrid()
    {
        return view('front.news-grid');
    }
    public function error404()
    {
        return view('front.404');
    }
    public function adddata(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:6|same:password_confirmation',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration Successful');
    }


    public function logincheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            Session::put('user', $user);
            return redirect()->route('index');
        } else {
            return back()->with('error', 'Invalid Login');
        }
    }

    public function editprofile()
    {
        $record = Session::get('user');

        if (!$record) {
            return redirect()->route('login');
        }

        return view('front.updateprofile', compact('record'));
    }

    public function updatedata(Request $request)
    {
        $record = Session::get('user');

        if (!$record) {
            return redirect()->route('login');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($record->id),
            ],
            'phone' => 'required',
            'password' => 'nullable|min:6',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        User::where('id', $record->id)->update($data);

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }
    public function bookingPage(Request $request, $id)
    {
        if (!Session::has('user')) {
            return redirect()->route('login')->with('error', 'Please login first');
        }

        $user = Session::get('user');
        $event = EventModels::findOrFail($id);

        $qty = $request->qty ?? 1;
        $total = $request->total ?? 29;

        return view('front.booking', compact('event', 'qty', 'total', 'user'));
    }
 public function bookEvent(Request $request)
{
    if (!Session::has('user')) {
        return redirect()->route('login')->with('error', 'Please login first');
    }

    $request->validate([
        'event_id' => 'required',
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required',
        'tickets' => 'required',
        'payment_method' => 'required'
    ]);

    // ✅ FIXED: CARD REDIRECT (STRICT CHECK)
    if (isset($request->payment_method) && trim($request->payment_method) === 'card') {
        Session::put('booking_data', $request->all());
        return redirect()->route('card.payment.page');
    }

    // ✅ CASH / OFFLINE LOGIC
    $user = Session::get('user');

    if (trim($request->payment_method) === 'offline') {
        $payment_status = 'pending';
    } else {
        // cash = paid
        $payment_status = 'paid';
    }

$booking = Booking::create([
        'event_id' => $request->event_id,
        'user_id' => $user->id,
        'username' => $user->name,
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'tickets' => $request->tickets,
        'total_amount' => $request->tickets * 29,
        'payment_method' => trim($request->payment_method),
        'payment_status' => $payment_status
    ]);
$invoiceController = new \App\Http\Controllers\InvoiceController();

$invoiceController->createInvoice(
    $booking->id,
    $request->event_id,
    $request->tickets * 29
);
   return redirect()->route('my.orders')->with('success', 'Booking Successful');
}

public function cardPage()
{
    return view('front.card-payment');
}

public function cardProcess(Request $request)
{
    $data = Session::get('booking_data');
    $user = Session::get('user');

    $booking = Booking::create([
        'event_id' => $data['event_id'],
        'user_id' => $user->id,
        'username' => $user->name,
        'name' => $data['name'],
        'email' => $data['email'],
        'mobile' => $data['mobile'],
        'tickets' => $data['tickets'],
        'total_amount' => $data['tickets'] * 29,
        'payment_method' => 'card',
        'payment_status' => 'paid'
    ]);

    $invoiceController = new \App\Http\Controllers\InvoiceController();

    $invoiceController->createInvoice(
        $booking->id,
        $data['event_id'],
        $data['tickets'] * 29
    );

    Session::forget('booking_data');

    return redirect()->route('my.orders')
        ->with('success', 'Payment Successful & Booking Done');
}

public function myOrders()
{
    if (!Session::has('user')) {
        return redirect()->route('login');
    }

    $user = Session::get('user');

    $bookings = Booking::with('event')
        ->where('user_id', $user->id)
        ->get();

    return view('front.my-orders', compact('bookings'));
}

public function downloadTicket($id)
{
    $booking = Booking::with('event')->findOrFail($id);

    // only paid allowed
    if($booking->payment_status != 'paid'){
        return back()->with('error','Payment Pending!');
    }

    $pdf = Pdf::loadView('front.ticket', compact('booking'));

    return $pdf->download('ticket-'.$booking->id.'.pdf');
}
public function userForgotPassword()
{
    return view('front.user-forgot-password');
}
public function checkUserForgotPassword(Request $request)
{
    $user = User::where('email', $request->email)->first();

    if ($user) {
        Session::put('reset_user_email', $request->email);
        return redirect()->route('user.reset.password');
    }

    return back()->with('error', 'Email not found');
}
public function userResetPasswordPage()
{
    if (!Session::has('reset_user_email')) {
        return redirect()->route('user.forgot.password');
    }

    return view('front.user-reset-password');
}
public function updateUserPassword(Request $request)
{
    $request->validate([
        'password' => 'required|min:6'
    ]);

    $email = Session::get('reset_user_email');

    $user = User::where('email', $email)->first();

    if ($user) {
        $user->password = Hash::make($request->password);
        $user->save();

        Session::forget('reset_user_email');

        return redirect()->route('login')->with('success', 'Password updated successfully');
    }

    return back()->with('error', 'Something went wrong');
}
    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login');
    }
}
