<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="es">
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>

        <form name="calculadora" action="resultadoCalc.php" method="POST">
            
            <p> <label for="num1">Numero1: <input type="number" id="num1" name="num1"/></label></p>
            <p> <label for="num2">Numero2: <input type="number" id="num2" name="num2"/></label></p>            
            <p>                
                <select name="lista" id="lista">
                    <option value="sumar" name="sumar">Sumar</option>
                    <option value="restar"  name="restar">Restar</option>
                    <option value="multiplicar" name="multiplicar">Multiplicar</option>
                    <option value="dividir" name="dividir">Dividir</option>
                    <option value="resto" name="resto">Resto</option>
                </select>
        </p>                        
        <p><button type="submit" name="calcular">calcular</button></p>    
        </form>               
    </body>
</html>
