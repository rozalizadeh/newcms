@extends('layout_dashboard')

@section('content')

<div>
    <a href="/dashboard/blogs/create"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
        New Blog</a>
</div>

<div class="mt-6">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        create at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{$blog->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$blog->category}}
                    </td>
                    <td class="px-6 py-4">
                        {{$blog->created_at}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/dashboard/blogs/edit/{{$blog->id}}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">edit blog</a>
                        <a href="/dashboard/blogs/{{$blog->id}}/delete"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete blog</a>
                        <a href="/dashboard/blogs/{{$blog->id}}/viewContent"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">view blog</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection