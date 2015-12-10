<?php if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') { ?>
    <html>
        <title>Resultados de la Orden</title>
        <body>
            <h1></h1>
            <p>ORDEN:</p><br/>
            <?php
            $neumaticos = $_POST['neumaticos'];
            $bujias = $_POST['bujia'];
//$aceite 	= $_POST['aceite'];
# $aceite 	= $_POST['aceite'];
            /*
              $aceite 	= $_POST['aceite'];
             */
            $encontrar = $_POST['encontrar'];
            $aceite = $_REQUEST['aceite'];
            $total_items = 0;
            $descuento = 0;
            $total_items = $neumaticos + $bujias + $aceite;

            /*
              if  ($total_items==0) {
              echo '<font color=red>';
              echo 'Usted no ha indicado ningUn item
              en la pAgina anterior.';
              echo '</font>';
              } */

            if ($total_items == 0) {
                echo '<font color=red>';
                echo 'Usted no ha indicado ningUn item
		 en la pAgina anterior.';
                echo '</font>';
            } else {

                echo '<br/>su pedido es :<br/>';
                echo '-----------------------<br/>';

                if ($neumaticos > 0) {
                    echo $neumaticos . ' NEUMATICOS <br/>';
                }

                if ($bujias > 0) {
                    echo $bujias . ' BUJIAS <br/>';
                }
                if ($aceite > 0)
                    echo $aceite . ' de ACEITE<br/>';
                if ($total_items > 10 && $total_items < 15)
                    $descuento = 5;
                elseif ($total_items >= 15 && $total_items <= 20)
                    $descuento = 8;
                elseif ($total_items > 20)
                    $descuento = 12;
                switch ($encontrar) {
                    case 'a':
                        echo '<p>Soy cliente habitual</p>';
                        break;

                    case 'b':
                        echo '<p>Publicidad por TV</p>';
                        break;

                    case 'c':
                        echo '<p>Directorio telefOnico</p>';
                        break;

                    case 'd':
                        echo '<p>Un amigo me lo comentO</p>';
                        break;

                    default :
                        echo '<p>No sabemos como nos encontrO</p>';
                        break;
                }
                echo 'Su descuento es de ' . $descuento . ' %';
            }
        } else {
            header("Location: index.php");
        }
        ?>
    </body>
</html>
