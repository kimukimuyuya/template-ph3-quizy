<x-app-layout>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <table class="table-fixed">
                            <tr>
                                <th>質問文</th>
                                <th>画像</th>
                                <th>参照</th>
                                <th>編集</th>
                                <th>削除</th>
                            </tr>
                            @foreach ($questions as $question)
                                <tr>
                                    <td><a href="choices/{{$question->id}}/choice">{{ $question->content }}</a></td>
                                    <td>{{ $question->image }}</td>
                                    <td>{{ $question->supplement }}</td>
                                    <td>
                                    <th><a
                                            href="{{ route('questions.edit', ['question' => $question->id]) }}">{{ __('編集') }}</a>
                                    </th>
                                    </td>
                                    <td>
                                    <th>
                                        <form method="POST"
                                            action="{{ route('questions.destroy', ['question' => $question->id]) }}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit">削除</button>
                                        </form>
                                    </th>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
                <a href="{{ route('questions.create') }}">{{ __('新規作成') }}</a>
            </div>
        </div>
</x-app-layout>
