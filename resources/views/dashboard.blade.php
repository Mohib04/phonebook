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
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <div class="w-full block">
                                    <div class="float-right pt-4">
                                        <a class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                                            href="{{ route('contacts.create') }}">
                                            add contact
                                        </a>
                                    </div>
                                    <div class="">
                                        <form class="w-1/2" action="{{ route('dashboard') }}" method="GET">
                                            <label for="default-search"
                                                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                            <div class="relative">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                    </svg>
                                                </div>
                                                <input name="search" type="search" id="default-search"
                                                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                    placeholder="Search by Phone Number" required>
                                                <button type="submit"
                                                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="relative overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Phone
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Email
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Group
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Created at
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Updated at
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $contacts as $contact )
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $contact->name }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $contact->phone }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $contact->email }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $contact->group }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $contact->created_at }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $contact->updated_at }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $contacts->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>