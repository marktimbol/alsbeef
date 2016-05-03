<h2>Menu</h2>	
<p>{{ $menu->name }}</p>

<form method="POST" action="{{ route('dashboard.menus.destroy', $menu->id) }}">
	{!! csrf_field() !!}
	{!! method_field('DELETE') !!}
	<div class="form-group">
		<button type="submit" class="btn btn-danger btn-lg">
			Delete
		</button>
	</div>
</form>