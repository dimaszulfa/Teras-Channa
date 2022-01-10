const flashData = $('.flash-data').data('flashdata');
if (flashData){
    Swal.fire(
        'Berhasil!',
        'Data berhasil ' + flashData,
        'success'
      )
}

//tombol hapus
$('.tombol-hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, saya yakin!'
      }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        //   Swal.fire(
        //     'Terhapus!',
        //     'Data yang anda pilih telah berhasil dihapus.',
        //     'success'
        //   )
        }
      })
});


$(function() {
  $('.pop').on('click', function() {
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#imagemodal').modal('show');   
  });		
});