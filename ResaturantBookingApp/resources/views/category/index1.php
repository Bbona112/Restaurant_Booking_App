<x-guest-layout>
    <div class="container w-full px-5 py-32 mx-auto bg-gray-800">
        <div class="grid lg:grid-cols-4 gap-y-6 bg-grey-500">
            @foreach ($categories as $category)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
                    <div class="px-6 py-4">

                        <a href="{{ route('categories.show', $category->id) }}">
                            <h4
                                class="mb-3 text-xl font-semibold tracking-tight text-beigeuppercase">
                                {{ $category->name }}</h4>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-guest-layout>
