@foreach ($teams as $team )

{{--  {{ $val=$team->img }}
{{  $name = Str::between($val , ':"', '","')}}
{{  $date = Str::between($name , '\\'.'\\', '\\'.'\\')}}
{{   $last = Str::afterLast($name , '\\')}}
<img src={{ asset('storage/teams/'.$date.'/'.$last) }} alt="ali"/>  --}}
<h2>{{ $team->name }}</h2>

@endforeach
