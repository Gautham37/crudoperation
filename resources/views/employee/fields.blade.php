<div class="row">
    <div class="col-md-12">

        <div class="form-floating mb-4 required">
            {!! Form::text('first_name', null, ['class' => 'form-control','required']) !!}
            {!! Form::label('first_name', 'First Name', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>
        
        <div class="form-floating mb-4 required">
            {!! Form::text('last_name', null, ['class' => 'form-control','required']) !!}
            {!! Form::label('last_name', 'Last Name', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>

        <div class="form-floating mb-4 required">
            {!! Form::select('company_id', $companies, null, ['class' => 'form-control','required','id'=>'company_id']) !!}
            {!! Form::label('company_id', 'Company', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>

        <div class="form-floating mb-4 required">
            {!! Form::email('email', null, ['class' => 'form-control','required']) !!}
            {!! Form::label('email', 'Email', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>

        <div class="form-floating mb-4 required">
            {!! Form::text('phone', null, ['class' => 'form-control','required']) !!}
            {!! Form::label('phone', 'Phone', ['class' => 'col-2 control-label text-right']) !!}
            <span class="form-floating-focused"></span>
        </div>
        
    </div>
    <div class="col-md-12">
        <hr>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>