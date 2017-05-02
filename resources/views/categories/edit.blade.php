@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::model($category,['url' => route('categories.update',$category->id), 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
            <fieldset>
                <legend>Edit Client Category</legend>
                @include('categories.form')
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
