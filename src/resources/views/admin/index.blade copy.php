
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray">
                    @foreach ($questions as $question)
                        <div>
                            <h2><a href="choices/{{$question->id}}">{{ $question->content }}</a></h2>
                            <a href="{{ route('questions.edit', ['question' => $question->id]) }}">{{ __('編集') }}</a>
                            <form method="POST" action="{{ route('questions.destroy', ['question' => $question->id]) }}">
                                @method('delete')
                                @csrf
                                <button type="submit">削除</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('questions.create') }}">{{ __('新規作成') }}</a>
        </div>
    </div>
</x-app-layout>
