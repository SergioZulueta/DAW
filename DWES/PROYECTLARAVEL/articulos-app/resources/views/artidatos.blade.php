<html>
<body>
<h1>Mi nombre es{{ $name }}</h1>
<h2>Nuestros ultimos articulos</h2>
<ul>
    @foreach ($articles as $article)
        <li>{{ $article }}</li>
    @endforeach
</ul>
</body>
</html>
