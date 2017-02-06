 <div class="col-lg-12" style="padding: 15px">
    <div class="form-group">
        {!! Form::label('name', trans('labels.backend.timetable.fields.name'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('trimester', trans('labels.backend.timetable.fields.trimester'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::select('trimester', ['Week 1-8'=>'Week 1-8','Week 9-16'=>'week 9-16','Week 17-24'=>'Week 17-24', 'Week 25-32'=>'Week 25-32'], ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('academic_year_id', trans('labels.backend.timetable.fields.academic_year_id'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::select('academic_year_id', $academic_years, ['class' => 'form-control']) !!}
        </div>
    </div>

     <div class="form-group">
         {!! Form::label('file', trans('labels.backend.timetable.fields.file'), ['class' => 'col-lg-3 control-label']) !!}
         <div class="col-lg-9">
             <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="file" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-file-pdf-o"></i> Choose
                    </a>
                </span>
                 <input id="file" class="form-control" type="text" name="file">
             </div>
             <img id="holder" style="margin-top:15px;max-height:100px;" onError="this.onerror=null;this.src='{{url("img/sample_file.png")}}';">
         </div>
     </div>

    <div class="form-group">
        {!! Form::label('description', trans('labels.backend.timetable.fields.description'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
        </div>
    </div>
</div>


