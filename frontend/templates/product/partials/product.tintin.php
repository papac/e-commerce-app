<div class="col-12 col-md-4">
	<div class="card">
		<img class="card-img-top" src="{{ $product->image }}" alt="{{ $product->name }}">
		<div class="card-body">
			<h4 class="card-title">
				<a href="/products/{{ $product->id }}" title="View Product">{{ $product->name }}</a>
			</h4>
			<p class="card-text">{{ substr($product->description, 0, 50) }}...</p>
			<div class="row">
				<div class="col">
					<p class="btn btn-danger btn-block">{{ $product->price }} Fcfa</p>
				</div>
				<div class="col">
					<a href="#" class="btn btn-success btn-block">Ajouter au chariot</a>
				</div>
			</div>
		</div>
	</div>
</div>