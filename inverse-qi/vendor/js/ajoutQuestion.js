
class carre {
	constructor(context, cote, color) {
		this.context = context;
		this.cote = cote;
		this.color = color;
	}

	draw(x, y, color) {
		this.context.fillStyle = color;
		this.context.fillRect(x, y, this.cote, this.cote);
	}

	update(x, y, color) {
		//this.context.clearRect(0,0,150,150)
		this.draw(x, y, color)
	}

	updatevide(x, y, color) {
		this.context.clearRect(0, 0, 150, 150)
		//this.context.lineWidth  = 5;
		this.context.strokeStyle = color;
		this.context.strokeRect(x, y, this.cote, this.cote);
	}

}

class TriangleD {
	constructor(context, color) {
		this.context = context;
		this.color = color;
	}

	draw(dx, dy, x1, y1, x2, y2, color) {
		// the triangle
		this.context.beginPath();
		this.context.moveTo(dx, dy);
		this.context.lineTo(x1, y1);
		this.context.lineTo(x2, y2);
		this.context.closePath();

		this.context.fillStyle = color;
		this.context.fill();

	}

	drawvide(dx, dy, x1, y1, x2, y2, color) {
		this.context.beginPath();
		this.context.moveTo(dx, dy);
		this.context.lineTo(x1, y1);
		this.context.lineTo(x2, y2);
		this.context.closePath();

		this.context.fillStyle = color;
		this.context.stroke();

	}
}

class cercle {
	constructor(context, color, rayon) {
		this.context = context;
		this.color = color;
		this.rayon = rayon;
	}

	draw(x, y, color) {
		this.context.beginPath();
		this.context.arc(x, y, this.rayon, 0, 2 * Math.PI,);
		this.context.fillStyle = color;
		this.context.fill();
	}

	drawvide(x, y, color) {
		this.context.beginPath();
		this.context.arc(x, y, this.rayon, 0, 2 * Math.PI);
		this.context.fillStyle = color;
		this.context.stroke();
	}
}

/* Canvas*/
function saveEtat(context) {
	context.save();
}

function restoreEtat(context) {
	context.restore();

}

function canvasSelect() {
	var choixcanvas = document.getElementsByName('group3');
	for (i = 0; i < choixcanvas.length; i++) {
		if (choixcanvas[i].checked)
			return document.getElementById('canvas' + i).getContext('2d');
	}
}

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
		"&canvas8=" + document.getElementById('canvasq').toDataURL() +
		"&canvas9=" + document.getElementById('canvas8').toDataURL() +
		"&canvas10=" + document.getElementById('canvas9').toDataURL() +
		"&canvas11=" + document.getElementById('canvas10').toDataURL() +
		"&canvas12=" + document.getElementById('canvas11').toDataURL() +
		"&canvas13=" + document.getElementById('canvas12').toDataURL() +
		"&canvas14=" + document.getElementById('canvas13').toDataURL();

	return package;
}


function initialize() {

	var ctx = document.getElementById('canvasq').getContext('2d');
	ctx.font = '150px serif';
	ctx.fillText('?', 38, 120);

	var left = document.getElementById('left');
	var down = document.getElementById('down');
	var right = document.getElementById('right');
	var up = document.getElementById('up');
	var NbreclickAjoutCarre = 0;
	var NbreclickAkoutTriangle = 0;
	var NbreclickAjoutCercle = 0;

	//variable d'initiation du carré
	var x = 0;
	var y = 0;
	//variable du Triangle
	var dx = 0, dy = 0;
	var x1 = 0, y1 = 50;
	var x2 = 50, y2 = 50;
	//Variable du cercle
	var c1 = 25, c2 = 25;

	var color = "black";


	//var selectcanvas=canvasSelect();
	var selectcanvas = canvasSelect();
	buttoradio.onchange = function () {
		selectcanvas = canvasSelect();
		//console.log(choix);
	};


	ajouterC.onclick = function () {
		NbreclickAjoutCarre += 1;
		if (NbreclickAjoutCarre == 1) {
			//window.alert(Nbreclick);
			selectcanvas.save();
			carre1 = new carre(selectcanvas, 50, color);
			carre1.draw(x, y, color);


		} else {
			console.log("je sui")
			//context1.save();
			//context1.restore();
			x = 0;
			y = 0;
			carre1 = new carre(selectcanvas, 50, color);
			carre1.draw(x, y, color);

			//context1.restore();

		}

		left.onclick = function () {
			if (x > 0) {
				selectcanvas.clearRect(x, y, 50, 50);
				x -= 50;
				carre1.draw(x, y, color);
			}

		};
		right.onclick = function () {
			if (x < 100) {
				console.log(x);
				selectcanvas.clearRect(x, y, 50, 50);
				x += 50;
				carre1.draw(x, y, color);
			}
		};
		down.onclick = function () {
			if (y < 100) {
				selectcanvas.clearRect(x, y, 50, 50);
				y += 50;
				carre1.draw(x, y, color);
			}
		};
		up.onclick = function () {
			if (y > 0) {
				selectcanvas.clearRect(x, y, 50, 50);
				y -= 50;
				carre1.draw(x, y, color);
			}
		};
		Bluecolor.onclick = function () {
			color = "blue"
			carre1.draw(x, y, color);
		};
		Redcolor.onclick = function () {
			color = "Red"
			carre1.draw(x, y, color);
		};
		Carrevide.onclick = function () {
			carre1.updatevide(x, y, color);
		};
		Carrerempli.onclick = function () {
			carre1.update(x, y, color);
		};


	};
	ajouterT.onclick = function () {
		NbreclickAkoutTriangle += 1;
		if (NbreclickAkoutTriangle == 1) {
			dx = 0, dy = 0;
			x1 = 0, y1 = 50;
			x2 = 50, y2 = 50;
			selectcanvas.save();
			triangle1 = new TriangleD(selectcanvas, color);
			triangle1.draw(dx, dy, x1, y1, x2, y2, color);
		} else {
			//console.log("je sui")
			dx = 0, dy = 0;
			x1 = 0, y1 = 50;
			x2 = 50, y2 = 50;

			triangle1 = new TriangleD(selectcanvas, color);
			triangle1.draw(dx, dy, x1, y1, x2, y2, color);
		}
		left.onclick = function () {
			if (dx > 0) {
				selectcanvas.clearRect(dx, dy, 50, 50);
				dx -= 50;
				x1 -= 50;
				x2 -= 50;
				triangle1.draw(dx, dy, x1, y1, x2, y2, color);
			}
		};
		right.onclick = function () {
			if (dx < 100) {
				selectcanvas.clearRect(dx, dy, 50, 50);
				dx += 50;
				x1 += 50;
				x2 += 50;
				triangle1.draw(dx, dy, x1, y1, x2, y2, color);
			}
		};
		up.onclick = function () {
			if (dy > 0) {
				selectcanvas.clearRect(dx, dy, 50, 50);
				dy -= 50;
				y1 -= 50;
				y2 -= 50;
				triangle1.draw(dx, dy, x1, y1, x2, y2, color);
			}
		};
		down.onclick = function () {
			if (dy < 100) {
				selectcanvas.clearRect(dx, dy, 50, 50);
				dy += 50;
				y1 += 50;
				y2 += 50;
				triangle1.draw(dx, dy, x1, y1, x2, y2, color);
			}
		};
		Bluecolor.onclick = function () {
			selectcanvas.clearRect(dx, dy, 50, 50);
			color = "blue"
			triangle1.draw(dx, dy, x1, y1, x2, y2, color);
		};
		Redcolor.onclick = function () {
			selectcanvas.clearRect(dx, dy, 50, 50);
			color = "Red"
			triangle1.draw(dx, dy, x1, y1, x2, y2, color);
		};
		Carrevide.onclick = function () {
			selectcanvas.clearRect(dx, dy, 50, 50);
			triangle1.drawvide(dx, dy, x1, y1, x2, y2, color);
		};
		Carrerempli.onclick = function () {
			selectcanvas.clearRect(dx, dy, 50, 50);
			triangle1.draw(dx, dy, x1, y1, x2, y2, color);
		};

	};

	ajouterCI.onclick = function () {
		NbreclickAjoutCercle += 1;
		if (NbreclickAjoutCercle == 1) {
			console.log("jej");
			selectcanvas.save();
			c1 = 25;
			c2 = 25;
			cercle1 = new cercle(selectcanvas, color, 25);
			cercle1.draw(c1, c2, color);
		} else {
			//console.log("je sui")
			c1 = 25;
			c2 = 25;
			cercle1 = new cercle(selectcanvas, color, 25);
			cercle1.draw(c1, c2, color)
		}
		left.onclick = function () {
			if (c1 > 25) {
				//c2+=50;
				selectcanvas.clearRect(c1 - 25, c2 - 25, 50, 50);
				c1 -= 50;
				cercle1.draw(c1, c2, color);
			}
		};
		right.onclick = function () {
			if (c1 < 125) {
				selectcanvas.clearRect(c1 - 25, c2 - 25, 50, 50);
				c1 += 50;
				cercle1.draw(c1, c2, color);
			}
		};
		up.onclick = function () {
			if (c2 > 25) {
				selectcanvas.clearRect(c1 - 25, c2 - 25, 50, 50);
				c2 -= 50;
				cercle1.draw(c1, c2, color);
			}
		};
		down.onclick = function () {
			if (c2 < 125) {
				selectcanvas.clearRect(c1 - 25, c2 - 25, 50, 50);
				c2 += 50;
				cercle1.draw(c1, c2, color);
			}

		}
		Bluecolor.onclick = function () {
			selectcanvas.clearRect(c1 - 25, c2 - 25, 50, 50);
			color = "blue"
			cercle1.draw(c1, c2, color);
		};
		Redcolor.onclick = function () {
			selectcanvas.clearRect(c1 - 25, c2 - 25, 50, 50);
			color = "Red"
			cercle1.draw(c1, c2, color);
		};
		Carrevide.onclick = function () {
			selectcanvas.clearRect(c1 - 25, c2 - 25, 50, 50);
			cercle1.drawvide(c1, c2, color);
		};
		Carrerempli.onclick = function () {
			selectcanvas.clearRect(c1 - 25, c2 - 25, 50, 50);
			cercle1.draw(c1, c2, color);
		};
	};


	envoyer.onclick = function () {
		//window.alert('eke')
		var question = document.getElementById('IQquestion').value;
		var ID = '_' + Math.random().toString(36).substr(2, 9);
		var data = serialisation(question, ID);
		//console.log(data);

		$.ajax({
			type: "POST",
			url: window.location.origin+"/index.php/Question/saveV",
			data: data,
		}).success(function (o) {
			//console.log(question);
			document.location.href=window.location.origin+"/index.php/question";
		});

	}


}

