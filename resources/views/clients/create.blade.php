@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => route('clients.store'), 'class' => 'form-horizontal']) !!}
                <fieldset>
                    <legend>Create Client</legend>
                    @include('clients.form')
                </fieldset>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
