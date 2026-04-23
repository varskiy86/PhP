<h1>{{ $attraction->name }}</h1>
<p>{{ $attraction->description }}</p>
<a href="{{ route('attractions.show', ['city' => $attraction->city_id]) }}">Вернуться к списку достопримечательностей</a>