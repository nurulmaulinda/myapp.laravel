<!DOCTYPE html>
<html>
<head>
@include('themes.kodeatas')
</head>
<body>
@include('themes.left')
@include('themes.top')
{{-- @include('themes.right') --}}
<div class="content">
@yield('content')
</div>
@include('themes.bottom')
@include('themes.kodebawah')
</body>
</html>