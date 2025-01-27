document.addEventListener('DOMContentLoaded', function () {
    loadData();

    document.getElementById('formMakanan').addEventListener('submit', async function (e) {
        e.preventDefault();
        const id = document.getElementById('makananId').value;
        const nama = document.getElementById('namaMakanan').value;
        const harga = document.getElementById('hargaMakanan').value;

        const url = id ? 'api/update.php' : 'api/create.php';
        try {
            const response = await fetch(url, {
                method: 'POST',
                body: JSON.stringify({ id, nama, harga }),
                headers: { 'Content-Type': 'application/json' },
            });
            const data = await response.json();
            alert(data.message);
            loadData();
            document.getElementById('formMakanan').reset();
            bootstrap.Modal.getInstance(document.getElementById('addModal')).hide();
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan, silakan coba lagi.');
        }
    });

    document.getElementById('confirmDelete').addEventListener('click', async function () {
        const id = this.getAttribute('data-id');
        try {
            const response = await fetch('api/delete.php', {
                method: 'POST',
                body: JSON.stringify({ id }),
                headers: { 'Content-Type': 'application/json' },
            });
            const data = await response.json();
            alert(data.message);
            loadData();
            bootstrap.Modal.getInstance(document.getElementById('deleteModal')).hide();
        } catch (error) {
            console.error('Error:', error);
            alert('Terjadi kesalahan, silakan coba lagi.');
        }
    });
});

async function loadData() {
    try {
        const response = await fetch('api/read.php');
        const data = await response.json();
        const tbody = document.getElementById('dataMakanan');
        tbody.innerHTML = '';
        data.forEach(item => {
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>${item.id}</td>
                <td>${_.startCase(item.nama)}</td>
                <td>${formattedValue(item.harga)}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editData(${item.id}, '${item.nama}', ${item.harga})">Edit</button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteData(${item.id})">Hapus</button>
                </td>
            `;
            tbody.appendChild(tr);
        });
    } catch (error) {
        console.error('Error:', error);
        alert('Gagal memuat data, silakan coba lagi.');
    }
}

function formattedValue(numericValue){
    let data = new Intl.NumberFormat('id-ID', {style: 'currency', currency: 'IDR',})
    return data.format(numericValue);
}


function editData(id, nama, harga) {
    document.getElementById('makananId').value = id;
    document.getElementById('namaMakanan').value = nama;
    document.getElementById('hargaMakanan').value = harga;
    new bootstrap.Modal(document.getElementById('addModal')).show();
}

function deleteData(id) {
    document.getElementById('confirmDelete').setAttribute('data-id', id);
}
