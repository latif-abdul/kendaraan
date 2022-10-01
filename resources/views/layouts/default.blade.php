<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.header_scripts')
        <title>KENDARAAN</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                Laporan Penjualan
                            </a>
                        </ul>

                        <!-- Right Side Of Navbar -->
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
            
        </header>
        @include('layouts.footer_scripts')
    </body>
</html>