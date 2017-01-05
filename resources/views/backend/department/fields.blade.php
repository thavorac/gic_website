<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
        <li><a href="#tab_2-2" data-toggle="tab">{{trans('labels.backend.department.fields.about_dept')}}</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name_kh', trans('labels.backend.department.fields.name_kh'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    {!! Form::text('name_kh', null, ['class' => 'form-control','placeholder' => "ជាភាសាខ្មែរ"]) !!}
                </div>
                <div class="col-lg-3">
                    {!! Form::text('name_en', null, ['class' => 'form-control','placeholder' => "in english"]) !!}
                </div>
                <div class="col-lg-3">
                    {!! Form::text('name_fr', null, ['class' => 'form-control','placeholder' => "en français"]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('code', trans('labels.backend.department.fields.code'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('code', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('phone', trans('labels.backend.department.fields.phone_email'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('facebook', trans('labels.backend.department.fields.social_media'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook-square"></i></span>
                        {!! Form::text('facebook', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-google-plus-square"></i></span>
                        {!! Form::text('gplus', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-twitter-square"></i></span>
                        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

            </div>
            <div class="form-group">
                {!! Form::label('', "", ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-youtube-square"></i></span>
                        {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('logo', trans('labels.backend.department.fields.logo'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('logo', ['class' => 'form-control']) !!}
                </div>
            </div>
            @if(isset($department->logo))
            <div class="form-group">
                {!! Form::label('', "", ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    <a target="_blank" href="{{'/img/files/'.$department->logo}}">{{$department->logo}}</a>
                </div>
            </div>
            @endif

            <div class="form-group">
                {!! Form::label('address', trans('labels.backend.department.fields.address'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('address', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('headline', trans('labels.backend.department.fields.headline'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('headline', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('mission', trans('labels.backend.department.fields.mission'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('mission', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('vision', trans('labels.backend.department.fields.vision'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('vision', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('contact_us', trans('labels.backend.department.fields.contact_us'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('contact_us', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
        </div>

        <div class="tab-pane" id="tab_2-2">
            {!! Form::textarea('about_dept', null, ['class' => 'form-control tinymce']) !!}
        </div>
    </div>
</div>

