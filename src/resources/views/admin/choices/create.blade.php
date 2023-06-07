<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('choice.store', ['id' => $question_id]) }}">
                        @csrf

                        <div>
                            <label class="form-label">選択肢：</label>
                            <input type="text" name="choices[]" placeholder="選択肢1を入力してください">
                            <input type="text" name="choices[]" placeholder="選択肢2を入力してください">
                            <input type="text" name="choices[]" placeholder="選択肢3を入力してください">
                        </div>
                        <div>
                            <label for="form-label">正解の選択肢</label>
                            <div>
                                <input type="radio" name="correctChoice" id="correctChoice1" checked value="1">
                                <label for="correctChoice1">
                                    選択肢1
                                </label>
                            </div>
                            <div>
                                <input type="radio" name="correctChoice" id="correctChoice2" value="2">
                                <label for="correctChoice2">
                                    選択肢2
                                </label>
                            </div>
                            <div>
                                <input type="radio" name="correctChoice" id="correctChoice2" value="3">
                                <label for="correctChoice2">
                                    選択肢3
                                </label>
                            </div>


                        </div>

                        <button type="submit">登録</button>

                    </form>
                    <a href="{{ route('questions.index') }}">{{ __('一覧へ戻る') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
