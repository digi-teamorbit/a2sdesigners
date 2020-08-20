<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('video') ? 'has-error' : ''}}">
    {!! Form::label('video', 'Video', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::url('video', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('video', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
