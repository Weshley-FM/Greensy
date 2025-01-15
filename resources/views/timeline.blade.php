<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-slate-800">
                <div class="card-body">
                <form action="{{ route('tweet.store') }}" method="post">
                    @csrf
                <textarea name="content" class="textarea textarea-bordered w-full" id="" placeholder="Tulis tweet"></textarea>
                <input type="submit" value="tweet" class="btn btn-primary">
                </form>
                </div>
            </div>
            
            @foreach($tweets as $tweet)
            <div class="card my-4 bg-slate-800"> 
                <div class="card-body">
                    <h2 class="text-xl font-bold">{{ $tweet->user->name }}</h2>
                    <p>{{ $tweet->content }}</p>
                    <div class="text-end">

                      @can('update', $tweet)
                      <a href="{{ route('tweets.edit', $tweet->id ) }}"
                        class="link link-hover text-blue-600"> edit </a>
                      @endcan

                      @can('delete', $tweet)
                        <form action="{{ route('tweets.destroy', $tweet->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-error btn-sm">Hapus</button>
                    </form>
                    @endcan

                      
                        <span class="text-sm">{{ $tweet->created_at->diffForHumans() }}</span>
                    </div>
                    </div>
                </div>
            @endforeach
            
            
        </div>
    </div>
</x-app-layout>
