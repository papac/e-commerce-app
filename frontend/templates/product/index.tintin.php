#extends('layouts.app', ['active' => 'product'])

#block('title', 'Welcome to E-Commerce App')

#block('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CATEGORY</h1>
        <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
    </div>
</section>
#include('product.partials.breadcrumb')
<div class="container mb-5">
    <div class="row">
    	#include('product.partials.category')
        <div class="col">
            <div class="row">
                #loop(range(1, 10) as $product)
                	#include('product.partials.product')
                #endloop
            </div>
        </div>
    </div>
</div>
#endblock