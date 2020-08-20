<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('category') ? 'has-error' : ''}}">
    <div class="col-md-12">
        {!! Form::Label('item', 'Select Category:') !!}
        
        {!! Form::select('category', $items, isset($project)?$project->category:null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::file('image', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('short_details') ? 'has-error' : ''}}">
    {!! Form::label('short_details', 'Short Detail', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('short_details', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('short_details', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('details') ? 'has-error' : ''}}">
    {!! Form::label('details', ' Details', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('details', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('video') ? 'has-error' : ''}}">
    {!! Form::label('video', 'video', ['class' => 'col-md-12 control-label']) !!}
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
