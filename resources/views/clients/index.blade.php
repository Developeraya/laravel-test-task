@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('clients.create') }}" class="btn btn-success">Create</a>
        </div>
        @if(count($clients))
        <div class="row">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                       <td>{{ $client->first_name }} {{ $client->last_name }}</td>
                       <td>{{ $client->email }}</td>
                       <td>{{ $client->mobile }}</td>
                       <td>{{ ($client->category)?$client->category->title : 'N/A' }}</td>
                       <td><a href="{{ route('clients.edit' , $client->id) }}" class="btn btn-primary  btn-xs">Edit</a></td>
                        <td>
                        @include('partials.delete', [
                                  'id' => $client->id,
                                  'route' => route('clients.destroy', $client->id),
                                  'title' => "Delete {$client->first_name} {$client->last_name}?",
                                  'body' => 'You cannot undo this action.'
                              ])
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="box-footer">
            {!! $clients->render() !!}
        </div>
        @else
            <div class="row">
                <h3>You Don't have any Clients</h3>
            </div>
        @endif
    </div>
@endsection
