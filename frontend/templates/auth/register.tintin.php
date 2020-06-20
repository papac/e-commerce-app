#extends('layouts.app', ['active' => 'register'])

#block('title', 'Inscription')

#block('content')
<div class="container mt-5 mb-5">
	<h3>Inscription</h3>
	<div class="row text-center">
		<div class="col-sm-4">
			<form action="/register" method="post">
				<div class="form-group">
					<input class="form-control" name="name" placeholder="Name..." />
				</div>
				<div class="form-group">
					<input class="form-control" name="email" placeholder="E-mail..." />
				</div>
				<div class="form-group">
					<input class="form-control" name="phone" placeholder="Phone..." />
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Inscription</button>
				</div>
			</form>
		</div>
	</div>
</div>
#endblock