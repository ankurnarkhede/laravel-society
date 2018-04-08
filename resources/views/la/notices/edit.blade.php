@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/notices') }}">Notice</a> :
@endsection
@section("contentheader_description", $notice->$view_col)
@section("section", "Notices")
@section("section_url", url(config('laraadmin.adminRoute') . '/notices'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Notices Edit : ".$notice->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($notice, ['route' => [config('laraadmin.adminRoute') . '.notices.update', $notice->id ], 'method'=>'PUT', 'id' => 'notice-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'block')
					@la_input($module, 'notice')
					@la_input($module, 'status')
					@la_input($module, 'remark')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/notices') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#notice-edit-form").validate({
		
	});
});
</script>
@endpush
