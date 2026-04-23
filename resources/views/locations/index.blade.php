<h1>Страны</h1>
<ul>
    @foreach($countries as $country)
        <li>
            <a href="{{ route('cities.show', ['country' => $country->id]) }}">{{ $country->name }}</a>
        </li>
    @endforeach
</ul>