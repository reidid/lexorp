@extends('layouts.layout_base')
 
@section('title')
    Inventario de Libros
@stop

@section('head')
@parent
@stop

@section('titulopagina')
    Inventario de libros
@stop


@section('content')
       


    <div class="wizard" id="libros-wizard" data-title="Adicionar Ejemplares">
          
            <div class="wizard-card" data-cardname="Adquisición">
                <h3>Adquisición</h3>

                    <div class="wizard-input-section">
                       <div class="form-group">                   
                            <label for="edicion" class="col-xs-3">Fecha</label>
                            <div class="col-sm-9">
                                <div class="form-group col-xs-6">
                                  <input type="text" id="fecha" name="fecha" class="form-control" data-validate="Requerido">
                               </div>
                            </div>
                        </div>
                    </div>

                    <div class="wizard-input-section">                    
                        <div class="form-group">
                             <label for="tipo" class="col-xs-3">Tipo</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select id="tipo" name="tipo" data-placeholder="Seleccione" style="width:200px;" class="chzn-select form-control" data-validate="Requerido">
                                         <option value=""></option>
                                         <option value="C">Compra</option>
                                         <option value="D">Donación</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="wizard-input-section">
                       <div class="form-group">
                            <label for="anoedicion" class="col-xs-3">Cantidad</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                        <input type="text" id="cantidad" name="cantidad" class="form-control">                                 
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <div class="wizard-input-section">
                       <div class="form-group">
                            <label for="coleccion" class="col-xs-3">Proveedor</label>
                            <div class="col-sm-9">
                                <div class="form-group">
                                        <input type="text" id="Proveedor" name="Proveedor" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

      
             </div>

            <div class="wizard-card wizard-card-overlay" data-cardname="Ejemplares">
                <h3>Ejemplares</h3>
                <div class="row col-md-12">
            
                    <div class="col-md-8"><div id="alertaslibro"><div class="alert alert-dismissable">&nbsp;</div></div></div>
                    <div class="col-md-4" > 
                        <span class="pull-right">Total:
                        <span class="glyphicon glyphicon-book" aria-hidden="true" style="font-size:20px;"></span> 
                        <span id="totalArticulosNuevos" class="badge badge-notify">0</span>
                        </span>
                    </div>    
               
            
                    <table id="table-ejemplares" data-height="299">
                        <thead>
                        <tr>
                            <th data-field="id" data-width="10" data-align="center">Ejemplar</th>                                
                            <th data-field="tomo" data-formatter="tomoFormatter" data-align="center">Tomo</th>
                            <th data-field="observaciones" data-formatter="observacionesFormatter" >Observaciones</th>
                        </tr>
                        </thead>
                    </table>
                </div>            
            </div>

            

            
            <div class="wizard-card">
                <h3>Adicional</h3>

                <div class="wizard-input-section">
                    <p>Información Adicional</p>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="(opcional)" id="infoadicional" name="infoadicional">
                    </div>
                </div>


                <div class="wizard-error">
                    <div class="alert alert-error">
                        <strong>Ocurrió un problema</strong> con su información.
                        Por favor revise la información e intente guardar nuevamente.
                    </div>
                </div>
    
                <div class="wizard-failure">
                    <div class="alert alert-error">
                        <strong>Ocurrió un problema</strong> al guardar el formulario.
                        Por favor intente mas tarde.
                    </div>
                </div>
    
                <div class="wizard-success">
                    <div class="alert alert-success">
                        <span class="create-server-name"></span>Operación realizada <strong>Correctamente.</strong>
                    </div>
    
                    <a class="btn btn-default create-another-server">Crear Nuevo Libro</a>
                    <span style="padding:0 10px"> o </span>
                    <a class="btn btn-success im-done">Terminar</a>
                </div>
            </div>
            
        </div>



        <table id="table-libros" data-toggle="table" data-url="inventario" data-height="630" data-pagination="true" 
            data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1">
            <thead>
                <tr>                    
                    <th data-field="operate" data-formatter="operateFormatter" data-width="10" data-events="operateEvents"></th>
                    <th data-field="titulo" data-sortable="true" data-switchable="false">Titulo</th>
                    <th data-field="subtitulo" data-sortable="true" data-visible="false">Sub-Titulo</th>
                    <th data-field="titulooriginal" data-sortable="true" data-visible="false">Titulo Original</th>
                    <th data-field="NombresAutores" data-sortable="true">Autor</th>                    
                    <th data-field="anoedicion" data-sortable="true" data-visible="false">Año Edición</th>
                    <th data-field="edicion" data-sortable="true" data-visible="false">Edición</th>
                    <th data-field="NombreEditorial" data-sortable="true">Editorial</th>
                    <th data-field="isbn" data-sortable="true">ISBN</th>
                    <th data-field="coleccion" data-sortable="true" data-visible="false">Colección</th>
                    <th data-field="created_at" data-sortable="true" data-visible="false"> Creado</th>
                    <th data-field="ejemplaresDisponibles"  data-formatter="disponiblesFormatter" data-events="totalEvents" data-sortable="true" data-switchable="false" data-align="center">Disponibles</th>
                    <th data-field="ejemplaresPrestados"  data-formatter="enprestamoFormatter" data-events="totalEvents" data-sortable="true" data-switchable="false" data-align="center">En Prestamo</th>                
                    <th data-field="ejemplaresTotal"  data-formatter="totalFormatter" data-events="totalEvents" data-sortable="true" data-switchable="false" data-align="center">Total Ejemplares</th>
                    
                    
                </tr>
            </thead>
        </table>


{{ HTML::script('js/bootbox.min.js') }}
{{ HTML::script('chosen/chosen.jquery.js') }}
{{ HTML::script('js/libros/inventario.js') }}


@stop