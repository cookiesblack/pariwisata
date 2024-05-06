@extends('dashboard.layout.template')

@section('content')
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            <!-- Row #1 -->
            @include('dashboard.buttonMenu')
            <!-- END Row #1 -->
        </div>
        <!-- END Bars -->
        <!-- Calendar and Events functionality is initialized in js/pages/be_comp_calendar.min.js which was auto compiled from _es6/pages/be_comp_calendar.js -->
        <!-- For more info and examples you can check out https://fullcalendar.io/ -->
        <div class="block">
            <div id="calendar"></div>
        </div>
        <!-- END Calendar -->


        <!-- END Table Sections -->
    </div>
    
@endsection
