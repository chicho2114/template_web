@extends('layouts.principal')

@section('content')

<div class="content-bottom-right">
    	    	  <h3>Todas las categorias</h3>
    	    	  <div class="clear"></div>
    	    	  <div class="section group">
    	    	  	@foreach($products as $product)
					  <div class="grid_1_of_4 images_1_of_4">
						 <h4><a href={{URL::to('/preview')}}>{{$product->titulo}}</a></h4>
						  <a href={{URL::to('/preview')}}><img src='images/{{$product->imagenes}}' height="100" /></a>
						  <div class="price-details">
					       <div class="price-number">
								<p><span class="rupees">Bs: {{$product->precio}}</span></p>
						    </div>
						       		<div class="add-cart">								
										<h4>{!!link_to_route('show', $title = 'Ver detalles', $parameters = $product->id, $attributes = ['class'=>'btn btn-info preview-add-button'])!!}</h4>
								     </div>
								 <div class="clear"></div>
						</div>					 
					</div>
				
			   		@endforeach
				  </div>
				
			  <!-- <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <h4><a href={{URL::to('/preview')}}>Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					  <a href={{URL::to('/preview')}}><img src="images/product-img1.jpg" alt="" /></a>
					  <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href={{URL::to('/preview')}}>More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href={{URL::to('/preview')}}>Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					 <a href={{URL::to('/preview')}}><img src="images/product-img2.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href={{URL::to('/preview')}}>More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href={{URL::to('/preview')}}>Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href={{URL::to('/preview')}}><img src="images/product-img3.jpg" alt="" /></a>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href={{URL::to('/preview')}}>More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<h4><a href={{URL::to('/preview')}}>Whirlpool LTE5243D 3.4 CuFt.... </a></h4>
					<a href={{URL::to('/preview')}}><img src="images/product-img4.jpg" alt="" /></a>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">$839.93 </span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href={{URL::to('/preview')}}>More Info</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				 </div>
			   </div>-->

			    <div class="product-articles">
			      <h3>Browse All Categories</h3>
			      <ul>
			      	<li>
			      <div class="article">
			      	<p><span>Aenean vitae massa dolor</span></p>
			      	<p>Phasellus in quam dui. Nunc ornare, tellus rutrum porttitor imperdiet, dui leo molestie nisl, sit amet dignissim nibh magna pharetra quam. Nunc ultrices pellentesque massa, ac adipiscing dui rutrum id. In cursus augue non erat faucibus eu condimentum dolor molestie.</p>
			      	<p><a href="#">+ Read Full article</a></p>
			      </div>
			      </li>
			      <li>
			       <div class="article">
			      	<p><span>Phasellus sollicitudin consectetur</span></p>
			      	<p>Cras aliquam, odio ac consectetur tincidunt, eros nunc fermentum augue, quis rutrum ante lectus ac lectus. Fusce sed tellus orci, et feugiat urna. Integer et dictum leo. Nulla consectetur tempus orci sed consequat. Mauris cursus est a sapien venenatis faucibus. Etiam sagittis convallis volutpat.</p>
			      	<p><a href="#">+ Read Full article</a></p>
			      </div>
			      </li>
			      </ul>
			    </div>
		      </div>



@stop