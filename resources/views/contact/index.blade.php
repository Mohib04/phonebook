<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Contact List
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded align-middle"
            href="{{ route('contacts.create') }}">
            add contact
          </a>
          <br>
          <br>
          <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
</x-app-layout>