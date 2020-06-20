#extends('layouts.app', ['active' => '#'])

#block('title', '404 - Not Found')

#block('content')
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-sm-12 text-center">
		    <h1>404</h1>
		    <p>
		        Not found page <br>
		        <a href="/">Back</a>
		    </p>
		</div>
	</div>
</div>
#endblock
