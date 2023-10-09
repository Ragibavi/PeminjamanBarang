 <div class="container">
    <h3 class="mb-3">Edit Peminjam : <?= $data['peminjam']['nama_peminjam']; ?></h3>
    <form action="<?= BASE_URL ?>/peminjam/updatePeminjam" method="post">
        <div class="class-body">
            <input type="hidden" name='id' value="<?= $data['peminjam']['id']; ?>">
            <div class="form-group mb-3">
                <label for="nama_peminjam">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required value="<?= $data['peminjam']['nama_peminjam']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="jenis_barang">Jenis Barang</label>
                <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" required value="<?= $data['peminjam']['jenis_barang']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="nomor_barang">Nomor Barang</label>
                <input type="number" class="form-control" id="nomor_barang" name="nomor_barang" required value="<?= $data['peminjam']['nomor_barang']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required value="<?= $data['peminjam']['tanggal_pinjam']; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="datetime-local" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required value="<?= $data['peminjam']['tanggal_kembali']; ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Edit Data ?')">Submit</button>
        </div>
    </form>
</div>
