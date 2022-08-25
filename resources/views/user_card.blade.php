<!DOCTYPE HTML>
<html>
<head>
    @if( $user_details->count())
        @foreach ( $user_details as $userdtls )

    <title> {{ $userdtls['name'] }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="is-preload">
    <div id="wrapper">
        <section id="main">
            <header>
                <span class="avatar"><img src="images/users/" alt="" /></span>
                <h1>{{ $userdtls['name'] }}</h1>
                <p>{{ $userdtls['comments'] }}</p>
            </header>
        </section>
        <footer id="footer">
            <ul class="copyright">
                <li>&copy; Pictureworks</li>
            </ul>
        </footer>
    </div>
    <script>
        if ('addEventListener' in window) {
            window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
            document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
        }
    </script>
     @endforeach
    @endif
</body>
</html>
