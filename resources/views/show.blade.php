<h1>{{ $category->name }}</h1>
@foreach ($ads as $ad)
    <h3>{{ $ad->title }}</h3>
    <p>{{ $ad->content }}</p>
    <small>{{ $ad->created_at }}</small>
@endforeach

<form action="{{ route('ads.store', $category) }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Заголовок" required><br>
    <textarea name="content" placeholder="Текст объявления" required></textarea><br>
    <button type="submit">Добавить объявление</button>
</form>