<html>

@foreach ($images as $image)
<img src="{{ $image->link }}"/><br/>
@endforeach

</html>