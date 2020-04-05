
<h1> hello </h1>

<table>
<tr><td>id</td><td>name</td><td>email</td><td>edit</td><td>delete</td><td>status</td>
</tr>
@forelse($data as $d)
<tr>
<td> {{$d->id}}</td>
<td><p><a href="http://localhost:8080/laravel/laravel-6-brgin/server.php/infoid/{{$d->id}}"> {{$d->name}}</a></p></td>
<td> {{$d->email}}</td>
<td><a href="http://localhost:8080/laravel/laravel-6-brgin/server.php/infoid/{{$d->id}}/edit">edit</a></td>
<td>
<form action="http://localhost:8080/laravel/laravel-6-brgin/server.php/infoid/{{$d->id}}/delete" method="post">

@csrf @method('delete')
 <button>Delete </button>
 </form>



</td>

<td>
@if($d->active==0)
<a href="http://localhost:8080/laravel/laravel-6-brgin/server.php/{{$d->id}}/desactive">desactive</a>
@else 
<a href="http://localhost:8080/laravel/laravel-6-brgin/server.php/{{$d->id}}/active">active</a>
@endif
</td>

</tr>


@empty
no item to shown 

@endforelse
@csrf
</table>
<form action="http://localhost:8080/laravel/laravel-6-brgin/server.php/books/create">
 <button> Add from here </button>
 </form>







 
