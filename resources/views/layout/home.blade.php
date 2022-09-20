<html>
<head>
    <title> @yield('title')</title>
</head>
<body>
@yield('header')
<header>
     <ul>
         <li>Acceuil</li>
         <li>Contact</li>
     </ul>
</header>

@yield('content')
@yield('footer')
<footer>
    copyright 2022
</footer>
</body>
</html>
