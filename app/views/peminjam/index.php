<div class="container">
    <h3 class="mb-3">Daftar Peminjam</h3>
    <br>
    <a href="<?= BASE_URL ?>/peminjam/tambah" class="btn btn-primary">Tambah Data Peminjam</a>
    <br>
    <br>
    <div class="input-group mb-3">
        <input type="text" id="searchInput" class="form-control mb-2" placeholder="Cari Peminjam...">
        <div class="input-group-append">
            <button id="resetButton" class="btn btn-danger" type="button">Reset</button>
        </div>
    </div>
    <table class="table table-success table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data['peminjam'] as $row) : ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $row['nama_peminjam']; ?></td>
                    <td><?= $row['jenis_barang']; ?></td>
                    <td><?= $row['nomor_barang']; ?></td>
                    <td><?= $row['tanggal_pinjam']; ?></td>
                    <td> <?php if ($row['tanggal_kembali'] == "0000-00-00 00:00:00") {
                                $tanggal_kembali = new DateTime($row['tanggal_pinjam']);
                                $tanggal_kembali->modify('+2 days');
                                echo $tanggal_kembali->format('Y-m-d H:i:s');
                            } else {
                                echo $row['tanggal_kembali'];
                            } ?>
                    </td>
                    <td> <?php if ($row['tanggal_kembali'] == "0000-00-00 00:00:00") {
                                echo '<p  class="btn btn-danger btn disabled">Belum Kembali</p>';
                            } else {
                                echo '<p  class="btn btn-success btn disabled">Sudah Kembali</p>';
                            } ?></td>
                    <td>
                        <?php
                        if ($row['tanggal_kembali'] == "0000-00-00 00:00:00") {
                            echo '<a href="' . BASE_URL . '/peminjam/edit/' . $row['id'] . '"' . 'class="btn btn-primary">Edit</a>';
                        }
                        ?>
                        <a href="<?= BASE_URL ?>/peminjam/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data ?')">Hapus</a>
                    </td>
                </tr>
            <?php $no++;
            endforeach ?>
        </tbody>
    </table>
</div>
<script src="<?= BASE_URL ?>/js/main.js"></script>