<x-layout>
	@foreach ($posts as $post)
		<table>
			<div>
				<h2>{{ $post->name }}</h2>
				<div>
					{{ $post->email }}
				</div>
				<div>
					{{ $post->password }}
				</div>
			</div>
		</table>
	@endforeach
</x-layout>