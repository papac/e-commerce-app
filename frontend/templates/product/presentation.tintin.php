#extends('layouts.app', ['active' => 'product'])

#block('title', 'Produit details')

#block('content')
<div class="container mt-4 p-5">
	<div class="row">
		<div class="col-md-4 item-photo">
			<img style="max-width:100%;" src="{{ $product->image }}" />
		</div>
		<div class="col-md-8" style="border:0px solid gray">
			<form action="/cart/add" method="post">
				{{{ csrf_field() }}}
				<h1>{{ $product->name }}</h1>
				<h3><a href="/?category={{ $product->category->id }}">{{ $product->category->name }}</a></h3>
				<br>
				<h2 class="title-price"><small>PRIX</small></h2>
				<h3 style="margin-top: 0px;" class="text-muted">{{ $product->price }} Fcfa</h3>
				<input type="hidden" name="id" value="{{ $product->id }}">
				<div class="mt-4">
		            <input type="text" value="1" name="quantity" required/>
		        </div>
				<div class="mt-4">
					<button class="btn btn-success">Ajouter au chariot</button>
				</div>
			</form>
		</div>                              

		<div class="col-md-12 mt-5">
			<div style="width: 100%; border-top:1px solid silver">
				<p style="padding:15px;">
					{{{ $product->description }}}
				</p>
			</div>
		</div>		
	</div>
</div>
#endblock

#block('script')
<script type="text/javascript">
    $(".btn-minus").on("click",function(){
    	var now = $(".section > div > input").val();
    	if ($.isNumeric(now)){
    		if (parseInt(now) -1 > 0) { 
    			now--;
    		}
    		$(".section > div > input").val(now);
    	} else {
    		$(".section > div > input").val("1");
    	}
    });

    $(".btn-plus").on("click",function(){
    	var now = $(".section > div > input").val();
    	if ($.isNumeric(now)){
    		$(".section > div > input").val(parseInt(now)+1);
    	} else {
    		$(".section > div > input").val("1");
    	}
    });
</script>
#endblock