function tambahMahasiswa() {
    var NIM = document.getElementById('NIM').value;
    var Nama = document.getElementById('Nama').value;
    var Tlp = document.getElementById('Tlp').value;
    var Email = document.getElementById('Email').value;
 
    if (NIM === '' || Nama === '' || Tlp === '' || Email === '') {
        alert('Silakan lengkapi semua field.');
        return;
    }

    var table = document.getElementById('tb_mahasiswa').getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);

    var cellNim = newRow.insertCell(0);
    var cellNama = newRow.insertCell(1);
    var cellNoTelp = newRow.insertCell(2);
    var cellEmail = newRow.insertCell(3);

    cellNim.innerHTML = NIM;
    cellNama.innerHTML = Nama;
    cellNoTelp.innerHTML = Tlp;
    cellEmail.innerHTML = Email;

    document.getElementById('form_mahasiswa').reset();
}
