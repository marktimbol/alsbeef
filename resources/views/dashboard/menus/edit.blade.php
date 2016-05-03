<h2>Edit Menu</h2>

<form method="POST" action="{{ route('dashboard.menus.update', $menu->id) }}">
	{!! csrf_field() !!}
	{!! method_field('PUT') !!}
	@include('errors.form')

	<div class="form-group">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" value="{{ $menu->name }}" placeholder="Menu Name" />
	</div>

	<div class="form-group">
		<label for="description">Description:</label>
		<textarea name="description" 
			id="description" 
			placeholder="Menu Description" rows="10">
			{{ $menu->description }}
		</textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-lg">
			Update
		</button>
	</div>
</form>