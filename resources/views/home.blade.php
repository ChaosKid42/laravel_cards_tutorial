@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Übersicht</div>

                <div class="panel-body">
                    Sie sind eingeloggt!

                    <form>
                        <span class="error" v-show="!message">
                            You must enter a message
                        </span>
                    </form>

                    <textarea v-model="message"></textarea>
                    <p>

                    <button type="submit" v-show="message">
                        Send Message
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