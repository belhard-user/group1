@inject('name', '\App\Name')
<h1>{{ $name->getName() }}</h1>

{{ old('name') }}<br/>
{{ old('email') }}<br/>