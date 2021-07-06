<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
        {{ __('Add Product') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
		    <h3 class="font-semibold text-lg text-gray-800 leading-tight text-left pb-4">
		        {{ __('Create a product') }}
		    </h3>

            <form method="POST" action="/product/create">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('title'))
                        <span style="color: red;" class="text-danger pb-4">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="form-group pt-4">
                    <label for="firstname">First Name</label>
                    <input name="firstname" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('firstname'))
                        <span style="color: red;" class="text-danger">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>

                <div class="form-group pt-4">
                    <label for="mainname">Main Name</label>
                    <input name="mainname" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('mainname'))
                        <span style="color: red;" class="text-danger">{{ $errors->first('mainname') }}</span>
                    @endif
                </div>

                <div class="form-group pt-4">
                    <label for="price">Price</label>
                   	<input name="price" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('price'))
                        <span style="color: red;" class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                </div>

                <div class="form-group pt-4">
                    <label for="numpages">Number of pages</label>
                   	<input name="numpages" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />  
                    @if ($errors->has('numpages'))
                        <span style="color: red;" class="text-danger">{{ $errors->first('numpages') }}</span>
                    @endif
                </div>

                <div class="form-group pt-4">
                    <label for="playlist">Play Time</label>
                   	<input name="playlist" class="shadow-md bg-white border border-gray-400 leading-normal resize-none w-full h-14 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />   
                    @if ($errors->has('playlist'))
                        <span style="color: red;" class="text-danger">{{ $errors->first('playlist') }}</span>
                    @endif
                </div>


                <div class="form-group pt-3 text-right">
                    <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Add Product</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
</x-app-layout>