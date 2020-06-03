

function serialisation(question, id) {

	var package = "question=" + question +
		"&ident=" + id +
		"&canvas0=" + document.getElementById('canvas0').toDataURL() +
		"&canvas1=" + document.getElementById('canvas1').toDataURL() +
		"&canvas2=" + document.getElementById('canvas2').toDataURL() +
		"&canvas3=" + document.getElementById('canvas3').toDataURL() +
		"&canvas4=" + document.getElementById('canvas4').toDataURL() +
		"&canvas5=" + document.getElementById('canvas5').toDataURL() +
		"&canvas6=" + document.getElementById('canvas6').toDataURL() +
		"&canvas7=" + document.getElementById('canvas7').toDataURL() +
		"&canvas9=" + document.getElementById('canvas9').toDataURL() +
		"&canvas10=" + document.getElementById('canvas10').toDataURL() +
		"&canvas11=" + document.getElementById('canvas11').toDataURL() +
		"&canvas12=" + document.getElementById('canvas12').toDataURL() +
		"&canvas13=" + document.getElementById('canvas13').toDataURL() +
		"&canvas14=" + document.getElementById('canvas14').toDataURL();

	return package;
}


function initialize() {

    var ctx = document.getElementById('canvas8').getContext('2d');
	ctx.font = '150px serif';
	ctx.fillText('?', 38, 120);

	enregistrer.onclick = function () {
		//window.alert('eke')
		var question = document.getElementById('IQquestion').innerText;
		var ID = '_' + Math.random().toString(36).substr(2, 9);
		var data = serialisation(question, ID);
		//console.log(data);

		$.ajax({
			type: "POST",
			url: window.location.origin+"/index.php/Question/create",
			data: data,
		    success:function (o) {
                //console.log(question);
                document.location.href=window.location.origin+"/index.php/question/generate";
            }
		});

	}


}

