<table class="table table-striped table-bordered">
    <caption>Daftar order-an yang belum dilayani: </caption>
    <thead>
        <th>#</th>
        <th>Nama</th>
        <th>ID Order | Banyaknya</th>
        <th>Tgl Order</th>
        <th colspan="2">Opsi</th>
    </thead>
    <tbody>
    <?php for($a=1; $a<8; $a++){ ?>
    <tr>
        <td><strong><?php echo $a; ?></strong></td>
        <td>Albert Septiawan</td>
        <td><a title="Klik untuk mengetahui detail produk yang di order." href="#"><span class="badge">2356</span> | 2pcs</a></td>
        <td>14 Februari 2013</td>
        <td><a title="tandai bahwa Order-an ini sedang diproses" href="#" class="btn"> Akan diproses</a></td>
        <td><a title="Klik jika Order-an ini sudah selesai dilayani" href="#" class="btn btn-success"> Selesaikan</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
