<!Doctype Html>
<Html>
<Head>
    <!--Place for links-->

    <!-- Basic style for split navbar, body and footer of the page -->
    <style>
        h3 {text-align: center;}
        h1{text-align: center;}
        .topnav {
             overflow: hidden;
             background-color: #f1f1f1;
        }
        body {
            background-color: #2d3748;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        footer {
            position: fixed;
            left: 10px;
            bottom: 5px;
            right: 10px;
            width: 100%;
            background-color: #f1f1f1;
            color: black;
            text-align: center;
            padding: 10px;
        }
    </style>


</Head>
<Body>

<div class="topnav">
    <h3>Navbar</h3>
</div>

<header>
</header>

<!-- content of home.blade.php -->
@yield('content')

<footer>
    <h3>Footer</h3>
</footer>

</Body>
</Html>
