<a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-{{ $id }}">
    <i class="fa fa-trash"></i>
    Delete
</a>

<div class="modal"id="delete-{{ $id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{ $title }}</h4>
            </div>
            <div class="modal-body btn-danger">
                <p>{{ $body }}</p>
            </div>
            {!! Form::open(['method' => 'DELETE', 'url' => $route]) !!}

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>