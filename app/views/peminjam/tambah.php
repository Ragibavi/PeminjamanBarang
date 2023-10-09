<div class="container">
    <h3 class="hb-3">Tambah Peminjam</h3>
    <form action="<?= BASE_URL ?>/peminjam/simpanPeminjam" method="post">
    <div class="class-body">
        <div class="form-group mb-3">
            <label for="nama_peminjam">Nama Peminjam</label>
            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
        </div>
        <div class="form-group mb-3">
            <label for="jenis_barang">Jenis Barang</label>
            <input type="text" class="form-control" id="jenis_barang" name="jenis_barang">
        </div>
        <div class="form-group mb-3">
            <label for="nomor_barang">Nomor Barang</label>
            <input type="number" class="form-control" id="nomor_barang" name="nomor_barang">
        </div>
        <div class="form-group mb-3">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="datetime-local" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Tambahkan Data ?')">Submit</button>
    </div>
</form>
</div>