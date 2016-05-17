@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Übersicht</div>

                <div class="panel-body">
                    Sie sind eingeloggt!
                    <p>

                        <span class="error" v-show="!message">
                            You must enter a message
                        </span>
                        <p>

                        <textarea v-model="message"></textarea>
                        <p>

                        <button v-show="message" @@click="message=message.trim()">
                            Trim Message
                        </button>
                    
                    <pre>
                        @{{ $data | json }}
                    </pre>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection