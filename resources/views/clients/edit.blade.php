@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::model($client,['url' => route('clients.update',$client->id), 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
            <fieldset>
                <legend>Edit Client</legend>
                @include('clients.form')
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
