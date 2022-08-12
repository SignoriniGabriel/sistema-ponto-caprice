<x-app-layout>
    <x-slot name="header">
        <h2>{{__('Product to be deleted!')}}</h2>
    </x-slot>
    <p>Name: {{$products->name}}</p>
    <p>Description: {{$products->description}}</p>
    <p>Category: {{$products->category}}</p>
    <p>Price: {{$products->price}}</p>

    <form action="{{route('products.destroy', $products->id)}}"method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">{{__('Delete')}}</button>
    </form>
</x-app-layout>
