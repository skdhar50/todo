<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @yield('title')
</head>
<body>
    
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/3 border border-gray-400 rounded p-4">
            @yield('content')
        </div>
    </div>

</body>
</html>