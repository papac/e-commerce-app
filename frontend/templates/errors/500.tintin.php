#extends('layouts.app', ['active' => '#'])

#block('title', '500 - Internal Server Error')

#block('content')
<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-sm-12 text-center">
		    <h1>500</h1>
		    <p>
		        {{ $exception->getMessage() }} <br>
		        <a href="/">Back</a>
		    </p>
		</div>
	</div>
</div>
#endblock
