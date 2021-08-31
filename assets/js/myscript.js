// untuk edit kategori
$(document).on("click", ".modal_edit_kategori", function () {
    let id = $(this).data('id')
    $.ajax({
        url: "http://localhost/claris_store/admin/data_kategori/edit",
        data: {
            id: id
        },
        method: "POST",
        dataType: "json",
        success: function (data) {
            console.log(data)
            $("#nama_kategori").val(data.nama_kategori).text(data.nama_kategori)
            $("#id_kategori").val(data.id_kategori).text(data.nama_kategori)
        }
    })
})

$(document).ready(function () {
    $('[data-toggle="popover"]').popover();
});