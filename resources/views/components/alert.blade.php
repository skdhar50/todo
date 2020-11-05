<div>
    @if ( session()->has('message') )
        <div class="py-4 px-2 bg-green-300">{{ session()->get('message') }}</div>
    @elseif(session()->has('error'))
        <div class="py-4 px-2 bg-red-300">{{ session()->get('error') }}</div>    
    @endif
    
    @if ( $errors->any() )
    
    <ul>
        @foreach ($errors->all() as $error)
            <div class="py-4 px-2 bg-red-300">
                <li>{{ $error }}</li>
            </div>
        @endforeach
    </ul>
        
    @endif
</div>