<div class="hero-wrap hero-bread"
    style="background-image: url('<?=base_url().'views/themes/'.theme_active().'/';?>images/image6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url();?>">Beranda</a></span>&gt;
                    <span>Pengiriman</span>
                </p>
                <h1 class="mb-0 bread">Pesanan Dalam Pengiriman</h1>
                <a href="<?=base_url('user'); ?>" class="btn btn-primary mt-3">Kembali</a> <!-- Tombol Kembali -->
            </div>
        </div>
    </div>
</div>
<section class="ftco-section contact-section bg-white">
    <div class="container">
        <div class="row block-9 table-responsive" style="overflow:scroll; height:400px;width:100%;">
            <table class="table">
                <thead class="thead-primary">
                    <tr class="text-center">
                        <th>Order ID</th>
                        <th>No Resi</th>
                        <th>Tanggal</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Kurir</th>
                        <th>Status Pembayaran</th>
                        <th>Status Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // function orderan($user_id, $status)
                    // {
                    //     // Mengganti SELECT * menjadi mencakup kolom yang diinginkan
                    //     $sql = "SELECT pesanan.code, pesanan.datetime, detail_order.qty, detail_order.harga, pembayaran.status_bayar, pesanan.status
                    //             FROM pesanan
                    //             LEFT JOIN detail_order ON detail_order.order_id = pesanan.idorder
                    //             LEFT JOIN pembayaran ON pembayaran.order_id = pesanan.idorder
                    //             WHERE pesanan.user_id = ? AND pesanan.status = ?";
                        
                    //     // Menjalankan query dan mengganti placeholder dengan parameter yang benar
                    //     $result = $this->db->query($sql, array($user_id, $status))->result();
                        
                    //     return $result;
                    // }
					foreach(orderan(user()['idusers'],'pengiriman') as $o):?>
                    <tr class="text-center">
                        <td><?=$o->code;?></td>
                        <td style="color:red;"><?=$o->no_resi;?></td>
                        <td><?=date('Y-m-d H:i:s',$o->datetime);?></td>
                        <td><?=money($o->qty);?></td>
                        <td><?=money($o->harga*$o->qty);?></td>
                        <td><?=$o->order_kurir;?></td>
                        <td><?=$o->status_bayar;?></td>
                        <td><?=$o->status;?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</section>
