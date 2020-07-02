@extends('backend.layouts.master')
@section('content')
<div class="card">
	<div class="card-header">
		<h2 class="alert bg-dark text-white text-center">Edit Subject</h2>
	</div>
	<div class="card-body row">
		<div class="m-auto border border-secoundary p-5 col-10">
			<form action="{{route('admin.subject.update', $sub->subject_id)}}" method="post">
				@csrf
				<div class="form-group">
					<label for="subject_name">Subject Name</label>
					<input type="text" class="form-control" id="subject_name" name="subject_name" value="{{$sub->subject_name}}" placeholder="Enter Subject's Full Name">
				</div>
				
					<button type="submit" class="btn btn-success">Update</button>
			</form>
		</div>
		
	</div>
</div>











@endsection('content')