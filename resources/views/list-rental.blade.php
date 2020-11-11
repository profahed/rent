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
                        <th>{{__('photo')}}</th>
                        <th>{{__('Zip code')}}</th>
                        <th>{{__('bathrooms')}}</th>
                        <th>{{__('bedroms')}}</th>
                        <th>{{__('sqft')}}</th>
                        <th>{{__('House type')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                    @foreach(\Auth::user()->rentals as $item)
                    <tr>
                        <th><img style="width: 100px;" class="rounded" src="{{$item->photo}}"></th>
                        <td>{{$item->zip_code}}</td>
                        <td>{{$item->bathrooms}}</td>
                        <td>{{$item->beds}}</td>
                        <td>{{$item->sqft}}</td>
                        <td>{{$item->house_type}}</td>
                        <td><a href="{{route('destroy',$item->id)}}" onclick="return confirm('Are you sure you want to remove this rental?')">{{__('Remove')}}</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
