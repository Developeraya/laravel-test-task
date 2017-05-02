
        <div class="form-group">
            {!! Form::label('title','Title' , ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('title', null , ['class' => 'form-control' , 'placeholder' => 'Title']) !!}

            </div>
        </div>

        <div class="form-group">
            {!! Form::label('description','Description' , ['class' => 'col-lg-2 control-label']) !!}

            <div class="col-lg-10">
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>
        </div>


        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">

                {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}

            </div>
        </div>