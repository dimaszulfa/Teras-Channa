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
                    <form id="payment-form" method="post" action="<?= site_url() ?>dashboard/proses_pesanan">
                        <input type="hidden" name="result_type" id="result-type" value="">
                </div>
                <input type="hidden" name="result_data" id="result-data" value="">
            </div>
            </form>
            <form method="post" action="<?= site_url() ?>/snap/finish">
                <div class="btn-lg btn-success">Pembayaran </div> <br><br>

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" disabled name="nama" placeholder="Nama Lengkap anda" class="form-control" value="<?= $this->session->userdata('fullname') ?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" disabled name="alamat" placeholder="Alamat Lengkap anda" class="form-control" value="<?= $this->session->userdata('address') ?>">
                </div>
                <div class="form-group">
                    <label for="">No. Telepon </label>
                    <input type="text" disabled name="no_telp" placeholder="Nomor Telepon Anda" class="form-control" value="<?= $this->session->userdata('nohp') ?>">
                    <h3 style="color:red;">*Apabila anda ingin melakukan perubahan silahkan pergi ke pengaturan</h3>

                </div>


                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option value=""> Pilih Provinsi</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" id="sel2" disabled>
                        <option value=""> Pilih Kota</option>
                    </select>
                </div>
                <form action="<?= base_url() . 'dashboard/ongkir' ?>" class="forms-sample" method="post" enctype="multipart/form-data">
                    <div id="containers" required></div>

                </form>
                <div id="hasil"></div>
                <p id="output"></p>

                <script type="text/javascript">
                    function getLokasi() {
                        var $op = $("#sel1");

                        $.getJSON("provinsi", function(data) {
                            $.each(data, function(i, field) {

                                $op.append('<option value="' + field.province_id + '">' + field.province + '</option>');

                            });

                        });

                    }

                    getLokasi();


                    $("#sel1").on("change", function(e) {
                        e.preventDefault();
                        var option = $('option:selected', this).val();
                        $('#sel2 option:gt(0)').remove();
                        $('#kurir').val('');

                        if (option === '') {
                            alert('null');
                            $("#sel2").prop("disabled", true);
                            $("#kurir").prop("disabled", true);
                        } else {
                            $("#sel2").prop("disabled", false);
                            getKota(option);
                        }
                    });



                    $("#sel2").on("change", function(e) {
                        e.preventDefault();
                        var option = 'tiki';
                        var origin = '22';
                        var des = $("#sel2").val();
                        var qty = '1';

                        if (qty === '0' || qty === '') {
                            alert('null');
                        } else if (option === '') {
                            alert('null');
                        } else {
                            getOrigin(origin, des, qty, option);
                        }
                    });


                    function getOrigin(origin, des, qty, cour) {
                        var $op = $("#hasil");
                        var i, j, x = "";

                        $.getJSON("tarif/" + origin + "/" + des + "/" + qty + "/" + cour, function(data) {
                            $.each(data, function(i, field) {

                                for (i in field.costs) {
                                    x += "<p class='mb-0'><b>" + field.costs[i].service + "</b> : " + field.costs[i].description + "</p>";

                                    for (j in field.costs[i].cost) {
                                        x += field.costs[i].cost[j].value + "<br>" + field.costs[i].cost[j].etd + " Hari<br>" + field.costs[i].cost[j].note;
                                        $('#containers').append(
                                            $('<input>').prop({
                                                type: 'radio',
                                                id: 'kurir',
                                                name: 'kurir',
                                                value: field.costs[i].cost[j].value
                                            })
                                        ).append(
                                            $('<label>').prop({
                                                for: field.costs[i].service
                                            }).html(field.costs[i].cost[j].value + "  ")
                                        )
                                    }

                                }

                                $op.html(x);

                            });
                            $("#pay-button").prop("disabled", false);
                        });

                    }





                    function getKota(idpro) {
                        var $op = $("#sel2");

                        $.getJSON("kota/" + idpro, function(data) {
                            $.each(data, function(i, field) {


                                $op.append('<option value="' + field.city_id + '">' + field.type + ' ' + field.city_name + '</option>');

                            });

                        });

                    }
                </script>


            </form>
            <button type="submit" class="btn btn-primary mb-3" id="pay-button" disabled>Pesan</button>

            <!-- script js buat deteksi value radio button disatukan dengan snap midtrans dibawah-->
            <!-- <script>
        const btn = document.querySelector('#pay-button');        
        const radioButtons = document.getElementsByName('kurir');
        btn.addEventListener("click", () => {
            let selectedSize;
            for (const radioButton of radioButtons) {
                if (radioButton.checked) {
                    selectedSize = parseInt(radioButton.value);
                    break;
                }
            }
            // show the output:
            output.innerText = selectedSize ? `You selected ${selectedSize}` : `You haven't selected any size ` ;
        });
    </script> -->
            <script type="text/javascript">
                        const radioButtons = document.getElementsByName('kurir');
                $('#pay-button').click(function(event) {
                    event.preventDefault();
                    $(this).attr("disabled", "disabled");

                    let selectedSize;
            for (const radioButton of radioButtons) {
                if (radioButton.checked) {
                    selectedSize = parseInt(radioButton.value);
                    break;
                }
            }
            // show the output:
            output.innerText = selectedSize ? `You selected ${selectedSize}` : `You haven't selected any size ` ;
                    $.ajax({
                        url: '<?= site_url() ?>/snap/token',
                        cache: false,

                        success: function(data) {
                            //location = data;

                            console.log('token = ' + data);

                            var resultType = document.getElementById('result-type');
                            var resultData = document.getElementById('result-data');
                            var kurir = document.getElementById('kurir');

                            function changeResult(type, data, kurir) {
                                $("#result-type").val(type);
                                $("#result-data").val(JSON.stringify(data));
                                $("#kurir").val(kurir);
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
            </script> 
            <?php
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