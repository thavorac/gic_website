<div class="col-sm-12" style="padding: 30px !important;">
    <div class="form-group">
        {!! Form::label('title', trans('labels.backend.slideshow.fields.title')) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image', trans('labels.backend.slideshow.fields.image')) !!}
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

    <div class="form-group">
        {!! Form::label('page_url', trans('labels.backend.slideshow.fields.page_url')) !!}
        {!! Form::text('page_url', null, ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                {!! Form::label('reference_text', trans('labels.backend.slideshow.fields.reference_text')) !!}
                {!! Form::text('reference_text', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-7" style="padding-left: 30px !important;">
            <div class="form-group">
                {!! Form::label('reference_link', trans('labels.backend.slideshow.fields.reference_link')) !!}
                {!! Form::text('reference_link', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('description', trans('labels.backend.slideshow.fields.description')) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
</div>

