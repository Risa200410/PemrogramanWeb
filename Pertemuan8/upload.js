$(document).ready(function(){
    $('#file').change(function(){
        // memeriksa apakah ada file yang dipilih
        if (this.files.length > 0){
            // mengaktifkan tombol unggah dan mengatur opasitasnya menjadi 1
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            // menonaktifkan tombol unggah dan mengatur opasitasnya menjadi 0.5
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function(e){  // menambahkan event listener dengan id upload_form untuk pengiriman form
        e.preventDefault(); // parameter yang mewakili pengiriman form

        var formData=new FormData(this); // membuat objek yang mengandung data form yang akan dikirimkan

        $.ajax({
            type: 'POST', // metode mengirimkan data
            url: 'upload_ajax.php', // url tempat untuk tempat mengirim data
            data: formData, // data yang akan dikirim
            cache: false, // menonaktifkan cache
            contentType: false, //membuat tipe konten menjadi false
            processData: false, // data yang dikirimkan tidak perlu diproses
            success: function(response){ //dijalankan ketika AJAX berhasil, response akan menjadi parameter
                $('#status').html(response); 
            },
            error: function(){ //jika mengalami kesalahan, akan menyampaikan pesan kesalahan di id status
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        })
    })
})