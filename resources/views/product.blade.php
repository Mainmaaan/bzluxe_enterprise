<!DOCTYPE html>
<html>
<head>
    <title>{{ $product['name'] }}</title>

    <style>
        body {
            margin:0;
            font-family: Inter, sans-serif;
            background:#0b0b0b;
            color:white;
        }

        .container {
            display:flex;
            gap:40px;
            padding:60px;
        }

        img {
            width:400px;
            border-radius:12px;
        }

        .price {
            color:gold;
            font-size:22px;
        }

        button {
            padding:12px 20px;
            background:gold;
            border:none;
            cursor:pointer;
            margin-top:20px;
        }
    </style>
</head>

<body>

<div class="container">
    <img src="{{ $product['image'] }}">

    <div>
        <h1>{{ $product['name'] }}</h1>
        <p class="price">₦{{ number_format($product['price']) }}</p>

        <p>Premium handcrafted luxury jewelry.</p>

        <button onclick="addToCart()">Add to Cart</button>
    </div>
</div>

<script>
function addToCart(){
    fetch('/cart/add', {
        method:'POST',
        headers:{
            'Content-Type':'application/json',
            'X-CSRF-TOKEN':'{{ csrf_token() }}'
        },
        body: JSON.stringify({
            name: "{{ $product['name'] }}",
            price: "{{ $product['price'] }}",
            image: "{{ $product['image'] }}"
        })
    }).then(()=> alert("Added to cart"));
}
</script>

</body>
</html>