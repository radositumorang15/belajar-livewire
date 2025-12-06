import './bootstrap';



    document.addEventListener('alpine:init', () => {
        Alpine.store('dataKu', {
            angka: 0
        })
    })