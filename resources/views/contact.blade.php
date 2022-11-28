
@extends('layouts.app')

@section('content')

<head>
  <meta charset="UTF-8">
  <title>About Jewelz</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('aboutus.css') }}">
</head>

<body>

<div class="wrapper">
  <div class="atitle">
    <h1> about Jewelz</h1>

  </div>
  <div class="about">
    <div class="logo">
      <img src="tile-wide.png">
    </div>
    <article>
      <h3>At our store, you will find the best jewelry at very reasonable prices. Our huge range includes diamonds, gold and silver jewellery as well as special pieces made. All our products are handmade by skilled craftsmen in our UK factories using traditional techniques passed down through generations.
      </h3>
   <p>We work closely with our suppliers to ensure that only the best quality materials are used in the making of our jewellery so that you can be assured of its durability and beauty.</p>

    </article>


  </div>
</div>

</body>


@endsection
