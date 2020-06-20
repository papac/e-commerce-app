#extends('layouts.app', ['active' => '#'])

#block('title', 'Inscription')

#block('content')
<div class="container mt-5 mb-5">
	<h3 class="text-center">Inscription</h3>
	<div class="row">
		<div class="col-sm-5">
			<form action="/inscription" method="post">
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