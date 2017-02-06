<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">

            <div class="form-group" style="margin: 0 10px 10px 10px;">
                {!! Form::label('title', trans('labels.backend.news.fields.title')) !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group" style="margin: 0 10px 10px 10px;">
                {!! Form::label('image', trans('labels.backend.news.fields.image')) !!}
                <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                    <input id="image" class="form-control" type="text" name="image">
                </div>
            </div>

            <img id="holder" style="margin-top:15px;max-height:100px;">

            <div class="form-group" style="margin: 0 10px 0 10px;">
                {!! Form::label('context', trans('labels.backend.news.fields.context')) !!}
                {!! Form::textarea('context', null, ['class' => 'form-control tinymce']) !!}
            </div>

        </div>
    </div>
</div>

