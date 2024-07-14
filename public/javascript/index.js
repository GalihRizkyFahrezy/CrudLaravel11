console.log("test js");
//cek url. jika ada search maka slider akan disembunyikan


//cek size foto. jika lebih besar dari 500kb maka akan dihentikan
document.getElementById("fotodiv").style.display = "none";

document.getElementById('formupload').addEventListener('submit', function(event) {
    var fotoberita = document.getElementById('fotoberita');
    var foto = fotoberita.files[0];
    
    var fotosize = foto.size;
    var maxsize = 100 * 1024;
    
    if (fotosize > maxsize)
    {
        document.getElementById("fotodiv").style.display = "block";
        document.getElementById("fotoalert").innerHTML = "Foto tidak boleh lebih dari 100kb";
        event.preventDefault();
    }
});