<?php
$valor= '';
$desde = '';
$hasta = '';
//recibimos metros en $valor convertimos a $unidad_hasta
function convertir_desde_metros ($valor,$unidad_hasta){
    switch($unidad_hasta){
        case 'Milimetro':
            return $valor*11000;
        break;
        case 'Centimetro':
            return $valor*100;
        break;
        case 'Decimetro':
            return $valor*10;
        break;
        case 'Metro':
            return $valor*1;
        break;
        case 'Decametro':
            return $valor/10;
        break;
        case 'Hectometro':
            return $valor/100;
        break;
        case 'Kilometro':
            return $valor/1000;
        break;
        default:
        return 'Unidad de medida invalida';
        break;
    }
}

function convertir_a_metros ($valor,$unidad_desde){
    switch($unidad_desde){
        case 'Milimetro':
            return $valor/1000;
        break;
        case 'Centimetro':
            return $valor/100;
        break;
        case 'Decimetro':
            return $valor/10;
        break;
        case 'Metro':
            return $valor*1;
        break;
        case 'Decametro':
            return $valor*10;
        break;
        case 'Hectometro':
            return $valor*100;
        break;
        case 'Kilometro':
            return $valor*1000;
        break;
        default:
        return 'Unidad de medida invalida';
        break;
    }
}
if(isset($_POST['convertir'])){
 //Obtension de valores
 $valor = $_POST['valor'];
 $desde = $_POST['desde'];
 $hasta = $_POST['hasta'];

 $conversionDesde = convertir_a_metros($valor,$desde);
 $conversionHasta = convertir_desde_metros($conversionDesde,$hasta);
 $resultado = number_format($conversionHasta,2);
}
?>


<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Conversor de Longitud</title>
  </head>
  <body>
    <h1 class="text-center">Conversor de Longitud</h1>

    <div class="container">
        <form method="POST">
        <div class="row mt-4">
            <div class="col-sm-4">
                <div>
                    <label for="valor" class="form-label">Valor:</label>
                    <input type="number" class="form-control" name="valor" >
                </div>
            </div>
                <div class="col-sm-4">
                    <label for="from" class="form-label">Desde:</label>
                    <select class="form-select" name="desde">    
                            <option value="">--Selecciona un valor--</option>                       
                            <option value="Milimetro">Milímetro</option>
                            <option value="Centimetro">Centímetro</option>
                            <option value="Decimetro">Decímetro</option>
                            <option value="Metro">Metro</option>
                            <option value="Decámetro">Decámetro</option>
                            <option value="Hectómetro">Hectómetro</option>
                            <option value="Kilómetro">Kilómetro</option>
                    </select>
                
                
                </div>
                <div class="col-sm-4">
                    <label for="from" class="form-label">Hasta:</label>
                    <select class="form-select" name="hasta">
                        <option value="">--Selecciona un valor--</option>  
                        <option value="Milimetro">Milímetro</option>
                        <option value="Centimetro">Centímetro</option>
                        <option value="Decimetro">Decímetro</option>
                        <option value="Metro">Metro</option>
                        <option value="Decámetro">Decámetro</option>
                        <option value="Hectómetro">Hectómetro</option>
                        <option value="Kilómetro">Kilómetro</option>
                    </select>              
                </div>
           
        </div>  

        <div class="row mt-4">
            <div class="col-sm-6">
                <button name="convertir" type="submit" class="btn btn-primary w-100 py-4">Convertir</button>
            </div> 
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="resultado" class="form-label">Resultado:</label>
                    <input name="resultado" type="text" class="form-control">                
                </div>
            </div>
        </div> 

         </form>     
    </div>
    
  </body>
</html>