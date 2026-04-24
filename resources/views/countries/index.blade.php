<h1>Список стран</h1>
<a href="{{ route('countries.create') }}">Добавить страну</a>

<ul>
    @foreach($countries as $country)
        <li><a href="{{ route('countries.show', $country->id) }}">{{ $country->name }}</a></li>
    @endforeach
</ul>