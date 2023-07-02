<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    @include('libraries.styles')
    @livewireStyles
</head>

<body>

    @include('components.navbar')
    @yield('content')

    @include('components.footer')
    @include('libraries.scripts')
    @livewireScripts
</body>

</html>