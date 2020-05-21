<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head> <?php include('z_include_head.php'); ?>

</head>


<body class="blue lighten-5">
<?php include('z_include_menu.php'); ?>

<div class="col s6">

	<canvas class="blue" id="canvas1" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas>
	<canvas class="blue" id="canvas2" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas>
	<canvas class="blue" id="canvas3" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas></br>
	<canvas class="blue" id="canvas4" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas>
	<canvas class="blue" id="canvas5" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas>
	<canvas class="blue" id="canvas6" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas></br>
	<canvas class="blue" id="canvas7" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas>
	<canvas class="blue" id="canvas8" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas>
	<canvas class="blue" id="canvas9" width="150" height="150">
		<p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
	</canvas>
</div>
<!--<script type="text/javascript" src="<?=base_url()?>js/ObjectCanvas.js" ></script>-->
<script>
    var currentTab=[];
    $.getJSON('getcampagne', function (data) {
        var Paint = [];
        $.each(data, function (key, paint) {
            Paint.push( [
                    paint.numero,
                    paint.forme,
                    paint.couleur,
                    paint.position,
                    //paint.question,
                ]
            );

            //console.log(Paint);



            if(paint.forme==1){
                var positionA=positionCarré(paint.position)
                var selectcanvas = document.getElementById('canvas'+paint.numero).getContext('2d');
                var color = paint.couleur;
                carre1 = new carre(selectcanvas, 50, color);
                carre1.draw(positionA[0],positionA[1], color);

            }
            else if (paint.forme==2){
                var positionT=positionTriangleD(paint.position)
                //console.log(positionT);
                var selectcanvas = document.getElementById('canvas'+paint.numero).getContext('2d');
                var color = paint.couleur;
                triangle1 = new TriangleD(selectcanvas, color);
                triangle1.draw(positionT[0], positionT[1], positionT[2], positionT[3], positionT[4], positionT[5], color);

            }


        });



    });

</script>

</body>
<?php include('z_include_footer.php'); ?>
</html>


<script>
    function formes(vecteur) {
        switch (vecteur) {
            case '1':
                console.log('carre');
                break;
            case '2':
                console.log('triangle');
                break;
            case '3':
                console.log('cercle');
                break;
            default:
                console.log(`Sorry, we are out of ${expr}.`);
        }
    }
    function positionCarré(VecteurPosi) {
        var x=0;
        var y=0;

        if (VecteurPosi=="100000000") {
            x = 0;
            y = 0;
            return [x,y];

        }
        else if(VecteurPosi=="010000000"){
            x = 50;
            y = 0;

            return [x,y];

        }
        else if(VecteurPosi=="001000000"){
            x = 100;
            y = 0;
            return [x,y];

        }
        if (VecteurPosi=="000100000") {
            x = 0;
            y = 50;
            return [x,y];

        }
        else if(VecteurPosi=="000010000"){
            x = 50;
            y = 50;

            return [x,y];

        }
        else if(VecteurPosi=="000001000"){
            x = 100;
            y = 50;
            return [x,y];

        }

        if (VecteurPosi=="000000100") {
            x = 0;
            y = 100;
            return [x,y];

        }
        else if(VecteurPosi=="000000010"){
            x = 50;
            y = 100;

            return [x,y];

        }
        else if(VecteurPosi=="000000001"){
            x = 100;
            y = 100;
            return [x,y];

        }




    }
    function positionTriangleD(VecteurPosi) {
        var dx=0;
        var dy=0;
        var x1=0;
        var x2=0;
        var y1=0;
        var y2=0;

        if (VecteurPosi=="100000000") {
            dx = 0, dy = 0;
            x1 = 0, y1 = 50;
            x2 = 50, y2 = 50;
            return [dx,dy,x1,y1,x2,y2];

        }
        else if(VecteurPosi=="010000000"){
            dx = 50, dy = 0;
            x1 = 50, y1 = 50;
            x2 = 100, y2 = 50;
            return [dx,dy,x1,y1,x2,y2];

        }
        else if(VecteurPosi=="001000000"){
            dx = 100, dy = 0;
            x1 = 100, y1 = 50;
            x2 = 150, y2 = 50;
            return [dx,dy,x1,y1,x2,y2];

        }
        if (VecteurPosi=="000100000") {
            dx = 0, dy = 50;
            x1 = 0, y1 = 100;
            x2 = 50, y2 = 100;
            return [dx,dy,x1,y1,x2,y2];

        }
        else if(VecteurPosi=="000010000"){
            dx = 50, dy = 50;
            x1 = 50, y1 = 100;
            x2 = 100, y2 = 100;
            return [dx,dy,x1,y1,x2,y2];

        }
        else if(VecteurPosi=="000001000"){
            dx = 100, dy = 50;
            x1 = 100, y1 = 100;
            x2 = 150, y2 = 100;
            return [dx,dy,x1,y1,x2,y2];

        }

        if (VecteurPosi=="000000100") {
            dx = 0, dy = 100;
            x1 = 0, y1 = 150;
            x2 = 50, y2 = 150;
            return [dx,dy,x1,y1,x2,y2];

        }
        else if(VecteurPosi=="000000010"){
            dx = 50, dy = 100;
            x1 = 50, y1 = 150;
            x2 = 100, y2 = 150;
            return [dx,dy,x1,y1,x2,y2];

        }
        else if(VecteurPosi=="000000001"){
            dx = 100, dy = 100;
            x1 = 100, y1 = 150;
            x2 = 150, y2 = 150;
            return [dx,dy,x1,y1,x2,y2];

        }


    }




</script>



<script>
    class carre {
        constructor(context,cote,color){
            this.context=context;
            this.cote=cote;
            this.color=color;
        }

        draw(x,y,color){
            this.context.fillStyle = color;
            this.context.fillRect(x,y,this.cote,this.cote);
        }

        update(x,y,color) {
            //this.context.clearRect(0,0,150,150)
            this.draw(x,y,color)
        }

        updatevide(x,y,color){
            this.context.clearRect(0,0,150,150)
            //this.context.lineWidth  = 5;
            this.context.strokeStyle   = color;
            this.context.strokeRect(x,y,this.cote,this.cote);
        }

    }

    class TriangleD {
        constructor(context,color){
            this.context = context;
            this.color=color;
        }
        draw(dx,dy,x1,y1,x2,y2,color){
            // the triangle
            this.context.beginPath();
            this.context.moveTo(dx,dy);
            this.context.lineTo(x1,y1);
            this.context.lineTo(x2,y2);
            this.context.closePath();

            this.context.fillStyle = color;
            this.context.fill();

        }
        drawvide(dx,dy,x1,y1,x2,y2,color){
            this.context.beginPath();
            this.context.moveTo(dx,dy);
            this.context.lineTo(x1,y1);
            this.context.lineTo(x2,y2);
            this.context.closePath();

            this.context.fillStyle = color;
            this.context.stroke();

        }
    }

    class cercle {
        constructor(context, color, rayon){
            this.context= context;
            this.color= color;
            this.rayon= rayon;
        }
        draw(x,y,color){
            this.context.beginPath();
            this.context.arc(x,y,this.rayon,0,2 * Math.PI,);
            this.context.fillStyle =color;
            this.context.fill();
        }
        drawvide(x,y,color){
            this.context.beginPath();
            this.context.arc(x,y,this.rayon,0,2 * Math.PI);
            this.context.fillStyle =color;
            this.context.stroke();
        }
    }
    /* Canvas*/
    function saveEtat(context){
        context.save();
    }
    function restoreEtat(context) {
        context.restore();

    }

    function canvasSelect() {
        var choixcanvas = document.getElementsByName('group3');
        for (i = 0; i< choixcanvas.length; i++){
            if(choixcanvas[i].checked)
                return  document.getElementById('canvas'+i).getContext('2d');
        }
    }
    function serialisation(question,id ) {

        var package =    "question="+question+
            "&ident="+id+
            "&canvas0="+document.getElementById('canvas0').toDataURL()+
            "&canvas1="+document.getElementById('canvas1').toDataURL()+
            "&canvas2="+document.getElementById('canvas2').toDataURL()+
            "&canvas3="+document.getElementById('canvas3').toDataURL()+
            "&canvas4="+document.getElementById('canvas4').toDataURL()+
            "&canvas5="+document.getElementById('canvas5').toDataURL()+
            "&canvas6="+document.getElementById('canvas6').toDataURL()+
            "&canvas7="+document.getElementById('canvas7').toDataURL()+
            "&canvas8="+document.getElementById('canvas8').toDataURL();
        return package;
    }

</script>
