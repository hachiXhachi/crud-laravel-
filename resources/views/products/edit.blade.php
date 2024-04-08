<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<title>
		Sign-Up
	</title>
	@include('fragments.css.header')
</head>

<body class="">
	<main class="main-content dark-version mt-0">
		<section>
			<div class="page-header min-vh-100" >
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
							<div class="card card-plain">
								<div class="card-header">
									<h4 class="font-weight-bolder">Products</h4>
									<p class="mb-0">Edit products</p>
								</div>
								<div>
									@if($errors->any())
									@foreach($errors->all() as $error)
									<h5>{{$error}}</h5>
									@endforeach
									@endif
								</div>
								<div class="card-body">
									<form role="form" action="{{route('product.update', ['product'=>$product])}}" method="post">
										@csrf
										@method('put')
										<div>
											@if($errors->any())
											@foreach($errors->all() as $error)
											<h5>{{$error}}</h5>
											@endforeach
											@endif
										</div>
										<div class="input-group input-group-outline mb-3 is-filled">
											<label class="form-label">Name</label>
											<input type="text" name="name" value="{{$product->name}}" class="form-control">
										</div>
										<div class="input-group input-group-outline mb-3 is-filled">
											<label class="form-label">Quantity</label>
											<input type="text" name="qty" id="qty" value="{{$product->qty}}" class="form-control">
										</div>

										<div class="input-group input-group-outline mb-3 is-filled">
											<label class="form-label">Price</label>
											<input type="text" name="price" id="price"  value="{{$product->price}}" class="form-control">
										</div>
	
										<div class="input-group input-group-outline mb-3 is-filled">
											<label class="form-label">Description</label>
											<input type="text" name="description" id="description" value="{{$product->description}}" class="form-control" >
										</div>
										<div class="text-center">
											<button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	@include('fragments.js.js')
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>

</body>

</html>