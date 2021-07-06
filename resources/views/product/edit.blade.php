<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Product') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-lg p-5">
       
            <form method="POST" action="/product/{{ $product->id }}">

                <div class="form-group pb-8">
                    <label for="title">Title</label>
                    <input name="title" value="{{$product->title}}" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('title'))
                        <span style="color: red;" class="text-danger pb-4">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="form-group pb-8">
                    <label for="firstname">First Name</label>
                    <input name="firstname" value="{{$product->firstname}}" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('firstname'))
                        <span style="color: red;" class="text-danger pb-4">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>

                <div class="form-group pb-8">
                    <label for="mainname">Main Name</label>
                    <input name="mainname" value="{{$product->mainname}}" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('mainname'))
                        <span style="color: red;" class="text-danger pb-4">{{ $errors->first('mainname') }}</span>
                    @endif
                </div>

                <div class="form-group pb-8">
                    <label for="price">Price</label>
                    <input name="price" value="{{$product->price}}" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('price'))
                        <span style="color: red;" class="text-danger pb-4">{{ $errors->first('price') }}</span>
                    @endif
                </div>

                <div class="form-group pb-8">
                    <label for="numpages"># of Pages</label>
                    <input name="numpages" value="{{$product->numpages}}" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('numpages'))
                        <span style="color: red;" class="text-danger pb-4">{{ $errors->first('numpages') }}</span>
                    @endif
                </div>

                <div class="form-group pb-8">
                    <label for="playlist">Play Time</label>
                    <input name="playlist" value="{{$product->playlist}}" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('playlist'))
                        <span style="color: red;" class="text-danger pb-4">{{ $errors->first('playlist') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" name="update" class="my-4  bg-purple-600 hover:bg-purple-700 float-right text-white font-bold py-2 px-4 rounded">Update task</button>
                </div>
            {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</x-app-layout>