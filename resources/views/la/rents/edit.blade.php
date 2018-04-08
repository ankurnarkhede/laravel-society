@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/rents') }}">Rent</a> :
@endsection
@section("contentheader_description", $rent->$view_col)
@section("section", "Rents")
@section("section_url", url(config('laraadmin.adminRoute') . '/rents'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Rents Edit : ".$rent->$view_col)

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
				{!! Form::model($rent, ['route' => [config('laraadmin.adminRoute') . '.rents.update', $rent->id ], 'method'=>'PUT', 'id' => 'rent-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'flat_number')
					@la_input($module, 'block')
					@la_input($module, 'owner_name')
					@la_input($module, 'members')
					@la_input($module, 'phone')
					@la_input($module, 'email')
					@la_input($module, 'status')
					@la_input($module, 'remark')
					@la_input($module, 'rent')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/rents') }}">Cancel</a></button>
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
	$("#rent-edit-form").validate({
		
	});
});
</script>
@endpush
