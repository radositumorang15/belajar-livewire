<div>
    <div class="p-5 border rounded">
        <h2 class="text-xl font-bold mb-4">Edit Ban (Auto Filled)</h2>
    
        <form>
            <div class="mb-2">
                <label>Merk:</label>
                <input type="text" wire:model="brand" class="border p-1 w-full">
            </div>
    
            <div class="mb-2">
                <label>Model:</label>
                <input type="text" wire:model="model" class="border p-1 w-full">
            </div>
    
            <div class="mb-2">
                <label>Harga:</label>
                <input type="number" wire:model="price" class="border p-1 w-full">
            </div>
            
            <div class="mt-4 bg-gray-100 p-2 text-sm">
                <strong>Data Tersimpan di PHP:</strong> <br>
                {{ $brand }} - {{ $model }} (Rp {{ $price }})
            </div>
        </form>
    </div>
</div>
