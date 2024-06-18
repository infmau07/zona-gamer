function descargarAPK(nombreArchivo) {
    var archivosAPK = {
        'apk1': 'apks/Terraria.apk',
        'apk2': 'apks/hollow.apk',
        'apk3': 'apks/Fallout Shelter.apk',
        'apk4': 'apk/,apk',
        'apk5': 'apks/Spotify.apk',
        'apk6': 'apks/PVZ3.apk',
      // Agrega más nombres de archivos y rutas según sea necesario para cada página
    };

    var urlAPK = archivosAPK[nombreArchivo];

    if (urlAPK) {
        var enlace = document.createElement('a');
        enlace.href = urlAPK;
        enlace.download = obtenerNombreArchivo(urlAPK);
        enlace.click();
    } else {
        console.error('No se encontró la ruta para el archivo:', nombreArchivo);
    }
}

function obtenerNombreArchivo(url) {
    var partesURL = url.split('/');
    return partesURL[partesURL.length - 1];
}