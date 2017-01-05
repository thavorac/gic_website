<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">{{trans('labels.backend.student_message.fields.message')}}</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            {!! Form::textarea('message', null, ['class' => 'form-control tinymce']) !!}
        </div>
    </div>
</div>

