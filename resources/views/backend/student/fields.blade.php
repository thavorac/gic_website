<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
        <li><a href="#about" data-toggle="tab">{{trans('labels.backend.student.fields.about')}}</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name_kh', trans('labels.backend.student.fields.name'), ['class' => 'col-lg-3 control-label required']) !!}
                <div class="col-lg-4">
                    {!! Form::text('name_kh', null, ['class' => 'form-control', 'required'=>'required','placeholder' => trans('labels.backend.student.fields.name_kh')]) !!}
                </div>
                <div class="col-lg-5">
                    {!! Form::text('name_latin', null, ['class' => 'form-control', 'required'=>'required', 'placeholder' => trans('labels.backend.student.fields.name_latin')]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('promotion', trans('labels.backend.student.fields.promotion'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    {!! Form::number('promotion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('id_card', trans('labels.backend.student.fields.id_card'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('id_card', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('photo', trans('labels.backend.student.fields.photo'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="photo" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="photo" class="form-control" type="text" name="photo">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>

            </div>

            <div class="form-group">
                {!! Form::label('dob', trans('labels.backend.student.fields.dob'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('dob', null, ['class' => 'form-control date']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('personal_phone', trans('labels.backend.student.fields.personal_phone'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    {{--{!! Form::text('personal_phone', null, ['class' => 'form-control']) !!}--}}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" name="personal_phone" class="form-control" placeholder="{{trans('labels.backend.student.fields.personal_phone')}}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('parent_phone', trans('labels.backend.student.fields.parent_phone'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    {{--{!! Form::text('parent_phone', null, ['class' => 'form-control']) !!}--}}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" name="parent_phone" class="form-control" placeholder="{{trans('labels.backend.student.fields.parent_phone')}}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', trans('labels.backend.student.fields.email'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-6">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="{{trans('labels.backend.student.fields.email')}}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('department_id', trans('labels.backend.student.fields.department_id'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::select('department_id', $departments, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('address', trans('labels.backend.student.fields.address'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('address', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', trans('labels.backend.student.fields.description'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
        </div>

        <div class="tab-pane" id="about">
            {!! Form::textarea('about', null, ['class' => 'form-control tinymce']) !!}
        </div>
    </div>
</div>

