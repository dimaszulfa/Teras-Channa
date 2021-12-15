<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>Keranjang Belanja</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="btn-lg btn-success">Pembayaran </div>

                        <?php
                        $grand_total = 0;
                        if ($keranjang = $this->cart->contents()) {
                            foreach ($keranjang as $item) {
                                $grand_total = $grand_total + $item['subtotal'];
                            }
                            echo "Total Belanja Anda : Rp. " . number_format($grand_total, 0, ",", ".");
                        ?>
                            <br><br>
                            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

                    </div>
                    <form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>
                    <form method="post" action="<?=site_url()?>/snap/finish">
                        <div class="form-group">
                            <label for="">Telepon Lengkap</label>
                            <input type="text" name="nama" placeholder="Nama Lengkap anda" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <input type="text" name="alamat" placeholder="Alamat Lengkap anda" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No. Telepon </label>
                            <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jasa Pengiriman</label>
                            <select>
                                <option>JNE</option>
                                <option>TIKI</option>
                                <option>POS Indonesia</option>
                                <option>GOJEK</option>
                                <option>GRAB</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pilih BANK</label>
                            <select>
                                <option>BCA - XXXX</option>
                                <option>BNI - XXXX</option>
                                <option>BRI - XXXX</option>
                                <option>MANDIRI - XXXX</option>
                            </select>
                        </div>
                    </form>
                    <button  type="submit" class="btn btn-primary mb-3" id="pay-button">Pesan</button>

                    <script type="text/javascript">
                        $('#pay-button').click(function(event) {
                            event.preventDefault();
                            $(this).attr("disabled", "disabled");

                            $.ajax({
                                url: '<?= site_url() ?>/snap/token',
                                cache: false,

                                success: function(data) {
                                    //location = data;

                                    console.log('token = ' + data);

                                    var resultType = document.getElementById('result-type');
                                    var resultData = document.getElementById('result-data');

                                    function changeResult(type, data) {
                                        $("#result-type").val(type);
                                        $("#result-data").val(JSON.stringify(data));
                                        //resultType.innerHTML = type;
                                        //resultData.innerHTML = JSON.stringify(data);
                                    }

                                    snap.pay(data, {

                                        onSuccess: function(result) {
                                            changeResult('success', result);
                                            console.log(result.status_message);
                                            console.log(result);
                                            $("#payment-form").submit();
                                        },
                                        onPending: function(result) {
                                            changeResult('pending', result);
                                            console.log(result.status_message);
                                            $("#payment-form").submit();
                                        },
                                        onError: function(result) {
                                            changeResult('error', result);
                                            console.log(result.status_message);
                                            $("#payment-form").submit();
                                        }
                                    });
                                }
                            });
                        });
                    </script> <?php
                            } else {
                                echo "Keranjang Belanja Anda Masih Kosong";
                            }
                                ?>
                <div class="col-md-2"></div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>