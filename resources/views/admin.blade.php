<!DOCTYPE html>
<html>
<head>
    <title>Admin - bzluxe_enterprise</title>

    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #111;
            color: white;
            display: flex;
        }

        .sidebar {
            width: 220px;
            background: black;
            height: 100vh;
            padding: 20px;
            border-right: 1px solid gold;
        }

        .sidebar h2 {
            color: gold;
        }

        .sidebar a {
            display: block;
            color: white;
            margin: 15px 0;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: gold;
        }

        .main {
            flex: 1;
            padding: 20px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .card {
            background: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid gold;
        }

        .section {
            margin-top: 30px;
            background: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid gold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: black;
            border: 1px solid gold;
            color: white;
        }

        button {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            background: gold;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: white;
            color: black;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="/">🏠 Home</a>
    <a href="/admin">📊 Dashboard</a>
    <a href="#">🛍 Products</a>
    <a href="#">📦 Orders</a>
</div>

<div class="main">

    <h1>bzluxe_enterprise Dashboard</h1>

    <div class="cards">
        <div class="card">
            <h3>Total Products</h3>
            <p>4</p>
        </div>

        <div class="card">
            <h3>Total Orders</h3>
            <p>12</p>
        </div>

        <div class="card">
            <h3>Revenue</h3>
            <p>₦350,000</p>
        </div>
    </div>

    <div class="section">
        <h3>Add New Product</h3>

        <input type="text" placeholder="Product Name">
        <input type="text" placeholder="Price">
        <input type="text" placeholder="Image URL">

        <button>Add Product</button>
    </div>

    <div class="section">
        <h3>Recent Orders</h3>
        <p>John - Gold Ring</p>
        <p>Mary - Necklace</p>
        <p>Alex - Watch</p>
    </div>

</div>

</body>
</html>