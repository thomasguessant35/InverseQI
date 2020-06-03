<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Inverse QI</title>
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<!--CSS-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src='<?= base_url() ?>resources/dropzone.js' type='text/javascript'></script>

</head>
<body class="blue lighten-5">

    <?php include('z_include_menu.php'); ?>
</br>
</br>
<div class="container white client_create z-depth-2 " style="padding:20px;">
 <div style="margin-bottom: 50px ">
    <h2>Generer une question</h2>   
    <a class="btn waves-effect waves-light left blue"
    href="<?php echo base_url() . "index.php/question/generate";?>">Générer aléatoirement une question<i class="material-icons right">send</i></a>
</div>

<?php echo validation_errors(); ?>
<div class="row">
    <?php echo form_open('question/create', 'class="col s12"'); ?>
   <div>
    <?php
    $value = "";
    $value = shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\wamp64\www\InverseQI-master\inverse-qi\application\script\test333.R');

    $matches = array();
    preg_match_all('#[0-1]\s#', $value, $matches, PREG_PATTERN_ORDER);               
    ?>
</div>
<div class="container" >
    <?php
    $i=0;
    ?>
    <div class="row">
        <div class="col s4 center">
         <canvas id="canvas" width="150" height="150" style="border: 1px ridge black"></canvas>
         <?php
         if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');
            ctx.fillRect (0, 0, 50, 50);
            console.log(ctx)
            console.log(canvas.toDataURL()) </script>";
        } 
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas = document.getElementById('canvas');
            var ctx = canvas.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
        }
        $i++;

        ?>
        <script type="text/javascript">

            canvas = document.getElementById("canvas");
            const context = canvas.getContext('2d');

            const pixelBuffer = new Uint32Array(
                context.getImageData(100, 100, 50, 50).data.buffer
                );
            console.log(!pixelBuffer.some(color => color !== 0));


        </script>
    </div>

    <div class="col s4 center">                                   
        <canvas id="canvas2" width="150" height="150" style="border: 1px ridge black"></canvas>
        <?php
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
        } 
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas2 = document.getElementById('canvas2');
            var ctx = canvas2.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
        }
        $i++;

        ?>
    </div>


    <div class="col s4 center" >                                  
       <canvas id="canvas3" width="150" height="150" style="border: 1px ridge black"></canvas>
       <?php
       if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
    } 
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
    }
    echo "<br>";
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
    }
    echo "<br>";
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas3 = document.getElementById('canvas3');
        var ctx = canvas3.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
    }
    $i++;

    ?>
</div>

<div class="col s4 center">                                  
   <canvas id="canvas4" width="150" height="150" style="border: 1px ridge black"></canvas>
   <?php
   if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
} 
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas4 = document.getElementById('canvas4');
    var ctx = canvas4.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
}
$i++;

?>
</div>

<div class="col s4 center">                                   
    <canvas id="canvas5" width="150" height="150" style="border: 1px ridge black"></canvas>
    <?php
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
    } 
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
    }
    echo "<br>";
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
    }
    echo "<br>";
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
    }
    $i++;
    if ($matches[0][$i] == 1) {
        echo "<script>  var canvas5 = document.getElementById('canvas5');
        var ctx = canvas5.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
    }
    $i++;

    ?>
</div>

<div class="col s4 center">                                  
   <canvas id="canvas6" width="150" height="150" style="border: 1px ridge black"></canvas>
   <?php
   if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
} 
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas6');
    var ctx = canvas6.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
}
$i++;

?>
</div>

<div class="col s4 center">  
  <canvas id="canvas7" width="150" height="150" style="border: 1px ridge black"></canvas>
  <?php
  if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
} 
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas7');
    var ctx = canvas7.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
}
$i++;

?>
</div>

<div class="col s4 center">                                  
  <canvas id="canvas8" width="150" height="150" style="border: 1px ridge black"></canvas>
  <?php
  if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
} 
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas8');
    var ctx = canvas8.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
}
$i++;

?>
</div>


<div class="col s4 center"><img style="border:1px ridge black;" src="http://148.60.11.218/Image/_ens5dyxgf/canvas8.png" alt=""></div>
</div>
</div>
</div>


<div class="input-field col s12">
    <center >Quelle est la suite ?</center>
</div>

<form action="http://148.60.11.218/index.php/test/testform/27/1" class="col s12" method="post" accept-charset="utf-8">
    <div class="container">
        <div class="row">
           <?php
           function test($stri){
            $valuee = random_int(0, 1023);
            $test = sprintf( "%09d", decbin($valuee));
            $j = 0;
            foreach (str_split($test) as $char) {
                if ($char == 1) {
                    switch ($j) {
                        case 0:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
                        break;

                        case 1:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
                        break;

                        case 2:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
                        break;

                        case 3:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
                        break;

                        case 4:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
                        break;

                        case 5:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
                        break;

                        case 6:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
                        break;

                        case 7:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
                        break;

                        case 8:
                        echo "<script>  var canvasX = document.getElementById('$stri');
                        var ctx = canvasX.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
                        break;
                    }
                }
                $j++;
            }
        }
        ?>               
        <div class="col s4 center">

            <canvas id="canvas9" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas9");
            ?>
            <label>
                <input class="with-gap" name="answer" value=false type="radio" checked/>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas id="canvas10" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas10");
            ?>
            <label>
                <input class="with-gap" name="answer" value=false type="radio" checked/>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas id="canvas11" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas11");
            ?>
            <label>
                <input class="with-gap" name="answer" value=false type="radio" checked/>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas id="canvas12" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas12");
            ?>
            <label>
                <input class="with-gap" name="answer" value=false type="radio" checked/>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas id="canvas13" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas13");
            ?>
            <label>
                <input class="with-gap" name="answer" value=false type="radio" checked/>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas id="canvas14" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php

            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
            } 
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
            }
            echo "<br>";
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
            }
            echo "<br>";
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas9 = document.getElementById('canvas14');
                var ctx = canvas9.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
            }
            $i++;

            ?>
            <label>
                <input class="with-gap" name="answer" value=true type="radio" checked/>
                <span></span>
            </label>
        </div>
    </div>

    <div class="row center">
        <button class="btn waves-effect blue" type="submit" name="action">Suivant
            <i class="material-icons right">send</i>
        </button>
    </div>
</div>
</form>
</br>
</br>
</form>




<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
<?php include('z_include_footer.php'); ?>
</body>

<style>

    .container {
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 18px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }


  .area {
    margin: 10px;
    width: 150px;
    height: 150px;
    border: 4px dashed #2196f3;
    background-color: #e3f2fd;
    filter: alpha(opacity=50);
    -khtml-opacity: 0.5;
    -moz-opacity: 0.5;
    opacity: 0.5;
    text-align: center;
    border-radius: 20px;
}

.area:hover,
.area.dragging,
.area.uploading {
    filter: alpha(opacity=100);
    -khtml-opacity: 1;
    -moz-opacity: 1;
    opacity: 1;
}

.area input {
    width: 100%;
    height: 100%;
    border: none;
    cursor: pointer;
}

.area input:focus {
    outline: none;
}


}
</style>

</html>