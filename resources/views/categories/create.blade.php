@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => route('categories.store'), 'class' => 'form-horizontal']) !!}
                <fieldset>
                    <legend>Create Client Category</legend>
                    @include('categories.form')
                </fieldset>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
