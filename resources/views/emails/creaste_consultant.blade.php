<!DOCTYPE html>
<html lang="en" style="margin: 0; padding: 0;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant Meeting Created</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }
        .email-header {
            background-color: #004a99;
            padding: 15px;
            color: #ffffff;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .email-content {
            padding: 20px;
            color: #333333;
            line-height: 1.6;
        }
        .email-footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666666;
        }
        .details-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        .details-table td {
            padding: 10px;
            border: 1px solid #dddddd;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            color: #ffffff;
            background-color: #004a99;
            border-radius: 5px;
            text-decoration: none;
        }
        .button:hover {
            background-color: #003670;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="https://infoscert.com/socialimpact/public/assets/images/logo/logo.jpeg" alt="{{ $contactUs->company_name }}" style="max-width: 150px; margin-bottom: 10px;">
            <h4>Consultant Meeting Created</h4>
        </div>
        <div class="email-content">
            <p>Dear {{ $eventDetails['name'] }},</p>
            <p>Thank you for scheduling a consultation with us! Your meeting for the <strong>{{ $eventDetails['solution'] }}</strong> has been successfully created.</p>
            
            <h3>Meeting Details</h3>
            <table class="details-table">
                <tr>
                    <td><strong>Date & Time:</strong></td>
                    <td>{{ \Carbon\Carbon::parse($eventDetails['startDateTime'])->format('F j, Y') }} for {{ $eventDetails['timeslot'] }} Minutes</td>
                </tr>
                <tr>
                    <td><strong>Consultant Name:</strong></td>
                    <td>{{ $eventDetails['name']  }}</td>
                </tr>
                {{-- <tr>
                    <td><b> Calendar</b></td>
                    <td><li><a href="{{ $eventDetails['calendarLink'] }}">Click here to add this event to your Google Calendar</a></li></td>
                </tr> --}}
            </table>
            {{-- <p>Please make sure to mark your calendar, and don’t hesitate to reach out if you have any questions before the meeting.</p> --}}
            <p>We’ve marked this on your calendar, but please make sure to double-check and confirm the timing in your schedule.</p>
            
        </div>
        <div class="email-footer">
            <p>Thank you for choosing our services.</p>
            {{ $contactUs->company_name }} - Copyright {{ date('Y') }} . All rights reserved.
        </div>
    </div>
</body>
</html>
