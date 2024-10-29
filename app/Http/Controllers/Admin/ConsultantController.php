<?php

namespace App\Http\Controllers\Admin;
use Mail;
use App\Mail\ConsultantMeeting;
use Validator;
use Carbon;
use App\Http\Controllers\Controller;
use App\Models\Consultant;
use Google\Client;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    
    public function index(){
        return view('admin.consultant.index');
    }
 
    public function create(){
        return view('admin.consultant.create');
    }

    public function createEvent(Request $request) {  
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'solution_id' => 'required|integer',
            'calendar_date' => 'required|date',
            'time_slot' => 'required|integer|in:15,30,60', 
        ]);
    
        // Redirect back with errors if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Extract data from the request
        $name = $request->input('name'); 
        $email = $request->input('email');
        $phone = $request->input('phone');
        $solutionId = $request->input('solution_id');
        $timeSlot = (int) $request->input('time_slot');
        
        // Parse the start time and calculate end time
        $startTime = Carbon\Carbon::parse($request->calendar_date);
        $endTime = $startTime->copy()->addMinutes($timeSlot);

        Event::create([
            'name' => $name . ' - Consultant Meeting Scheduled for ' . $timeSlot .'Minutes' ,
            'startDateTime' => $startTime, 
            'endDateTime' => $endTime     
        ]);
        $consultant = new Consultant();
        $consultant->name = $name;
        $consultant->email = $email;
        $consultant->phone = $phone;
        $consultant->solution_id = $solutionId;
        $consultant->calendar_date = $startTime;
        $consultant->time_slot = $timeSlot;
        $consultant->save();

        // Create Google Calendar invite link
        $calendarLink = sprintf(
            'https://www.google.com/calendar/render?action=TEMPLATE&text=%s&dates=%s/%s&details=%s&location=%s',
            urlencode('Consultant Meeting - ' . $name),
            $startTime->format('Ymd\THis\Z'),
            $endTime->format('Ymd\THis\Z'),
            urlencode('Meeting with ' . $name),
            urlencode('Consultation Location') // Add location if available
        );

        $eventDetails = [
            'name' => $name,
            'email' => $email,
            'solution' => $consultant->solutionInfo->title,  
            'timeslot' => $timeSlot,
            'startDateTime' => $startTime,
            'calendarLink' => $calendarLink
        ];
        // Send the notification email
        Mail::to($email)->send(new ConsultantMeeting($eventDetails));

        return redirect()->back()->with('success', 'Consultant meeting created successfully'); 
    }
    
    public function destroy($id)
    {
        $consultant = Consultant::find(decrypt($id));

        if (!$consultant) {
            return redirect()->back()->with('error', 'Consultant data not found.');
        }

        $consultant->delete();

        return redirect()->back()->with('success', 'Consultant data deleted successfully.');
    }
    



}
