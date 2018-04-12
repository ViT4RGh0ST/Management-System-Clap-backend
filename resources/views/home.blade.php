
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row center">
          <a class="waves-effect waves-light btn modal-trigger" href="#registro">Registro</a>
                    </div>
                </div>
            </div>


                    
                    <div id="registro" class="modal">
    <div class="modal-content">
      <center>
            <div class="z-depth-1 white row">
                <div class="clap col s12"><h5 class="white-text">Registro de Jefe Familiar</h5></div>
                <div class="row" style="margin-bottom: 0px">
                    <div class="col s12">
                        <form method="post" action="" id="register-form" class="col s12" autocomplete="off">
                            <div style="padding: 30px">
                                <div class="row">
                                    <div class="input-field col s12 m6 l3">
                                        <input type="text" id="form_username" name="cedula[]" autocomplete="off" class="uppercase" maxlength="10">
                                        <label class="" for="form_username">Cédula (inicia con V o E)</label>
                                    </div>

                                    <div class="input-field col s12 m6 l3">
                                        <input type="text" id="form_nombre" name="nombres[]" autocomplete="off" class="" maxlength="30">
                                        <label class="" for="form_nombre">Nombres</label>
                                    </div>

                                    <div class="input-field col s12 m6 l3">
                                        <input type="text" id="form_apellido" name="apellidos[]" autocomplete="off" class="" maxlength="30">
                                        <label class="" for="form_apellido">Apellidos</label>
                                    </div>

                                    <div class="input-field col s12 m6 l3">
                                        <input type="text" class="datepicker" id="fecha">
                                        <label for="fecha">Fecha de Nacimiento</label>                            
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m6 l3">
                                        <div class="select-wrapper initialized">
                                            <span class="caret">▼</span>
                                            <input type="text" class="select-dropdown" readonly="true" data-activates="select-options-cadc1ffe-4f19-cc35-18cc-02fac73aff69" value="Seleccione">
                                            <ul id="select-options-cadc1ffe-4f19-cc35-18cc-02fac73aff69" class="dropdown-content select-dropdown ">
                                                <li class=""><span>Seleccione</span></li>
                                                <li class=""><span>Femenino</span></li>
                                                <li class=""><span>Masculino</span></li>
                                            </ul>
                                            <select id="form_sex" name="sexo[]" data-select-id="cadc1ffe-4f19-cc35-18cc-02fac73aff69" class="initialized">
                                                <option value="">Seleccione</option>
                                                <option value="F">Femenino</option>
                                                <option value="M">Masculino</option>
                                            </select>
                                        </div>
                                        <label class="" for="form_sex">Sexo</label>
                                    </div>
                                    

                                    <div class="input-field col s12 m6 l3">
                                        <div class="select-wrapper initialized">
                                            <span class="caret">▼</span>
                                            <input type="text" class="select-dropdown" readonly="true" data-activates="select-options-cadc1ffe-4f19-cc35-18cc-02fac73aff69" value="Seleccione">
                                            <ul id="select-options-cadc1ffe-4f19-cc35-18cc-02fac73aff69" class="dropdown-content select-dropdown ">
                                                <li class=""><span>Seleccione</span></li>
                                                <li class=""><span>Soltero (a)</span></li>
                                                <li class=""><span>Casado (a)</span></li>
                                                <li class=""><span>Divorciado (a)</span></li>
                                                <li class=""><span>Viudo (a)</span></li>
                                                <li class=""><span>Concubino (a)</span></li>
                                            </ul>
                                            <select id="form_edocivil" name="estado_civil[]" data-select-id="cadc1ffe-4f19-cc35-18cc-02fac73aff69" class="initialized">
                                                <option value="">Seleccione</option>
                                                <option value="S">Soltero (a)</option>
                                                <option value="C">Casado (a)</option>
                                                <option value="D">Divorciado (a)</option>
                                                <option value="V">Viudo (a)</option>
                                                <option value="Co">Concubino (a)</option>
                                            </select>
                                        </div>
                                        <label class="" for="form_edocivil">Estado Civil</label>

                                    </div>
                                

                                
                                    <div class="input-field col s12 m6 l3">
                                        <input type="text" name="tiempo_comunidad[]" id="form_comunidad" autocomplete="off" maxlength="2">
                                        <label for="form_comunidad">Tiempo en la comunidad (años)</label>
                                        
                                    </div>
                                    <div class="input-field col s12 m6 l3">
                                        <input type="email" id="form_correo" name="correo[]" autocomplete="off" class="" maxlength="30" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" required>
                                        <label class="" for="form_correo">Correo</label>
                                    </div>
                                
                                </div>

                                <div class="divider"></div>
                                <div class="section">
                                    <div class="row">
                                        <div class="col s3">
                                            <p>
                                                <label>¿Posee alguna discapacidad?</label>
                                                <br>
                                                <input name="tipo_discapacidad[]" type="radio" id="radio_discapno" />
                                                <label for="radio_discapno">No</label>

                                                <input name="tipo_discapacidad[]1" type="radio" id="radio_discapsi" />
                                                <label for="radio_discapsi">Si</label>
                                                <div class="input-field">
                                                    <input type="text" disabled id="form_discap" name="tipo_discapacidad[]" autocomplete="off" class="class_discap" maxlength="30">
                                                    <label for="form_discap">Especifique</label>                                    
                                                </div>
                                            <p>
                                        </div>
                                        
                                        <div class="col s3">
                                            <p>
                                                <label>¿Posee alguna pensión?</label>
                                                <br>
                                                <input name="tipo_pension[]" type="radio" id="radio_penNo" />
                                                <label for="radio_penNo">No</label>

                                                <input name="tipo_pension[]" type="radio" id="radio_penSi" />
                                                <label for="radio_penSi">Si</label>

                                                <div class="input-field">
                                                    <input type="text" disabled id="form_pension" name="tipo_institucion[]" autocomplete="off" class="class_discap" maxlength="30">
                                                    <label for="form_pen">Institución</label>                                    
                                                </div>
                                            </p>
                                        </div>
                                         <div class="col s3">
                                            <p>
                                                <label>Esta registrado en el CNE?</label>
                                                <br>
                                                <input name="cne" type="radio" id="radio_cneNo" />
                                                <label for="radio_cneNo">No</label>

                                                <input name="cne" type="radio" id="radio_cneSi" />
                                                <label for="radio_cneSi">Si</label>     
                                            </p>
                                        </div>
                                        <div class="col s3">
                                            <p>
                                                <label>¿Presenta embarazo precoz?</label>
                                                <br>
                                                <input name="embarazo_precoz" type="radio" id="radio_embzno" />
                                                <label for="radio_embzno">No</label>

                                                <input name="embarazo_precoz" type="radio" id="
                                                radio_embzsi" />
                                                <label for="radio_embzsi">Si</label>
                                             
                                            <p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12 m4">
                                        <input type="tel" id="form_cell" name="numero_celular[]" class="" autocomplete="off">
                                        <label for="form_cell">Teléfono Celular</label>
                                    </div>

                                    
                                    <div class="input-field col s12 m4">
                                        <input type="tel" id="form_ofic" name="numero_oficina[]" class="" autocomplete="off">
                                        <label for="form_ofic">Teléfono de Oficina</label>
                                    </div>
                                </div>
                                <br>

                                <div class="divider"></div>
                                <div class="section">
                                    <br>
                                    <div class="row">
                                        <div class="col s6">
                                            <label>Nivel de Instrucción</label>
                                        </div>
                                        <div class="col s6">
                                            <label style="padding-left:80px">¿Trabaja Actualmente?</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s4">
                                            <p>
                                                <input type="radio" class="with-gap" id="form_educ1" name="nivel_instruccion" class="" autocomplete="off">
                                                <label for="form_educ1">Sin Instrucción</label>
                                            </p>

                                            <p>
                                                <input type="radio" class="with-gap" id="form_educ2" name="nivel_instruccion" class="" autocomplete="off">
                                                <label for="form_educ2">Básica</label>
                                            </p>

                                            <p>
                                                <input type="radio" class="with-gap" id="form_educ3" name="nivel_instruccion" class="" autocomplete="off">
                                                <label for="form_educ3">Bachiller</label>
                                            </p>

                                            <p>
                                                <input type="radio" class="with-gap" id="form_educ4" name="nivel_instruccion" class="" autocomplete="off">
                                                <label for="form_educ4">Técnico Medio</label>
                                            </p>
                                        </div>

                                        <div class="col s4">
                                            <p>
                                                <input type="radio" class="with-gap" id="form_educ5" name="nivel_instruccion" class="" autocomplete="off">
                                                <label for="form_educ5">Técnico Superior</label>
                                            </p>

                                            <p>
                                                <input type="radio" class="with-gap" id="form_educ6" name="nivel_instruccion" class="" autocomplete="off">
                                                <label for="form_educ6">Universitario</label>
                                            </p>

                                            <p>
                                                <input type="radio" class="with-gap" id="form_educ7" name="nivel_instruccion" class="" autocomplete="off">
                                                <label for="form_educ7">Post Grado</label>
                                            </p>
                                        </div>
                                        

                                        <div class="col s3">
                                            <input type="radio" class="with-gap" id="form_trab1" name="es_empleado" class="" autocomplete="off">
                                            <label for="form_trab1">Si</label>

                                            <input type="radio" class="with-gap" id="form_trab2" name="es_empleado" class="" autocomplete="off">
                                            <label for="form_trab2">No</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input type="text" id="form_profesion" name="profesion[]" class="" autocomplete="off">
                                            <label for="form_profesion">Indique a qué se dedica</label>
                                        </div>

                                        <div class="col s6">
                                            <label>Clasificación del ingreso Familiar</label><br>
                                            
                                                <input type="radio" class="with-gap" id="form_ingres1" name="clasificacion_ingreso" autocomplete="off">
                                                <label for="form_ingres1">Diario</label>
                                            
                                            
                                                <input type="radio" class="with-gap" id="form_ingres2" name="clasificacion_ingreso" autocomplete="off">
                                                <label for="form_ingres2">Semanal</label>
                                            
                                            
                                                <input type="radio" class="with-gap" id="form_ingres3" name="clasificacion_ingreso" autocomplete="off">
                                                <label for="form_ingres3">Quincenal</label>
                                            
                                            
                                                <input type="radio" class="with-gap" id="form_ingres4" name="clasificacion_ingreso" autocomplete="off">
                                                <label for="form_ingres4">Mensual</label>
                                            
                                            
                                                <input type="radio" class="with-gap" id="form_ingres5" name="clasificacion_ingreso" autocomplete="off">
                                                <label for="form_ingres5">Por Trabajo Realizado</label>

                                                
                                        </div>
                                         
                                    </div>
                                    
                                </div>


                                <div class="row blank lighten-4" style="margin-bottom: 0px; height: 100px">
                                    <div class="form-actions col s12" style="padding-top: 18px">
                                        <button id="send-button" type="submit" data-callback="onSubmit" class="col s12 offset-m3 m6 btn btn-medium waves-effect clap g-recaptcha">Continuar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col s12 form-footer">
                    <a href="#" title="Ya estoy registrado">Ya estoy registrado</a>
                </div>
           
        </center>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
  </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection





                                        