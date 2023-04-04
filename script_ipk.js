function ipk_terakhir() {
    // variabel untuk memilih elemen berdasarkan atribut "id"
    const kategori = document.getElementById("semester").value;
    const ipk_terakhir = document.getElementById("ipk");

    
    if (kategori == "1") {
        ipk_terakhir.value = 2.60
    } else if (kategori == "2") {
        ipk_terakhir.value = 2.70
    } else if (kategori == "3") {
        ipk_terakhir.value = 2.80;
    } else if (kategori == "4") {
        ipk_terakhir.value = 2.90
    } else if (kategori == "5") {
        ipk_terakhir.value = 3.00;
    } else if (kategori == "6") {
        ipk_terakhir.value = 3.10
    } else if (kategori == "7") {
        ipk_terakhir.value = 3.20;
    } else if (kategori == "8") {
        ipk_terakhir.value = 3.30;
    }
}