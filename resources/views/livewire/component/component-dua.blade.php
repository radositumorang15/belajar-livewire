<div>

    <h1>Stok Ban Saat Ini</h1>

    //Initializing properties
    <div>
        <h1>Daftar Ban (Dummy)</h1>
        
        <ul>
            @foreach($tires as $tire)
                <li wire:key="{{ $tire['id'] }}">
                    {{ $tire['brand'] }} - {{ $tire['model'] }} 
                    (Rp {{ number_format($tire['price']) }})
                </li>
            @endforeach
        </ul>
    </div>
</div>
