<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name_kh', trans('labels.backend.scholarship_winner.fields.name_kh'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name_kh', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('name_latin', trans('labels.backend.scholarship_winner.fields.name_latin'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name_latin', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('photo', trans('labels.backend.scholarship_winner.fields.photo'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('degree', trans('labels.backend.scholarship_winner.fields.degree'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('degree', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('duration', trans('labels.backend.scholarship_winner.fields.duration'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::number('duration', null, ['class' => 'form-control','placeholder'=> '10 months']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('is_staff', trans('labels.backend.scholarship_winner.fields.is_staff'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::checkbox('is_staff', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('obtain_year', trans('labels.backend.scholarship_winner.fields.obtain_year'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('obtain_year', null, ['class' => 'form-control year']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('university', trans('labels.backend.scholarship_winner.fields.university'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::select('university', $universities, ['class' => 'form-control year']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('scholarship_id', trans('labels.backend.scholarship_winner.fields.scholarship_id'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::select('scholarship_id', $scholarships, ['class' => 'form-control year']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', trans('labels.backend.scholarship_winner.fields.description'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
        </div>
    </div>
</div>

