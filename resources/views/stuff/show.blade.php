
<h1> wlecome to list </h1>

<ul>
@forelse($data as $da)
<li>{{$da}} </li>
@empty
<li> no item to shown </li>
@endforelse
</ul>