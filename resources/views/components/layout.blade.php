<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'default title'}}</title>
    <meta name ="description" content="{{ $metaDescription ?? 'default' }}"/>
</head>

<x-navigation/>
<p> {{$sum}} </p>
@session('status')
    <div >
        {{$value}}
    </div>
@endsession 
{{ $slot }}  

@isset($sidebar)
    <div id="sidebar">
        <h3>Side bar</h3>
        <div>{{ $sidebar }}</div>
    </div>
@endisset

</body>
</html>


