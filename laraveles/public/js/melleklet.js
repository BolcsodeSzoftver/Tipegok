function Export2Word(element, filename = '') {
	var html =
		"<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'></title></head><body>";

	var footer = '</body></html>';
	var html = html + document.getElementById(element).innerHTML + footer;
	var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
	filename = filename ? filename + '.doc' : 'document.doc';
	var downloadLink = document.createElement('a');
	document.body.appendChild(downloadLink);
	downloadLink.href = url;
	downloadLink.download = filename;
	downloadLink.click();
	document.body.removeChild(downloadLink);
}

function printDiv() {
	window.print();
}
