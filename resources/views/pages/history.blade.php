@extends('layouts.app')
@section('content')
    <div class="container-fluid app-body">
        <h3>History</h3>

        <div id="app-init">
            <history-component></history-component>
        </div>

    </div>


    <script src="{{ asset('js/v-app.js') }}"></script>
@endsection
