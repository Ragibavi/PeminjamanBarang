<?php 

class PeminjamModel {

    private $table = 'tb_peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeminjam()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPeminjamById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPeminjam($data)
    {
        $query = 'INSERT INTO tb_peminjaman (nama_peminjam, jenis_barang, nomor_barang, tanggal_pinjam)
         VALUES(:nama_peminjam, :jenis_barang, :nomor_barang, :tanggal_pinjam)';
        $this->db->query($query);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('nomor_barang', $data['nomor_barang']);
        $this->db->bind('tanggal_pinjam', $data['tanggal_pinjam']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataPeminjam($data)
    {
        $query = 'UPDATE tb_peminjaman SET nama_peminjam=:nama_peminjam, jenis_barang=:jenis_barang, nomor_barang=:nomor_barang, tanggal_pinjam=:tanggal_pinjam, tanggal_kembali=:tanggal_kembali WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama_peminjam', $data['nama_peminjam']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('nomor_barang', $data['nomor_barang']);
        $this->db->bind('tanggal_pinjam', $data['tanggal_pinjam']);
        $this->db->bind('tanggal_kembali', $data['tanggal_kembali']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deletePeminjam($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }


}