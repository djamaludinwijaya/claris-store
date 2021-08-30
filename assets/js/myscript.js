$(document).on("click", ".modal_detail_barang", function () {
    let id = $(this).data('id')

    $.ajax({
        url: "http://localhost/toko_online/admin/data_barang/detail",
        data: {
            id: id
        },
        method: "POST",
        dataType: "json",
        success: function (data) {
            console.log(data)
            $("#modal_detail_gambar").attr('src', "http://localhost/toko_online/uploads/" + data.gambar).fadeIn()
            $("#modal_detail_nama").html(data.nama_brg)
            $("#modal_detail_keterangan").html(data.keterangan)
            $("#modal_detail_kategori").html(data.kategori)
            $("#modal_detail_stok").html(data.stok)
            $("#modal_detail_harga").html(data.harga)
        }
    })
})