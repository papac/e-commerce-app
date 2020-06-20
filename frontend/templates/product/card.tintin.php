#extends('layouts.app', ['active' => 'cart'])

#block('title', 'Cart items')

#block('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
     </div>
</section>
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        #loop($products as $product)
                        <tr>
                            <td><img src="{{ $product['model']->image }}" style="width: 50px" /> </td>
                            <td>{{ $product['model']->name }}</td>
                            <td>{{ $product['model']->inStock() ? 'En stack' : 'Indisponible' }}</td>
                            <td><input class="form-control" type="text" value="{{ $product['quantity'] }}" /></td>
                            <td class="text-right">{{ $product['model']->price }} Fcfa</td>
                            <td class="text-right">
                                <form action="/cart/{{ $product['model']->id }}/delete" method="post">
                                    {{{ csrf_field() }}}
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                                </form>
                            </td>
                        </tr>
                        #endloop
                    </tbody>
                </table>
            </div>
            <h3>Total {{ $total_price }} Fcfa<h3>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Commander</button>
                </div>
            </div>
        </div>
    </div>
</div>
#endblock