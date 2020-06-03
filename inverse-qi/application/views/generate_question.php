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
<body onload="initialize()" class="blue lighten-5">

    <?php include('z_include_menu.php'); ?>
</br>
</br>
<div class="container white client_create z-depth-2 " style="padding:20px;">
 <div style="margin-bottom: 50px ">
    <h2>Generer une question</h2>   
    <a class="btn waves-effect waves-light left blue"
    href="<?php echo base_url() . "index.php/question/generate";?>">Générer aléatoirement une question<i class="material-icons right">send</i></a>
</div>
</br>

<?php echo validation_errors(); ?>
<?php if ($ajouter=='true') {
    echo "La question a été ajoutée";
}else if ($ajouter=='false'){
    echo "La question n'a pas été ajoutée";
} ?>
<div class="row">

   <div>
        <?php
        $value = "";
        $value = shell_exec('C:\\"Program Files"\\R\\R-3.6.1\\bin\\Rscript.exe C:\\Users\\\"Thomas Guessant"\\Desktop\\InversQI\\inverse-qi\\application\\script\\test333.R');
        
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
            <canvas name="canvas0" id="canvas0" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');
                ctx.fillRect (0, 0, 50, 50);</script>";
            } 
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
            }
            echo "<br>";
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
            }
            echo "<br>";
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas = document.getElementById('canvas0');
                var ctx = canvas.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
            }
            $i++;

            ?>
           
        </div>

        <div class="col s4 center">                                   
            <canvas name="canvas1" id="canvas1" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
            } 
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
            }
            echo "<br>";
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
            }
            echo "<br>";
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
            }
            $i++;
            if ($matches[0][$i] == 1) {
                echo "<script>  var canvas2 = document.getElementById('canvas1');
                var ctx = canvas2.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
            }
            $i++;

            ?>
        </div>


        <div class="col s4 center" >                                  
        <canvas name="canvas2" id="canvas2" width="150" height="150" style="border: 1px ridge black"></canvas>
        <?php
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
        } 
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas3 = document.getElementById('canvas2');
            var ctx = canvas3.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
        }
        $i++;

        ?>
    </div>

    <div class="col s4 center">                                  
        <canvas name="canvas3" id="canvas3" width="150" height="150" style="border: 1px ridge black"></canvas>
        <?php
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
        } 
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas4 = document.getElementById('canvas3');
            var ctx = canvas4.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
        }
        $i++;

        ?>
        </div>

    <div class="col s4 center">                                   
        <canvas name="canvas4" id="canvas4" width="150" height="150" style="border: 1px ridge black"></canvas>
        <?php
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
        } 
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
        }
        echo "<br>";
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
        }
        $i++;
        if ($matches[0][$i] == 1) {
            echo "<script>  var canvas5 = document.getElementById('canvas4');
            var ctx = canvas5.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
        }
        $i++;

        ?>
    </div>

<div class="col s4 center">                                  
   <canvas name="canvas5" id="canvas5" width="150" height="150" style="border: 1px ridge black"></canvas>
   <?php
   if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
} 
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas6 = document.getElementById('canvas5');
    var ctx = canvas6.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
}
$i++;

?>
</div>

<div class="col s4 center">  
  <canvas name="canvas6" id="canvas6" width="150" height="150" style="border: 1px ridge black"></canvas>
  <?php
  if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
} 
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas7 = document.getElementById('canvas6');
    var ctx = canvas7.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
}
$i++;

?>
</div>

<div class="col s4 center">                                  
  <canvas name="canvas7" id="canvas7" width="150" height="150" style="border: 1px ridge black"></canvas>
  <?php
  if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (0, 0, 50, 50); </script>";
} 
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (50, 0, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (100, 0, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (0, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (50, 50, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (100, 50, 50, 50); </script>";
}
echo "<br>";
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (0, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (50, 100, 50, 50); </script>";
}
$i++;
if ($matches[0][$i] == 1) {
    echo "<script>  var canvas8 = document.getElementById('canvas7');
    var ctx = canvas8.getContext('2d');ctx.fillRect (100, 100, 50, 50); </script>";
}
$i++;

?>
</div>


<div class="col s4 center">
<canvas name="canvas8" id="canvas8" width="150" height="150" style="border: 1px ridge black"></canvas>
</div>

</div>
</div>
</div>


<div class="input-field col s12 center">
    <div id="IQquestion">Quelle est la suite ?</div>
</div>
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

            <canvas name="canvas9" id="canvas9" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas9");
            ?>
            <label>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas name="canvas10" id="canvas10" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas10");
            ?>
            <label>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas name="canvas11" id="canvas11" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas11");
            ?>
            <label>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas name="canvas12" id="canvas12" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas12");
            ?>
            <label>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas name="canvas13" id="canvas13" width="150" height="150" style="border: 1px ridge black"></canvas>
            <?php 
            test("canvas13");
            ?>
            <label>
                <span></span>
            </label>
        </div>

        <div class="col s4 center"><canvas name="canvas14" id="canvas14" width="150" height="150" style="border: 1px ridge black"></canvas>
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
                
                <span></span>
            </label>
        </div>
    </div>

    <div class="row center">
		<a id="enregistrer" class="waves-effect waves-light btn blue">Enregistrer</a>
	</div>
</div>
</form>
</br>
</br>
</div>
</body>

<?php include('z_include_footer.php'); ?>


<script src="<?php echo base_url(); ?>vendor/js/generateQuestion.js"></script>

</html>