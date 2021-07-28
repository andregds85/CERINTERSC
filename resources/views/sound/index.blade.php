@extends('layouts4.app')
@section('content')

<audio id="audio" autoplay controls>
    <source src="https://cdns-preview-8.dzcdn.net/stream/821246fb5d7e2ff6975f65ef7460a708-0.mp3" type="audio/mp3">
</audio>

<script>
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(30000);

//  5 segundos  -->
</script>









@endsection


