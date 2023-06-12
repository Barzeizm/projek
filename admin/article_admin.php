<div class="dashboard-kanan">

    <div class="article-admin">
        <?php
            $sql = "SELECT * FROM tb_artikel order by id_artikel ASC";
            $hasil = mysqli_query($koneksi, $sql);

            $artikel = mysqli_num_rows($hasil);
            while($row = mysqli_fetch_array($hasil)){
        ?>
            <div class="card">
                <img src="../assets/<?= $row['gambar_artikel']?>" alt="">
                <div class="judul-artikel">
                    <?php 
                        $judul_artikel = $row['judul_artikel'];
                        $potongan_judul = substr($judul_artikel, 0, 64);
                        echo "<h2>$potongan_judul</h2>"
                    ?>
                </div>
                <div class="isi-artikel">
                     <?php 
                        $isi_artikel = $row['isi_artikel'];
                        $potongan_isi = substr($isi_artikel, 0, 64 );
                        echo "<p>$potongan_isi</p>"
                     ?>
                </div>
                
                <div class="card-btn">
                    <a href="article.php?halaman=article&id=<?= $row['id_artikel'];?>">Lihat Artikel</a>
                </div>                
            </div>
        <?php
                }
        ?>
    </div>

</div>