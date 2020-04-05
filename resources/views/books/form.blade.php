<input type='text' name='name' autocomplete="off" vlaue="{{old('name') ??  $infos->name}}"> </input>
<p> @error('name') {{$message}} @enderror </p>

<div>
<input type='text' name='email'autocomplete="off" vlaue="{{old('email') ?? $infos->email}}" > </input><br>
 @error('email') {{$message}} @enderror
<br>
</div>
<button>  Add now </button>