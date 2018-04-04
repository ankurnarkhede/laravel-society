@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/flats') }}">Flat</a> :
@endsection
@section("contentheader_description", $flat->$view_col)
@section("section", "Flats")
@section("section_url", url(config('laraadmin.adminRoute') . '/flats'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Flats Edit : ".$flat->$view_col)

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
				{!! Form::model($flat, ['route' => [config('laraadmin.adminRoute') . '.flats.update', $flat->id ], 'method'=>'PUT', 'id' => 'flat-edit-form']) !!}
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
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/flats') }}">Cancel</a></button>
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
	$("#flat-edit-form").validate({
		
	});
});
</script>
@endpush
