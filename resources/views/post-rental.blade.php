<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Rental') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('Zip code')}}</label>
                        <input type="text" class="form-control" name="zip_code" value="{{old('zip_code')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">{{__('Bathrooms')}}</label>
                        <input type="text" class="form-control" name="bathrooms" value="{{old('bathrooms')}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">{{__('Beds')}}</label>
                        <input type="text" class="form-control" name="beds" value="{{old('beds')}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">{{__('sqft')}}</label>
                        <input type="text" class="form-control" name="sqft" value="{{old('sqft')}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">{{__('House type')}}</label>
                        <select class="form-control" name="house_type">
                            @foreach(['single family house', 'haunted house', 'apartment', 'wood shed', 'tent', 'open air'] as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">photo</label>
                        <input type="file" name="photo" class="form-control-file">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
