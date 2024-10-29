@extends('layouts.admin')
<style>
    #calender a{
        color: #000000;
        text-decoration: none;
    }
    .mr-auto{
        margin-right: auto;
    }
</style>
@section('content')

    <div id='calendar'></div>
 
@endsection
<script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar')
    const calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    })
    calendar.render()
  })

</script>