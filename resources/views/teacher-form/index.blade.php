<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Form') }}
        </h2>
        <a href="{{ route('export_all') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-3">
            Export All
        </a>
        </div>
    </x-slot>

    <section x-data="teacherFormApp()">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <form method="POST" class="w-full" id="teacher-form">

                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-sm font-semibold mb-2" for="grid-name">
                                        Name
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" value="{{ old('name', $data?->name) }}">
                                    @error('name')
                                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-sm font-semibold mb-2" for="grid-last-name">
                                        Title
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="title" value="{{ old('title', $data?->title)}}">
                                    @error('title')
                                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-sm font-semibold mb-2" for="grid-password">
                                        Subtitle
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="sub_title" value="{{ old('sub_title', $data?->sub_title) }}">
                                    @error('sub_title')
                                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-sm font-semibold mb-2" for="grid-city">
                                        Organization Name
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="organization_name" value="{{ old('organization_name', $data?->organization_name) }}">
                                    @error('organization_name')
                                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-sm font-semibold mb-2" for="grid-city">
                                        Date
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="date" name="date" value="{{ old('date', $data?->date)}}">
                                    @error('date')
                                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-sm font-semibold mb-2" for="grid-city">
                                        Organization Remark
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" name="organization_remark" value="{{ old('organization_remark', $data?->organization_remark) }}">
                                    @error('organization_remark')
                                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-sm font-semibold mb-2" for="grid-password">
                                        Description
                                    </label>
                                    <textarea class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="description" id="editor">
                                        {!! old('description', $data?->description) !!}
                                    </textarea>
                                    @error('description')
                                    <p class="text-red-500 text-sm italic">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex -mx-3 mb-6 justify-center">
                                <button type="button" @click="confirm" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Preview
                                </button>
                                <a href="{{ route('teacher_form.export') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mx-3">
                                    Export PDF
                                </a>
                                <button type="button" @click="store" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if($teacherForm)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
                            {{ __('Teacher Form') }}
                        </h2>
                        <div class="mt-5 border border-dark px-5 py-3">
                            <h6 class="text-end pb-5 font-bold text-gray-800 leading-tight">
                                {{ $teacherForm->name }} <br>
                                {{ $teacherForm->date->format('Y-m-d') }}
                            </h6>
                            <h6 class="pb-3 font-bold text-gray-800 leading-tight">{{ $teacherForm->title }}</h6>
                            {!! $teacherForm->description !!}
                            <h6 class="text-end pb-3 pt-5 font-bold">
                                {{ $teacherForm->organization_name }} <br>
                                {{ $teacherForm->organization_remark }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
    @section('script')
    <script src="{{ mix('js/teacher_form.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    @endsection
</x-app-layout>
