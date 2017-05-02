
        <div class="form-group">
            {!! Form::label('first_name','First Name' , ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('first_name', null , ['class' => 'form-control' , 'placeholder' => 'First Name']) !!}

            </div>
        </div>

        <div class="form-group">
            {!! Form::label('last_name','Last Name' , ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('last_name', null , ['class' => 'form-control' , 'placeholder' => 'Last Name']) !!}

            </div>
        </div>



        <div class="form-group">
            {!! Form::label('email','Email' , ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::email('email', null , ['class' => 'form-control' , 'placeholder' => 'Email']) !!}

            </div>
        </div>



        <div class="form-group">
            {!! Form::label('mobile','Mobile' , ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::text('mobile', null , ['class' => 'form-control' , 'placeholder' => 'Mobile']) !!}

            </div>
        </div>


        <div class="form-group">
            {!! Form::label('category_id','Categories' , ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::select('category_id',$categories, null, ['class' => 'form-control','placeholder' => 'Select Category']) !!}

            </div>
        </div>




        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">

                {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}

            </div>
        </div>