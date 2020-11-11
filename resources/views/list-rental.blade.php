<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Rental') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="text-right">
                    <a class="btn btn-primary" href="{{ route('post-rental') }}">Post new</a>
                </div>

                <table class="table mt-5" style="width: 100%">
                    <tr>
                        <th>{{__('Zip code')}}</th>
                        <th>{{__('bathrooms')}}</th>
                        <th>{{__('bedroms')}}</th>
                        <th>{{__('sqft')}}</th>
                        <th>{{__('House type')}}</th>
                    </tr>
                    <tr>
                        <td>1333</td>
                        <td>123</td>
                        <td>123</td>
                        <td>123</td>
                        <td>123</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>
