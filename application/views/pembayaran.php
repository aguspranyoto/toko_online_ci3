<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total belanja anda: Rp. ".number_format($grand_total,0,',','.');
                
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url()?>index.php/dashboard/proses_pesanan">
                    <div class="form-group">
                        <label for="">Nama lengkap</label>
                        <input type="text" name="nama" placeholder="Masukan Nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat lengkap</label>
                        <input type="text" name="alamat" placeholder="Masukan Alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" name="no_telp" placeholder="Masukan Nomor Telepon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jasa Pengiriman</label>
                        <select name="" id="" class="form-control">
                            <option value="">JNE</option>
                            <option value="">TIKI</option>
                            <option value="">POS Indonesia</option>
                            <option value="">JNT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pilih Bank</label>
                        <select name="" id="" class="form-control">
                            <option value="">BNI - 981723</option>
                            <option value="">Mandiri - 9178263</option>
                            <option value="">BRI - 19283</option>
                            <option value="">BCA - 129736</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary mb-3">Kirim</button>
            </form>
            <?php 
            }else{
                echo "<h4>Keranjang Belanja Anda Masih Kosong</h4>";
            }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>