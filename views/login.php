<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row">
    <h5>Si te gustaria que te llegaran las notificaciones de las actualizaciones de mi blog,<br> SUSCRIBETE</h5>



    <div class="col s12 m6 offset-m4">
        <form action="index.html" method="get">
            <div class="row card-panel z-depth-4">
                <div class="input-field col s12">
                    <i class="material-icons prefix"></i>
                    <input
                        type="text"
                        placeholder="Ingresa tu cuenta de usuario"
                        id="usuario"
                        name="usuario"
                        class="validate"
                        required
                        />
                    <label for="usuario">Usuario:</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix"></i>
                    <input
                        type="password"
                        id="pswd"
                        name="pswd"
                        class="validate"
                        required
                        />
                    <label for="pswd">Contraseña:</label>
                </div>
                <button class="btn blue right">
                    <i class="material-icons left"></i>
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>
