<!DOCTYPE html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta charset="utf-8">
  <title>Download Invoice</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <h1 class="text-center bg-info">Data Invoice</h1>
  <center>
    <h4 class="card-title">
      <div class="btn-success">No. Invoice: <?= $invoice->order_id ?></div>
    </h4>
    <h6>Nama Lengkap : <?= $invoice->nama ?></h6>
    <h6>Alamat : <?= $invoice->alamat ?></h6>
    <h6>Status Transaksi : <?= $invoice->tgl_pesan ?></h6>
  </center>
  <table class="table table-striped table-hover">

    <thead>
      <tr>
        <th>No</th>
        <th>Nama Ikan</th>
        <th>Jumlah</th>
        <th>Harga satuan</th>
        <th>Sub-total</th>
      </tr>
    </thead>
    <tbody>
      <?php $total = 0;
      $no = 1;
      foreach ($pesanan as $psn) : $subtotal = $psn->jumlah * $psn->harga;
        $total += $subtotal; ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $psn->nama ?></td>
          <td><?php echo $psn->jumlah ?></td>
          <td><?php echo number_format($psn->harga, 0, ',', '.') ?></td>
          <td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td colspan="4" align="right">Grand Total</td>
        <td align="left">Rp. <?= number_format($total, 0, ',', '.') ?></td>
      </tr>
    </tbody>
  </table>
</body>

</html>