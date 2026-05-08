<!DOCTYPE html>
<html>
<head>
    <title>bzluxe_enterprise</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #0b0b0b;
            color: white;
        }

        .announcement {
            background: #111;
            color: gold;
            text-align: center;
            padding: 8px;
            font-size: 13px;
            letter-spacing: 1px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 40px;
            background: rgba(0,0,0,0.95);
            border-bottom: 1px solid rgba(255,215,55,0.15);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
        }

        header h2 {
            font-family: 'Playfair Display', serif;
            color: gold;
            letter-spacing: 2px;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .search {
            padding: 8px 12px;
            border: 1px solid rgba(255,215,55,0.3);
            background: transparent;
            color: white;
            outline: none;
        }

        .icon {
            cursor: pointer;
            color: gold;
            font-size: 18px;
        }

        .hero {
            height: 88vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background:
                linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.95)),
                url('https://images.unsplash.com/photo-1601121141461-9d6647bca1ed') center/cover;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 68px;
            color: gold;
            margin: 0;
        }

        .hero p {
            max-width: 600px;
            color: #bbb;
        }

        .hero button {
            margin-top: 22px;
            padding: 12px 26px;
            border: 1px solid gold;
            background: transparent;
            color: gold;
            cursor: pointer;
        }

        .hero button:hover {
            background: gold;
            color: black;
        }

        .categories {
            display: flex;
            justify-content: center;
            gap: 12px;
            padding: 25px;
        }

        .cat {
            border: 1px solid gold;
            padding: 8px 14px;
            background: transparent;
            color: gold;
            cursor: pointer;
            font-size: 13px;
        }

        .cat.active,
        .cat:hover {
            background: gold;
            color: black;
        }

        .section-title {
            text-align: center;
            margin-top: 40px;
            font-family: 'Playfair Display', serif;
            color: gold;
            font-size: 26px;
        }

        .products {
            padding: 40px 60px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
        }

        .card {
            background: #141414;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(255,215,55,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: gold;
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .card-body {
            padding: 12px;
        }

        .price {
            color: gold;
            font-weight: bold;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: 1px solid gold;
            background: transparent;
            color: gold;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn:hover {
            background: gold;
            color: black;
        }

        .trust {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 40px;
            color: #aaa;
            font-size: 14px;
        }

        .newsletter {
            text-align: center;
            padding: 60px 20px;
        }

        .newsletter input {
            padding: 10px;
            width: 250px;
            border: 1px solid gold;
            background: transparent;
            color: white;
        }

        .newsletter button {
            padding: 10px 14px;
            border: none;
            background: gold;
            color: black;
            cursor: pointer;
        }

        footer {
            text-align: center;
            padding: 40px;
            color: #666;
            border-top: 1px solid #222;
        }
    </style>
</head>

<body>

<div class="announcement">
    FREE SHIPPING ON ORDERS ABOVE ₦50,000 • LUXURY HANDCRAFTED JEWELRY
</div>

<header>
    <h2>bzluxe_enterprise</h2>

    <div class="nav-actions">
        <input class="search" id="searchInput" placeholder="Search jewelry..." onkeyup="searchProducts()">
        <span class="icon">🛒 <span id="cartCount">0</span></span>
    </div>
</header>

<section class="hero">
    <h1>Luxury, Reimagined</h1>
    <p>Premium handcrafted jewelry designed for elegance, power, and timeless identity.</p>
    <button onclick="scrollToProducts()">Shop Collection</button>
</section>

<div class="categories">
    <div class="cat active" onclick="filter('all', this)">All</div>
    <div class="cat" onclick="filter('ring', this)">Rings</div>
    <div class="cat" onclick="filter('necklace', this)">Necklaces</div>
    <div class="cat" onclick="filter('watch', this)">Watches</div>
</div>

<div class="section-title">Featured Collection</div>

<section class="products" id="products">

@foreach($products as $index => $product)

    <div class="card" data-name="{{ strtolower($product['name'] ?? '') }}">

        <a href="/product/{{ $index + 1 }}">
            <img src="{{ $product['image'] }}">
        </a>

        <div class="card-body">
            <h3>{{ $product['name'] ?? 'No Name' }}</h3>
            <p class="price">₦{{ number_format($product['price'] ?? 0) }}</p>

            <form method="POST" action="/cart/add">
                @csrf
                <input type="hidden" name="id" value="{{ $index + 1 }}">
                <button class="btn" type="submit">Add to Cart</button>
            </form>

        </div>

    </div>

@endforeach

</section>

<div class="trust">
    <div>🚚 Fast Delivery</div>
    <div>💎 Premium Quality</div>
    <div>🔒 Secure Payments</div>
</div>

<div class="newsletter">
    <h3 style="color:gold;">Join Our Luxury List</h3>
    <input placeholder="Enter email">
    <button>Subscribe</button>
</div>

<footer>
    © 2026 bzluxe_enterprise • Luxury Jewelry Store
</footer>

<script>
let cart = 0;

function addToCart(){
    cart++;
    document.getElementById('cartCount').innerText = cart;
}

function scrollToProducts(){
    document.getElementById('products').scrollIntoView({behavior:'smooth'});
}

function searchProducts(){
    let input = document.getElementById('searchInput').value.toLowerCase();
    let cards = document.querySelectorAll('.card');

    cards.forEach(c => {
        c.style.display = c.dataset.name.includes(input) ? 'block' : 'none';
    });
}

function filter(type, el){
    let cards = document.querySelectorAll('.card');

    cards.forEach(c => {
        if(type === 'all'){
            c.style.display = 'block';
        } else {
            c.style.display = c.dataset.name.includes(type) ? 'block' : 'none';
        }
    });

    document.querySelectorAll('.cat').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
}
</script>

</body>
</html>