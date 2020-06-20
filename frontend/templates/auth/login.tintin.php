#extends('layouts.app', ['active' => '#'])

#block('title', 'Connexion')

#block('content')
<div class="container mt-5 mb-5">
	<h3>Connexion</h3>
	<div class="row text-center">
		<div class="col-sm-4">
			<form action="/inscription" method="post">
				<div class="form-group">
					<input class="form-control" name="email" placeholder="E-mail.." />
				</div>
				<div class="form-group">
					<input class="form-control" name="password" placeholder="Mot de passe." />
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Connexion</button>
				</div>
			</form>
		</div>
	</div>
</div>
#endblock