@extends('layouts.app')
@section('title', 'Calendar')
@section('content')
@if (session('success'))
<div style="color: green">
    {{ session("success") }}
</div>
@endif
<div id="calendar"></div>
<!-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script> -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var calendarEl = document.getElementById("calendar");
        var calendar = new FullCalendar.Calendar(calendarEl, {
            // toolbar
            headerToolbar: {
                start: "title",
                center: "",
                end: "multiMonthYear,dayGridMonth,dayGridWeek,timeGridDay listWeek",
            },
            footerToolbar: {
                start: "prevYear,prev",
                center: "today",
                end: "next,nextYear",
            },

            // set business days
            businessHours: {
                daysOfWeek: [1, 2, 3, 4, 5],

                startTime: "8:00",
                endTime: "17:00",
            },

            // view
            initialView: "dayGridMonth",
            fixedWeekCount: false,
            weekNumbers: true,
            eventSources: [
                    {
                        url: "/health-monitor/public/events",
                        method: 'GET',
                        failure: function() {
                            alert('there was an error while fetching events!');
                        },
                        color: 'blue'
                    },
                    {
                        url: "/health-monitor/public/tasks",
                        method: 'GET',
                        failure: function() {
                            alert('there was an error while fetching tasks!');
                        },
                        color: 'green'
                    }
                ],
            aspectRatio: 1.5,
            contentHeight: 700,
            displayEventTime: false,

            // event stack
            dayMaxEventRows: true,
            dayMaxEvents: 3,
            moreLinkClick: "popover",

            // funcions
            selectable: true,
            dateClick: function (info) {
                info.dayEl.style.backgroundColor = "var(--dark)";
            },

            dayCellClassNames: function (arg) {
                if (arg.date.getUTCDay() === 5 || arg.date.getUTCDay() === 6) {
                    return ["weekend"];
                }
            },
        });

        calendar.render();
    });
</script>
@endsection
