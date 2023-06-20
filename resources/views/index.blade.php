<x-layouts.main>
 {{-- 1. Spalte ----------------------------------------------------------------------------------}}
 <div class="flex-1 space-y-5">

    @foreach ($posts as $post)
        <div class="bg-white shadow rounded">
            <img src="https://picsum.photos/800/350?random={{rand(0,100)}}" alt="Random image" class="rounded-t">
            <div class="p-5">
                <div class="font-bold text-xs text-blue-700">{{$post->created_at}}</div>
                <div class="text-3xl text-blue-900">{{$post->title}}</div>
                <div class="text-lg text-gray-700">{{$post->body}}</div>
            </div>
            <button type="button" class="btn btn mb-3 ml-3" style="border-radius: 50px; height: auto; width: 33mm;border: 3px solid rgb(42, 46, 165);">
                <a href="{{ url('/blog/'.$post->id) }}" class="btn btn-secondary" style="height: auto; width: 100%;border-radius: 50px;">Blog</a>
            </button>
            <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700 font-bold text-xs bg-indigo-100">
                <a href="mailto:{{ $post->user->email }}">{{$post->user->name}}</a>
            </div>
        </div>
    @endforeach
</div>

</x-layouts.main>