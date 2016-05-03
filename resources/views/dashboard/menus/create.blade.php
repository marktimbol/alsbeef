<h2>Add Menu</h2>

<form method="POST" action="{{ route('dashboard.menus.store') }}">
	{!! csrf_field() !!}
	@include('errors.form')

	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Menu Name" />
	</div>

	<div class="form-group">
		<label for="description">Description:</label>
		<textarea name="description" 
			id="description" 
			placeholder="Menu Description" rows="10">
			{{ old('description') }}
		</textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-lg">
			Save
		</button>
	</div>
</form>