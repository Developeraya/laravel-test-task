@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('categories.create') }}" class="btn btn-success">Create</a>
        </div>
        @if(count($categories))
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                       <td>{{ $category->title }}</td>
                       <td><a href="{{ route('categories.edit' , $category->id) }}" class="btn btn-primary  btn-xs">Edit</a></td>
                        <td>
                        @include('partials.delete', [
                                  'id' => $category->id,
                                  'route' => route('categories.destroy', $category->id),
                                  'title' => "Delete {$category->name}?",
                                  'body' => 'You cannot undo this action.'
                              ])
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="box-footer">
            {!! $categories->render() !!}
        </div>
        @else
            <div class="row">
                <h3>You Don't have any Categories</h3>
            </div>
        @endif
    </div>
@endsection
