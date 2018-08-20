function uploadEnd(error, path) {
	if (error === 'OK') {
		document.getElementById('uploadStatus').innerHTML = '<ahref="' + path + '">Upload done !</a><br /><br /><a href="' + path +
		'"><img src="' + path + '" /></a>';
	} 
	else {
		document.getElementById('uploadStatus').innerHTML = error;
	}
} 
	document.getElementById('uploadForm').addEventListener('submit',
	function() {
	document.getElementById('uploadStatus').innerHTML ='Loading...';
}, true);