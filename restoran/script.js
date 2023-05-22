// $.getJSON('data/bebek_goreng.json', function (data){
//     console.log(data);
// });
var files = ['data/bebek_goreng.json', 'data/bintang_lima.json', 'data/padang_sederhana.json', 'data/sate_senayan.json', 'data/sushi.json', 'data/warung_tegal.json',];

for (var i = 0; i < files.length; i++) {
  $.getJSON(files[i], function(data) {
    // console.log(data);
    $.each(data, function (i, data){
        $('daftar-restoran').append('<div class="col-md-4 p-3"><div class="card"><img src="img/'+ data.gambar +'" class="card-img-top" height="200"><div class="card-body"><h5 class="card-title">'+ data.nama_restoran +'</h5><p class="card-text">'+ data.lokasi +'</p><a href="menu_restoran1.php?restoran=bintang_lima" class="btn btn-primary">Lihat Menu</a></div></div></div>')
    });
  });
}
