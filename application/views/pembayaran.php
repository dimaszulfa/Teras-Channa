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

                        <?php
                        $grand_total = 0;
                        if ($keranjang = $this->cart->contents()) {
                            foreach ($keranjang as $item) {
                                $grand_total = $grand_total + $item['subtotal'];
                            }
                        ?>
                            <br><br>

                    </div>
                    <form id="payment-form" method="post" action="<?=site_url()?>dashboard/proses_pesanan">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>
                    <form method="post" action="<?=site_url()?>/snap/finish">
                    <div class="btn-lg btn-success">Pembayaran </div> <br><br>

                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" disabled name="nama" placeholder="Nama Lengkap anda" class="form-control" value="<?= $this->session->userdata('fullname')?>">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <input type="text" disabled name="alamat" placeholder="Alamat Lengkap anda" class="form-control" value="<?= $this->session->userdata('address')?>">
                        </div>
                        <div class="form-group">
                            <label for="">No. Telepon </label>
                            <input type="text" disabled name="no_telp" placeholder="Nomor Telepon Anda" class="form-control" value="<?= $this->session->userdata('nohp')?>">
                            <h3 style="color:red;">*Apabila anda ingin melakukan perubahan silahkan pergi ke pengaturan</h3>

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