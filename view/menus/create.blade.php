@extends('layout_dashboard')

@section('content')
<div class="flex w-full min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 xl:mx-auto xl:w-full xl:max-w-7xl">
        <form class="space-y-6" method="POST">
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">name</label>
                <div class="mt-2">
                    <input id="name" name="name" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <label for="page" class="block text-sm font-medium leading-6 text-gray-900">page</label>
                <div class="mt-2">
                    <select name="page" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @foreach($pages as $page)
                            <option value="{{$page->id}}">{{$page->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
            </div>
        </form>

    </div>
</div>
@endsection