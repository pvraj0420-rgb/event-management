<?php

namespace App\Http\Controllers;

use App\Models\AdminModels;
use App\Models\Speaker;
use App\Models\Category;
use App\Models\EventModels;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class admin extends Controller
{
    public function login()
    {
        return view('admin.page-login');
    }

    public function register()
    {
        return view('admin.page-register');
    }

    public function adddata(Request $request)
    {
        AdminModels::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.login');
    }

    public function checklogin(Request $request)
    {
        $admin = AdminModels::where('username', $request->username)
            ->orWhere('email', $request->username)
            ->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin', $admin);
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'Invalid Username/Email or Password');
        }
    }

    public function dashboard()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login')->with('error', 'Please login first');
        }

        $totalEvents = EventModels::count();
        $totalBookings = Booking::count();
        $totalRevenue = Booking::where('payment_status', 'paid')->sum('total_amount');
        $totalRevenueInr = Booking::where('payment_status', 'paid')->sum('amount_inr');
        $totalUsers = User::count();
        $recentBookings = Booking::with('event')->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalEvents',
            'totalBookings',
            'totalRevenue',
            'totalRevenueInr',
            'totalUsers',
            'recentBookings'
        ));
    }

    public function category()
    {
        return view('admin.category');
    }

    public function categorylist()
    {
        $categories = Category::all();
        return view('admin.categorylist', compact('categories'));
    }

    public function addcategory(Request $request)
    {
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.categorylist')
            ->with('success', 'Category Added Successfully');
    }

    public function editcategory($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('admin.categorylist')
                ->with('error', 'Category Not Found');
        }

        return view('admin.editcategory', compact('category'));
    }

    public function updatecategory(Request $request, $id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->update([
                'name' => $request->name
            ]);

            return redirect()->route('admin.categorylist')
                ->with('success', 'Category Updated Successfully');
        }

        return redirect()->route('admin.categorylist')
            ->with('error', 'Category Not Found');
    }

    public function deletecategory($id)
    {
        $category = Category::find($id);

        if ($category) {
            $category->delete();

            return redirect()->route('admin.categorylist')
                ->with('success', 'Category Deleted Successfully');
        }

        return redirect()->route('admin.categorylist')
            ->with('error', 'Category Not Found');
    }

    public function pageEvent()
    {
        $categories = Category::all();
        return view('admin.page-event', compact('categories'));
    }

    public function addevent(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
            'venue' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
            'speaker_name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('event_images'), $imageName);

        EventModels::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price ?? 29.00,
            'capacity' => $request->capacity ?? 100,
            'category' => $request->category,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'location' => $request->location,
            'venue' => $request->venue,
            'address' => $request->address,
            'contact' => $request->contact,
            'email' => $request->email,
            'speaker_name' => $request->speaker_name,
            'image' => $imageName
        ]);

        return redirect()->back()->with('success', 'Event Added Successfully');
    }

    public function eventlist()
    {
        $events = EventModels::all();
        return view('admin.eventlist', compact('events'));
    }

    public function deleteevent($id)
    {
        $event = EventModels::find($id);

        if ($event) {
            $event->delete();

            return redirect()->route('admin.eventlist')
                ->with('success', 'Event Deleted Successfully');
        }

        return redirect()->route('admin.eventlist')
            ->with('error', 'Event Not Found');
    }

    public function editevent($id)
    {
        $event = EventModels::find($id);

        if (!$event) {
            return redirect()->route('admin.eventlist')
                ->with('error', 'Event Not Found');
        }

        $categories = Category::all();
        return view('admin.editevent', compact('event', 'categories'));
    }

    public function updateevent(Request $request, $id)
    {
        $event = EventModels::find($id);

        if (!$event) {
            return redirect()->route('admin.eventlist')
                ->with('error', 'Event Not Found');
        }

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('event_images'), $imageName);
            $event->image = $imageName;
        }

        $event->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price ?? $event->price ?? 29.00,
            'capacity' => $request->capacity ?? $event->capacity ?? 100,
            'category' => $request->category,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'location' => $request->location,
            'venue' => $request->venue,
            'address' => $request->address,
            'contact' => $request->contact,
            'email' => $request->email,
            'speaker_name' => $request->speaker_name
        ]);

        return redirect()->route('admin.eventlist')
            ->with('success', 'Event Updated Successfully');
    }
    public function speaker()
    {
        return view('admin.speaker');
    }

    public function addspeaker(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'nullable',
            'description' => 'nullable',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'fax' => 'nullable',
            'experience' => 'nullable',

            'skill1_name' => 'nullable',
            'skill1_percent' => 'nullable|numeric',
            'skill2_name' => 'nullable',
            'skill2_percent' => 'nullable|numeric',
            'skill3_name' => 'nullable',
            'skill3_percent' => 'nullable|numeric',

            'image' => 'nullable|image|mimes:jpg,jpeg,png'
        ]);


        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('speaker_images'), $imageName);
        }

        Speaker::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'email' => $request->email,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'experience' => $request->experience,

            'skill1_name' => $request->skill1_name,
            'skill1_percent' => $request->skill1_percent,
            'skill2_name' => $request->skill2_name,
            'skill2_percent' => $request->skill2_percent,
            'skill3_name' => $request->skill3_name,
            'skill3_percent' => $request->skill3_percent,

            'image' => $imageName
        ]);
        return redirect()->back()->with('success', 'Speaker Added Successfully');
    }
    public function updatespeaker(Request $request, $id)
    {
        $speaker = Speaker::find($id);
        if (!$speaker) {
            return redirect()->route('admin.speakerlist')
                ->with('error', 'Speaker Not Found');
        }

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('speaker_images'), $imageName);
            $speaker->image = $imageName;
        }

        $speaker->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'description' => $request->description,
            'email' => $request->email,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'experience' => $request->experience,
            'skill1_name' => $request->skill1_name,
            'skill1_percent' => $request->skill1_percent,
            'skill2_name' => $request->skill2_name,
            'skill2_percent' => $request->skill2_percent,
            'skill3_name' => $request->skill3_name,
            'skill3_percent' => $request->skill3_percent,
        ]);

        return redirect()->route('admin.speakerlist')->with('success', 'Speaker Updated Successfully');
    }
    public function speakerlist()
    {
        $speakers = Speaker::all();
        return view('admin.speaker-list', compact('speakers'));
    }
    public function editspeaker($id)
    {
        $speaker = Speaker::find($id);

        if (!$speaker) {
            return redirect()->route('admin.speakerlist')
                ->with('error', 'Speaker Not Found');
        }

        return view('admin.edit-speaker', compact('speaker'));
    }
    public function deletespeaker($id)
    {
        $speaker = Speaker::find($id);

        if ($speaker) {
            $speaker->delete();

            return redirect()->route('admin.speakerlist')
                ->with('success', 'Speaker Deleted Successfully');
        }

        return redirect()->route('admin.speakerlist')
            ->with('error', 'Speaker Not Found');
    }
    public function bookingList()
    {
        $bookings = Booking::with('event')->get();
        return view('admin.booking-list', compact('bookings'));
    }

    public function exportBookings()
    {
        $bookings = Booking::with('event')->latest()->get();
        $filename = 'attendees_export_' . date('Y_m_d_His') . '.csv';

        $headers = [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
            'Pragma'              => 'no-cache',
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
            'Expires'             => '0'
        ];

        $callback = function () use ($bookings) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['Booking ID', 'Event Name', 'Attendee Name', 'Email', 'Mobile', 'Tickets', 'Total Amount', 'Currency', 'Payment Method', 'Payment Status', 'Booking Date']);

            foreach ($bookings as $b) {
                fputcsv($handle, [
                    $b->id,
                    $b->event->title ?? 'N/A',
                    $b->name,
                    $b->email,
                    $b->mobile,
                    $b->tickets,
                    $b->amount_inr ?? $b->total_amount,
                    $b->currency ?? 'INR',
                    $b->payment_method,
                    $b->payment_status,
                    $b->created_at ? $b->created_at->format('Y-m-d H:i:s') : ''
                ]);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }
   public function deleteBooking($id)
{
    $booking = Booking::find($id);

    if ($booking) {
        $booking->delete();
        return back()->with('success', 'Booking Deleted Successfully');
    }

    return back()->with('error', 'Booking Not Found');
}
    public function approvePayment($id)
    {
        $booking = Booking::find($id);

        if ($booking) {
            $booking->payment_status = 'paid';
            $booking->save();
        }

        return back()->with('success', 'Payment Approved Successfully');
    }
    public function logout()
    {
        Session::forget('admin');
        return redirect()->route('admin.login');
    }
    public function checkEmail(Request $request)
{
    $admin = AdminModels::where('email', $request->email)->first();

    if (!$admin) {
        return back()->with('error', 'Email not exists');
    }

    return redirect('/admin/reset-password')->with('email', $request->email);
}
public function forgotPassword()
{
    return view('admin.forgot-password');
}

public function resetPasswordPage()
{
    if (!session('email')) {
        return redirect()->route('admin.forgot.password')->with('error', 'Session expired. Please enter your email again.');
    }
    return view('admin.reset-password');
}
public function checkForgotPassword(Request $request)
{
    $admin = AdminModels::where('email', $request->email)->first();

    if (!$admin) {
        return back()->with('error', 'Email not found');
    }

    session(['email' => $request->email]);

    return redirect()->route('admin.reset.password');
}
public function updatePassword(Request $request)
{
    $request->validate([
        'password' => 'required|min:6|confirmed'
    ]);

    $sessionEmail = session('email');
    if (!$sessionEmail || $sessionEmail !== $request->email) {
        return redirect()->route('admin.login')->with('error', 'Invalid or expired password reset session.');
    }

    AdminModels::where('email', $sessionEmail)
        ->update([
            'password' => Hash::make($request->password)
        ]);

    session()->forget('email');

    return redirect()->route('admin.login')->with('success', 'Password updated successfully');
}
}
