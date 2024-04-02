// ambil dulu elemen elemen yang kita butuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var containern= document.getElementById('container');

// tambahkan event ketika keyword di tulis
keyword.addEventListener('keyup', function() {
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // cel kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
    }
} 

// eksekusi ajax
xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
xhr.send();


});