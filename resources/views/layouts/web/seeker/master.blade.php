<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ahlam Mohammed">
    <meta name="keywords" content="Job , وظائف">
    <meta name="description" content="موقع مختص في توفير الوظائف">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    {{-- Css File --}}
    @include('layouts.web.style')

</head>
<body class="bg-light">
<main>
    <div class="w-100">
        <div class="row p-0 m-0">

            {{-- Sidbar  --}}
            @include('layouts.web.seeker.sidebar')
            <div class="col-lg-9 col-12">
                <div class="container-lg p-0">
                    {{-- Content Section  --}}
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</main>

@include('layouts.web.script')
</body>
</html>
