{{ Form::model('$teacher', ['route' => ['teachers.update', $teachers->teacherId]]) }}
{{ Form::hidden('_method', 'put') }}
{{ Form::submit('Update', ['class' => 'btn btn-success']) }}
{{ Form::close() }}
