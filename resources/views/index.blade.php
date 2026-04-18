@foreach ($categories as $category)
    <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a><br>
@endforeach