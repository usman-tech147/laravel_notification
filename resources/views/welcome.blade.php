@extends('layouts.app')
@section('content')
    <p> welcome page </p>
@endsection
@section('script')
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('846580914e544c93c9d2', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('new-registration', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
@endsection

