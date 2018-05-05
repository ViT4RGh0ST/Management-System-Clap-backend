<div class="z-depth-1 white row">
  <div class="clap col s12">
    <h5 class="white-text">Registro de Jefe Familiar</h5>
  </div>
  <div class="row" style="margin-bottom: 0px">
    <div class="col s12">
      <form method="POST" action="" id="register-form" class="col s12" autocomplete="off">
        @csrf
        <div style="padding: 30px">
          <div class="row">
            <div class="input-field col s12 m3">
              <input type="text" name="cedula" autocomplete="off" maxlength="10">
              <label for="cedula">Cédula (inicia con V o E)</label>
            </div>
            <div class="input-field col s12 m3">
              <select name="sexo">
                <option value="">Seleccione</option>
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
              </select>
              <label for="sexo">Sexo</label>
            </div>
            <div class="input-field col s12 m3">
              <select name="estado_civil">
                <option value="">Seleccione</option>
                <option value="S">Soltero (a)</option>
                <option value="C">Casado (a)</option>
                <option value="D">Divorciado (a)</option>
                <option value="V">Viudo (a)</option>
                <option value="Co">Concubino (a)</option>
              </select>
              <label for="estado_civil">Estado Civil</label>
            </div>
            <div class="input-field col s12 m3">
              <input name="fecha_nacimiento" type="text" class="datepicker">
              <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m3">
              <input type="text" name="primer_nombre" autocomplete="off" maxlength="30">
              <label for="primer_nombre">Primer Nombre</label>
            </div>
            <div class="input-field col s12 m3">
              <input type="text" name="segundo_nombre" autocomplete="off" maxlength="30">
              <label for="segundo_nombre">Segundo Nombre</label>
            </div>
            <div class="input-field col s12 m3">
              <input type="text" name="primer_apellido" autocomplete="off" maxlength="30">
              <label for="primer_apellido">Primer Apellido</label>
            </div>
            <div class="input-field col s12 m3">
              <input type="text" id="" name="segundo_apellido" autocomplete="off" maxlength="30">
              <label for="segundo_apellido">Segundo Apellido</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m4">
              <input type="tel" name="numero_celular" autocomplete="off">
              <label for="numero_celular">Teléfono Celular</label>
            </div>
            
            <div class="input-field col s12 m4">
              <input type="tel" name="numero_hogar" autocomplete="off">
              <label for="numero_hogar">Teléfono de Habitación</label>
            </div>
            
            <div class="input-field col s12 m4">
              <input type="tel" name="numero_oficina" autocomplete="off">
              <label for="numero_oficina">Teléfono de Oficina</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m3">
              <input type="text" name="tiempo_comunidad" autocomplete="off" maxlength="2">
              <label for="tiempo_comunidad">Tiempo en la comunidad (años)</label>
            </div>
            <div class="input-field col s12 m3">
              <input type="email" name="correo" autocomplete="off" maxlength="30"
                     pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" required>
              <label for="correo">Correo</label>
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="section">
          <div class="row">
            <div class="input-field col s12 m3">
              <select name="discapacidad">
                <option value="">Seleccione</option>
                <option value="auditiva">Auditiva</option>
                <option value="visual">Visual</option>
                <option value="motora">Motora</option>
                <option value="intelectual">Intelectual</option>
                <option value="congnitiva">Cognitiva</option>
                <option value="sensorial">Sensorial</option>
                <option value="no">No posee</option>
              </select>
              <label for="discapacidad">Discapacidad</label>
            </div>
            <div class="input-field col s12 m3">
              <select name="pension">
                <option value="">Seleccione</option>
                <option value="vejez">Vejez</option>
                <option value="sobreviviente">Sobreviviente</option>
                <option value="invalidez">Invalidez</option>
                <option value="incapacidad">Incapacidad</option>
                <option value="no">No posee</option>
              </select>
              <label for="pension">Pension</label>
            </div>
            <div class="input-field col s12 m3">
              <select name="cne">
                <option value="no">No</option>
                <option value="si">Si</option>
              </select>
              <label for="cne">¿Está registrado en el CNE?</label>
            </div>
            <div class="input-field col s12 m3">
              <select name="es_empleado">
                <option value="no">No</option>
                <option value="si">Si</option>
              </select>
              <label for="es_empleado">¿Trabaja actualmente?</label>
            </div>
          </div>
        </div>
        <br>
        
        <div class="divider"></div>
        <div class="section">
          <br>
          <div class="row">
            <div class="input-field col s12 m3">
              <select name="nivel_instruccion">
                <option value="">Seleccione</option>
                <option value="sin instruccion">Sin Instrucción</option>
                <option value="basica">Básica</option>
                <option value="bachiller">Bachiller</option>
                <option value="tecnico medio">Técnico Medio</option>
                <option value="tecnico superior">Técnico Superior</option>
                <option value="universitario">Universitario</option>
                <option value="postgrado">Post Grado</option>
              </select>
              <label for="nivel_instruccion">Nivel de Instrucción</label>
            </div>
            <div class="input-field col s12 m3">
              <select name="clasificacion_ingreso">
                <option value="">Seleccione</option>
                <option value="diario">Diario</option>
                <option value="semanal">Semanal</option>
                <option value="quincenal">Quincenal</option>
                <option value="mensual">Mensual</option>
                <option value="trabajo">Por trabajo realizado</option>
              </select>
              <label for="clasificacion_ingreso">Clasificación del ingreso individual</label>
            </div>
            <div class="input-field col s12 m3">
              <input type="text" name="ingreso" autocomplete="off">
              <label for="ingreso">Ingreso estimado que adquiere</label>
            </div>
            <div class="input-field col s12 m3">
              <input type="text" name="profesion" autocomplete="off">
              <label for="profesion">¿Cúal es su profesión?</label>
            </div>
          </div>
        </div>
        <div class="row blank lighten-4" style="margin-bottom: 0px; height: 100px">
          <div class="form-actions col s12" style="padding-top: 18px">
            <button id="send-button" type="submit" data-callback="onSubmit"
                    class="col s12 offset-m3 m6 btn btn-medium waves-effect clap g-recaptcha">Continuar
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>