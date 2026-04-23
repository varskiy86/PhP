<h1>Города в {{ $country->name }}</h1>
<ul>
    @foreach($cities as $city)
        <li>
            <a href="{{ route('attractions.show', ['city' => $city->id]) }}">{{ $city->name }}</a>
        </li>
    @endforeach
</ul>
<a href="{{ route('locations.index') }}">Вернуться к списку стран</a>