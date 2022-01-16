<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Download Laporan Transaksi</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1 class="text-center bg-info">Data Transaksi</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Tipe Pembayaran</th>
                <th>Bank</th>
                <th>Alamat</th>
                <th>Status Transaksi</th>
                <th>Waktu Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($transaksi as $inv) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?php echo $inv->username ?></td>
                    <td><?php echo $inv->fullname ?></td>
                    <td><?php echo $inv->payment_type ?></td>
                    <td><?php echo $inv->bank ?></td>
                    <td><?php echo $inv->address ?></td>
                    <td><?php
                        if ($inv->transaction_status == 'expire') {
                            echo '<label class="badge badge-danger">Expire</label>';
                        } elseif ($inv->transaction_status == 'settlement') {
                            echo '<label class="badge badge-success" style="color: #fff;
        background-color: #57B657;">Settlement</label>';
                        } elseif ($inv->transaction_status == 'pending') {
                            echo '<label class="badge badge-warning">Pending</label>';
                        } ?>
                    </td>
                    <td><?php echo $inv->transaction_time ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>