<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('title', trans('labels.backend.blog.fields.title'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('image', trans('labels.backend.blog.fields.image'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('status', trans('labels.backend.blog.fields.status'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::select('status', ['pending'=>'Pending','publish'=>'publish'], ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('content', trans('labels.backend.blog.fields.content'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('content', null, ['class' => 'form-control tinymce']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

