// konfigursi webcam
Webcam.set({
	width: 180,
	height: 135,
	image_format: 'jpg',
	jpeg_quality: 100
});
Webcam.attach( '#camera' );

function preview() {
	// untuk preview gambar sebelum di upload
	Webcam.freeze();
	// ganti display webcam menjadi none dan simpan menjadi terlihat
	document.getElementById('webcam').style.display = 'none';
	document.getElementById('simpan').style.display = '';
}

function batal() {
	// batal preview
	Webcam.unfreeze();
	
	// ganti display webcam dan simpan seperti semula
	document.getElementById('webcam').style.display = '';
	document.getElementById('simpan').style.display = 'none';
}

function change() {
	document.getElementById('content-webcam').style.display = '';
	document.getElementById('image-file').style.display = 'none';
	document.getElementById('btnChange').style.display = 'none';
}

function simpan() {
	// ambil foto
	Webcam.snap( function(data_uri) {
		
		// upload foto
		Webcam.upload( data_uri, 'user/Upload?userid='+$("#UserID").val(), function(code, text) {} );
		Webcam.unfreeze();
	} );
}