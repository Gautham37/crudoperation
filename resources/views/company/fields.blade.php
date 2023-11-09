<div class="row">
    <div class="col-md-12">

        <div class="form-floating mb-4 required">
            {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
            {!! Form::label('name', 'Name', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>
        
        <div class="form-floating mb-4 required">
            {!! Form::email('email', null, ['class' => 'form-control','required']) !!}
            {!! Form::label('email', 'Email', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>

        <div class="form-floating mb-4 required">
            {!! Form::text('website', null, ['class' => 'form-control','required']) !!}
            {!! Form::label('website', 'Website', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>

        <div class="form-floating mb-4 required">
            {!! Form::file('logo', ['class' => 'form-control','required']) !!}
            {!! Form::label('logo', 'Logo', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>
        
    </div>
    <div class="col-md-12">
        <hr>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>