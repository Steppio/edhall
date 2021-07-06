<x-guest-layout>
	
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Products') }}
        </h2>
    </x-slot>

	<div class="py-12">
	    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
	        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
	        	<h2 class="flex-auto text-2xl mb-4">Search List</h2>
				<form action="{{ route('search') }}" method="GET">
				    <input type="text" name="search" required/>
				    <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded bg-gray-200">Search</button>
				</form>

	            <div class="flex  flex-wrap justify-between px-4 pt-4">
	               
	                <div class="flex-auto text-right mt-2">
	                    <a href="/" class="float-right bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded bg-gray-200">All Products</a>
	                	@if (!empty(Auth::user()))
	                    	<a href="/product/add" class="float-right bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded bg-gray-200 mr-4">Add new Product</a>
	                    @endif
	                </div>
	            </div>

				@if($products->isNotEmpty())
			            <table class="w-full text-md rounded mb-4" style="width: 96%; margin: 20px auto 20px auto;">
			                <thead>
			                    <tr class="border-b">
			                        <th class="text-left p-3 px-5" style="text-align: left;">Title</th>
			                        <th class="text-left p-3 px-5" style="text-align: left;">First Name</th>
			                        <th class="text-left p-3 px-5" style="text-align: left;">Main Name</th>
			                        <th class="text-left p-3 px-5" style="text-align: left;">Price</th>
			                        <th class="text-left p-3 px-5" style="text-align: left;"># of Pages</th>
			                        <th class="text-left p-3 px-5" style="text-align: left;">Play Time</th>
			                        <th></th>
			                    </tr>
			                </thead>
			                
			                <tbody>
			                @foreach($products as $product)
			                    <tr class="border-b hover:bg-orange-100">
			                        <td class="p-3 px-5">
			                            {{$product->title}}
			                        </td>
			                        <td class="p-3 px-5">
			                            {{$product->firstname}}
			                        </td>   
			                        <td class="p-3 px-5">
			                            {{$product->mainname }}
			                        </td>
			                        <td class="p-3 px-5">
			                            {{$product->price}}
			                        </td>   
			                        <td class="p-3 px-5">
			                            {{$product->numpages }}
			                        </td>
			                        <td class="p-3 px-5">
			                            {{$product->playlist }}
			                        </td>	                        	                                                   
			                        <td class="p-3 px-5">
			                           	@if(!empty(Auth::user()))
			                            <a href="/product/{{$product->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
			                            <form action="/product/{{$product->id}}" class="inline-block">
			                                <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-700 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
			                                {{ csrf_field() }}
			                            </form>
			                            @endif
			                        </td>
			                    </tr>
			                @endforeach
			                </tbody>
			            </table>
			           
			           
				@else 
				    <div>
				        <h2>No products found</h2>
				    </div>
				@endif

			</div>
		</div>
	</div>

</x-guest-layout>