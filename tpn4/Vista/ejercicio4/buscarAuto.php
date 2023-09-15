<?php 
    $tituloPagina = "Ejercicio 4 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer4";
    $rutaEstructura = "../";
    
    include_once('../estructura/encabezado.php');
?>
    <!-- 
        tp4 ejercicio 4
    -->

    <div class="contenedorCentrado">
        <div class='titulosDiv' class="textoCentrado">Buscar Auto por patente</div>
        <div class="container col-md-8">
            <form action="accion/accionBuscarAuto.php" method="post" class="needs-validation row-md-4" novalidate>
                <div>
                    <table>
                        <div>
                            <tr>
                                <td ><label>Patente:</label></td>
                                <td>
                                    <div>
                                        <input type="text" pattern="[A-Z]{3}\s[0-9]{3}" name="Patente" id="input_nombre" class="form-control text" required>
                                        <div class="invalid-feedback">
                                            Porfavor ingrese una patente valida! 3 Letras Mayusculas, un espacio y 3 numeros.
                                        </div>
                                    </div>
                                </td>        
                            </tr>
                            <tr>
                                <td colspan="2">

                                </td>
                            </tr>
                        </div>
                        <tr>
                            <td colspan="2"><input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Cargar"></td>
                        </tr>
                    </table>

                </div>
                
            </form>
        </div>

        <script src="../estructura/js/validarCamposVacios.js"></script>
    </div>

<?php
    include_once('../estructura/pie.php');
?>