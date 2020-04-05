<h1> edit page</h1>

<form action="http://localhost:8080/laravel/laravel-6-brgin/server.php/infoid/{{$infos->id}}" method="post">
@method('patch')
@include('books.form')
@csrf
</form>