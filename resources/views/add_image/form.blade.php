<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
        {!! Form::label('image', 'Add Image *', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('image', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
        </div>
    
    
        <div class="form-group">
                <div class="col-md-offset-4 col-md-4">
                    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>