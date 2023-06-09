@extends('layouts.users.app')

@section('content')
<div class="container">
    <x-parts.user_basic_card_layout>
        <x-slot name="cardHeader">
            <h4 class="my-2">予約枠作成</h4>
        </x-slot>
        <x-slot name="cardBody">
            {{-- <form method="POST" action="{{ route('bookings.store') }}"  enctype="multipart/form-data">
                @csrf

                <div class="col-md-8 mb-3 mx-auto">
                    <label class="" for="title">タイトル</label>
                    @include('components.form.text', ['name' => 'title', 'required' => true])
                    @include('components.form.error', ['name' => 'title'])
                </div>

                <div class="text-center my-4">
                    <button type="submit" class="btn btn-outline-dark">
                        登録する
                    </button>
                </div>
            </form> --}}




            <div id='wrap'></div>
            <div id='calendar'></div>
        </x-slot>
    </x-parts.user_basic_card_layout>
    </div>
@endsection
@section('script')
        <script src='{{ asset('fullcalendar-6.1.8/dist/index.global.min.js') }}'></script>
        <script>
        
        document.addEventListener('DOMContentLoaded', function() {

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });

    //// the individual way to do it
    // var containerEl = document.getElementById('external-events-list');
    // var eventEls = Array.prototype.slice.call(
    //   containerEl.querySelectorAll('.fc-event')
    // );
    // eventEls.forEach(function(eventEl) {
    //   new FullCalendar.Draggable(eventEl, {
    //     eventData: {
    //       title: eventEl.innerText.trim(),
    //     }
    //   });
    // });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      }
    });
    calendar.render();

  });

</script>
<style>

  body {
    margin-top: 40px;
    font-size: 14px;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  }

  #external-events {
    position: fixed;
    left: 20px;
    top: 20px;
    width: 150px;
    padding: 0 10px;
    border: 1px solid #ccc;
    background: #eee;
    text-align: left;
  }

  #external-events h4 {
    font-size: 16px;
    margin-top: 0;
    padding-top: 1em;
  }

  #external-events .fc-event {
    margin: 3px 0;
    cursor: move;
  }

  #external-events p {
    margin: 1.5em 0;
    font-size: 11px;
    color: #666;
  }

  #external-events p input {
    margin: 0;
    vertical-align: middle;
  }

  #calendar-wrap {
    margin-left: 200px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style>
<body>
  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 1</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 2</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 3</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 4</div>
        </div>
        <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
          <div class='fc-event-main'>My Event 5</div>
        </div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

    <div id='calendar-wrap'>
      {{-- <div id='calendar'></div> --}}
    </div>

  </div>
</body>



