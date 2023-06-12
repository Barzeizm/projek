<link rel="stylesheet" href="../css/admin.css">

<div class="dashboard-kanan">
    <h2>Tambahkan Artikel</h2>
    <form method="POST" action="../crud/proc_tambah.php" enctype="multipart/form-data">
        <div class="article-tambah">
            <input class="inp-judul" type="text" name="judul_artikel" id="" placeholder="Isi Judul"><br>
            <div class="file-article">
                <input  type="file" name="gambar_artikel" id="">
            </div> <br>
            <textarea class="inp-isi" name="isi_artikel" id="" cols="30" rows="10" placeholder="Isi Konten Artikel"></textarea> <br>
            <input type="submit" value="Tambahkan">
        </div>
    </form>
</div>