<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Contact List
    </h2>
    <br><br>
    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded align-middle"
      href="{{ route('contacts.create') }}">
      add contact
    </a>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <div class="table-responsive">
            <table class="table-auto">
              <thead>
                <tr>
                  <th><strong>Name</strong></th>
                  <th><strong>Phone</strong></th>
                  <th><strong>Email</strong></th>
                  <th><strong>Group</strong></th>
                  <th><strong>Create_at</strong></th>
                  <th><strong>Updated_at</strong></th>
                </tr>
              </thead>
              <tbody>
                @foreach( $contacts as $contact )

                <tr>
                  <th>{{ $contact->name }}</th>
                  <th>{{ $contact->phone }}</th>
                  <th>{{ $contact->email }}</th>
                  <th>{{ $contact->group }}</th>
                  <th>{{ $contact->created_at }}</th>
                  <th>{{ $contact->updated_at }}</th>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>