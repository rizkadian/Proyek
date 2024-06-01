
//validasi nama
function validasiNama(input) {
    // Dapatkan nilai input nama
    var nama = input.value;

    // Gunakan ekspresi reguler untuk memeriksa apakah hanya terdiri dari huruf
    var validasiNamaRegex = /^[a-zA-Z\s]*$/;

    // Periksa apakah nama valid
    if (validasiNamaRegex.test(nama)) {
        // Nama valid
        input.setCustomValidity('');
    } else {
        // Nama tidak valid, atur pesan kustom untuk ditampilkan
        input.setCustomValidity('Nama hanya boleh mengandung huruf dan spasi.');
    }
}

//validasi email          
function validasiEmail(input) {
    // Dapatkan nilai input email
    var email = input.value;

    // Gunakan ekspresi reguler untuk memeriksa validitas email
    var validasiEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Periksa apakah email valid
    if (validasiEmailRegex.test(email)) {
        // Email valid
        input.setCustomValidity('');
    } else {
        // Email tidak valid, atur pesan kustom untuk ditampilkan
        input.setCustomValidity('Masukkan alamat email yang valid.');
    }
  }



// validasi telepon
function validasiNomorTelepon(input) {
    // Dapatkan nilai input NIM
    var telepon = input.value;

    // Gunakan ekspresi reguler untuk memeriksa apakah hanya terdiri dari angka
    var validasiTeleponRegex = /^\d+$/;

    // Periksa apakah NIM valid dan memiliki panjang minimal 10 digit
    if (validasiTeleponRegex.test(telepon) && telepon.length >= 10) {
        // NIM valid
        input.setCustomValidity('');
    } else {
        // NIM tidak valid, atur pesan kustom untuk ditampilkan
        input.setCustomValidity('No Telepon harus terdiri dari angka dan memiliki panjang minimal 10 digit.');
    }
}

function validateKategori() {
    var selectElement = document.getElementById('kategori');
    var selectedValue = selectElement.value;
    // Hapus pesan kesalahan sebelumnya
    selectElement.setCustomValidity('');
    // Validasi khusus (misalnya, cek apakah opsi yang dipilih bukan default)
    if (selectedValue === '') {
        selectElement.setCustomValidity('Pilih kategori sebelum mengirimkan formulir.');
    }
}

function validateJadwal() {
    var selectElement = document.getElementById('jadwal');
    var selectedValue = selectElement.value;
    // Hapus pesan kesalahan sebelumnya
    selectElement.setCustomValidity('');
    // Validasi khusus (misalnya, cek apakah opsi yang dipilih bukan default)
    if (selectedValue === '') {
        selectElement.setCustomValidity('Pilih jadwal sebelum mengirimkan formulir.');
    }
}

function validatePayment() {
    var selectElement = document.getElementById('payment');
    var selectedValue = selectElement.value;
    // Hapus pesan kesalahan sebelumnya
    selectElement.setCustomValidity('');
    // Validasi khusus (misalnya, cek apakah opsi yang dipilih bukan default)
    if (selectedValue === '') {
        selectElement.setCustomValidity('Pilih payment sebelum mengirimkan formulir.');
    }
}

function konfirmasiBooking() {
    // Menampilkan SweetAlert
    Swal.fire({
        title: 'Apakah Anda yakin ingin melakukan booking?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya, Booking Sekarang',
        cancelButtonText: 'Batal',
    }).then((result) => {
        // Jika pengguna mengklik "Ya"
        if (result.isConfirmed) {
            Swal.fire('Booking berhasil dilakukan!', '', 'success');
            // Di sini, Anda dapat menambahkan logika atau panggilan fungsi untuk melakukan booking aktual
        } else {
            // Jika pengguna membatalkan, tampilkan pesan pembatalan
            Swal.fire('Booking dibatalkan', '', 'info');
        }
    });
}