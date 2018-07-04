<div class="panel panel-default">
    <div class="panel-body">
        {!! Form::open(['id'=>'frm','files' => true]) !!}
        <input id="id" name="id" type="hidden" class="input-product">
        <div class="row">
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading personal">
                        <h4 class="panel-title">Información</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="title" class="control-label">Documento*</label>
                                    <input type="text" class="form-control input-product input-sm input-number" id="document" name='document' required autofocus="" maxlength="15">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="description" class="control-label">Primer Apellido*</label>
                                    <input type="text" class="form-control input-product input-sm input-alpha" id="last_name" name='last_name' required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email" class="control-label">Segundo Apellido*</label>
                                    <input type="text" class="form-control input-product input-sm input-alpha" id="second_surname" name='second_surname'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email" class="control-label">Primero Nombre*</label>
                                    <input type="text" class="form-control input-product input-sm input-alpha" id="first_name" name='first_name' required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email" class="control-label">Segundo Nombre*</label>
                                    <input type="text" class="form-control input-product input-sm input-alpha" id="second_name" name='second_name' data-type="number">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email" class="control-label">Genero*</label>
                                    <input type="text" class="form-control input-product input-sm" id="gender" name='gender' required maxlength="1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Fecha de nacimiento</label>
                                    <input type="text" class="form-control input-product input-number" id="birth_date" name='birth_date' required input-number placeholder="ddmmyyyy" maxlength="8">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Tipo de Sangre</label>
                                    <input type="text" class="form-control input-product" id="type_blood" name='type_blood' maxlength="3" required="">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">EPS</label>
                                    <div class="input-group input-group-sm">
                                        <select class="form-control input-product" id="eps_id" name='eps_id'>
                                            <option value="0">Seleccione</option>
                                            @foreach($eps as $val)
                                            <option value="{{$val->code}}">{{$val->description}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('eps', 'eps_id')">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">ARL</label>
                                    <div class="input-group input-group-sm">
                                        <select class="form-control input-product" id="arl_id" name='arl_id'>
                                            <option value="0">Seleccione</option>
                                            @foreach($arl as $val)
                                            <option value="{{$val->code}}">{{$val->description}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('arl', 'arl_id')">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Torre</label>
                                    <div class="input-group input-group-sm">
                                        <select class="form-control input-product" id="torre_id" name='torre_id'>
                                            <option value="0">Seleccione</option>
                                            @foreach($torre as $val)
                                            <option value="{{$val->code}}">{{$val->description}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('torre', 'torre_id')">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Piso</label>
                                            <div class="input-group input-group-sm">
                                                <select class="form-control input-product" id="roof_id" name='roof_id'>
                                                    <option value="0">Seleccione</option>
                                                    @foreach($roof as $val)
                                                    <option value="{{$val->code}}">{{$val->description}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('roof', 'roof_id')">
                                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Apt</label>
                                            <div class="input-group input-group-sm">
                                                <select class="form-control input-product" id="apartment_id" name='apartment_id'>
                                                    <option value="0">Seleccione</option>
                                                    @foreach($apartment as $val)
                                                    <option value="{{$val->code}}">{{$val->description}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('apartment', 'apartment_id')">
                                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Tipo de Visita</label>
                                    <div class="input-group input-group-sm">
                                        <select class="form-control input-product" id="type_visit_id" name='type_visit_id'>
                                            <option value="0">Seleccione</option>
                                            @foreach($type_visit as $val)
                                            <option value="{{$val->code}}">{{$val->description}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('type_visit', 'type_visit_id')">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Placa</label>
                                    <input type="text" class="form-control input-product" id="plate" name='plate'>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Numero de parqueadero Asignado</label>
                                    <div class="input-group input-group-sm">
                                        <select class="form-control input-product" id="park_id" name='park_id'>
                                            <option value="0">Seleccione</option>
                                            @foreach($parks as $val)
                                            <option value="{{$val->code}}">{{$val->description}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('park', 'park_id')">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Tipo de Vehiculo</label>
                                    <div class="input-group input-group-sm">
                                        <select class="form-control input-product" id="type_vehicle_id" name='type_vehicle_id'>
                                            <option value="0">Seleccione</option>
                                            @foreach($type_vehicle as $val)
                                            <option value="{{$val->code}}">{{$val->description}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('type_vehicle', 'type_vehicle_id')">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Marca</label>
                                    <div class="input-group input-group-sm">
                                        <select class="form-control input-product" id="mark_id" name='mark_id'>
                                            <option value="0">Seleccione</option>
                                            @foreach($mark as $val)
                                            <option value="{{$val->code}}">{{$val->description}}</option>
                                            @endforeach
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button" onclick="obj.showModalParameter('mark', 'mark_id')">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Serie</label>
                                    <input type="text" class="form-control input-product" id="text_serie" name='text_serie'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Persona de contacto</label>
                                    <input type="text" class="form-control input-product" id="person_contact" name='person_contact'>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Telefono de contacto</label>
                                    <input type="text" class="form-control input-product input-number" id="phone_contact" name='phone_contact'>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Toma algun Medicamento</label>
                                    <input type="text" class="form-control input-product" id="medicine" name='medicine'>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Observaciones</label>
                                    <textarea class="form-control input-product" id="observation" name='observation'></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <canvas id="canvas" class="hidden" width="400" height="300" style="border:1px solid #ccc;">
                </canvas>
                <div class="row" style="padding-bottom: 20px">
                    <div class="col-lg-6">
                        <video id="cam" width="300" height="230" autoplay="autoplay" style="border:1px solid #ccc;border-radius: 10px" >
                        </video>
                    </div>

                    <div class="col-lg-2" >
                        <img src="" id="img_person" width="300px">

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-sm" id='btnNew' style="width: 100%;padding-left: 5px;background-color: rgba(0,0,0,0.2); 
                                border:1px solid #28a745;border-radius: 5px;
                                color:white;font-size: 17px">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"> Ingresar</span>
                        </button>
                    </div>
                    <div class="col-lg-3">
                        <button type="button" class="btn btn-sm " id='btnSave' style="width: 100%;padding-left: 5px;background-color: rgba(0,0,0,0.2); 
                                border:1px solid #007bff;border-radius: 5px;
                                color:white;font-size: 17px">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"> Salida</span>
                        </button>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 20px">

                </div>
            </div>
        </div>


        {!!Form::close()!!}
    </div>
</div>

