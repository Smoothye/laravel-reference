<x-layout>
    <h2> Currently available ninjas </h2>
 
    <ul>
        @foreach($ninjas as $ninja) 
            
            <li>
                {{-- by default all attributes are passed as a string --}}
                {{-- prefix an attribute with `:` to pass it as a dynamic value --}}
                <x-card href="{{ route('ninjas.show', $ninja->id) }}" :highlight="$ninja['skill'] > 75"> 
                    
                    <div>
                        <h3> {{ $ninja->name }} </h3>
                        <p> {{ $ninja->dojo->name }} </p>
                    </div>

                </x-card>
            </li>

        @endforeach
    </ul>

    {{-- for pagination: insert previous and next page buttons --}}
    {{ $ninjas->links() }}

</x-layout>