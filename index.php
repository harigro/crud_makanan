<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Makanan</title>
    <link href="bs.5.3.3/bootstrap.min.css" rel="stylesheet">
    <script src="bs.5.3.3/bootstrap.bundle.min.js" defer></script>
    <script src="bs.5.3.3/js/script.js" defer></script>
</head>
<body>
    <div class="container mt-5">
        <h2>CRUD Data Makanan</h2>
        <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Makanan</button>

        <!-- Tabel -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Makanan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="dataMakanan">
                <!-- Data akan dimuat dengan AJAX -->
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah/Edit -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah/Edit Makanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="formMakanan">
                        <input type="hidden" id="makananId">
                        <div class="mb-3">
                            <label for="namaMakanan" class="form-label">Nama Makanan</label>
                            <input type="text" id="namaMakanan" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="hargaMakanan" class="form-label">Harga</label>
                            <input type="number" id="hargaMakanan" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" id="confirmDelete" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>