<head>
    <title>Гостевая книга</title>
</head>
<body>
    <div class="container">
        <h1>Гостевая книга</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @forelse($message as $msg)
            <div class="message-item">
                <div class="meta">
                    <strong>{{ $msg->name }}</strong> • {{ $msg->created_at->format('d.m.Y H:i') }}
                </div>
                <p class="message-text">{{ $msg->message }}</p>
            </div>
        @empty
            <p class="empty">Сообщений пока нет. Оставьте первое!</p>
        @endforelse

        <hr>

        <h2>Оставить сообщение</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('guestbook.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Ваше имя">
            </div>

            <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" rows="5" required placeholder="Текст сообщения...">{{ old('message') }}</textarea>
            </div>

            <button type="submit">Отправить</button>
        </form>
    </div>
</body>
</html>