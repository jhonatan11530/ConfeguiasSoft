<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro De Guias Nacional</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://www.confeguias.com/wp-content/uploads/2022/01/cropped-logo.jpeg"
        type="image/png">
</head>

<body>
    <style>
        .container {
            opacity: 0.90;
            width: 100%;
            height: 150px;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 30px;
            margin: auto;
            margin-top: 20px;
        }

        .floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 30%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
            padding: 12px 16px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
    <div class="container mb-5">
        {!! Form::open(['url' => 'Registro', 'files' => 'true']) !!}
        <img src="https://www.confeguias.com/wp-content/uploads/2022/01/captura-logo-horizontal.png" width="100%"
            height="200px" alt="image not found">
        <p class="text-center">DATOS PERSONALES</p>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Nombres <span style="color: red">*</span></label>
                <input type="text" name="Nombre" placeholder="Nombre" class="form-control mb-2" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Apellidos <span style="color: red">*</span></label>
                <input type="text" name="Apellido" placeholder="Apellido" class="form-control mb-2" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Adjuntar foto (Formato JPG,PNG) <span style="color: red">*</span></label>
                <input type="file" name="AdjuntarFoto" accept="image/jpeg, image/png" class="form-control mb-3"
                    required>
            </div>
            <div class="form-group col-sm-6">
                <label>Tipo de identificacion <span style="color: red">*</span></label>
                <select name="TipoIdentificacion" class="form-control mb-2" required>
                    <option value="" selected disabled>Seleccione</option>
                    <option value="Registro civil">Registro civil(RC)</option>
                    <option value="Targeta de identidad">Tarjeta de identidad(TI)</option>
                    <option value="Cédula de ciudadania">Cédula de ciudadanía(CC)</option>
                    <option value="Targeta de extrangeria">Tarjeta de extranjería(TE)</option>
                    <option value="Cédula de extrangeria">Cédula de extranjería(CE)</option>
                    <option value="Número de identificacion tributaria">Número de identificación tributaria(NIT)
                    </option>
                    <option value="Pasaporte">Pasaporte(PP)</option>
                    <option value="Documento de identificación de extrangero">Documento de
                        identificación extranjero(DIE)</option>
                </select>
            </div>
            <div class="form-group col-sm-3">
                <label>Numero de identificacion <span style="color: red">*</span></label>
                <input class="form-control mb-2" type="number" min="0" name="NumeroIdentificacion"
                    placeholder="Numero de identificacion" required>
            </div>
            <div class="form-group col-sm-3">
                <label>Fecha de expedicion <span style="color: red">*</span></label>
                <input class="form-control mb-2" type="date" name="FechaExpedicion"required>
            </div>
            <div class="form-group col-sm-6">
                <label>Departamento <span style="color: red">*</span></label>
                <select name="departamento" id="depart" class="form-control" required>
                    <option value="" selected disabled>Seleccione...</option>
                    @foreach ($Departamento as $key => $val)
                        <option value="{{ $val->departamento }}">{{ $val->departamento }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label>Ciudad <span style="color: red">*</span></label>
                <select id="ciudad" name="ciudad" class="form-control" required>
                    <option value="" selected disabled>Seleccione...</option>
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label>Dirreccion de residencia <span style="color: red">*</span></label>
                <input type="text" name="DirreccionResidencia" class="form-control mb-2" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Celular <span style="color: red">*</span></label>
                <input type="number" name="Celular" min="0" class="form-control mb-2" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Telefono Fijo <span style="color: red">*</span></label>
                <input type="number" name="TelefonoFijo" min="0" class="form-control mb-2" required>
            </div>
        </div>
        <p class="text-center">DATOS INICIO DE SESSION</p>
        <hr>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Correo electronico <span style="color: red">*</span></label>
                <input type="email" name="Correo" class="form-control mb-2" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Contraseña <span style="color: red">*</span></label>
                <input type="password" name="Contraseña" placeholder="cree una contraseña ingresar al sistema"
                    class="form-control mb-2" required>
            </div>
        </div>
        <hr>
        <p class="text-center">DATOS PROFESIONALES</p>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>N° Tarjeta Profesional <span style="color: red">*</span></label>
                <input type="number" min="0" name="TarjetaProfesional" class="form-control mb-3" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Adjunto Tarjeta Profesional PDF <span style="color: red">*</span></label>
                <input type="file" name="AdjuntoTarjetaProfesional" accept="application/pdf"
                    class="form-control mb-3" required>
            </div>
            <div class="form-group col-sm-6">
                <label>N° Guia Registro Nacional de Turismo <span style="color: red">*</span></label>
                <input type="number" min="0" name="NGuiaRegistro" class="form-control mb-3" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Adjunto Registro Nacional de Turismo PDF <span style="color: red">*</span></label>
                <input type="file" name="DocumentoGuiaRegistro" accept="application/pdf"
                    class="form-control mb-3" required>
            </div>
            <div id="GUIA"></div>
            <div class="form-group col-sm-12">
                <label>Descripcion Del Perfil <span style="color: red">*</span></label>
                <textarea name="DescripcionPerfil" class="form-control" placeholder="Descripcion del perfil" rows="5"
                    required></textarea>
            </div>
        </div>
        {!! Form::submit('Enviar Datos', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
        </form>
    </div>
    <button class="floating"><span><a href="https://www.confeguias.com/"
                style="color: white">Atras</a></span></button>

    <!---- MODAL PROTECCION DE DATOS   ---->
    <div class="modal fade" id="ProteccionDatos" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>En cumplimiento con lo establecido en la Ley Estatutaria 1581 de 2012 y en el Decreto 1377 de
                        2013, que
                        regulan el manejo de la información de datos personales, la CONFEDERACIÓN DE GUÍAS DE TURISMO DE
                        COLOMBIA -CONFEGUIAS- pone en conocimiento la presente política de tratamiento para la
                        protección de
                        datos
                        personales, la cual regula la recolección, almacenamiento, administración y protección de
                        aquella
                        información que se reciba por parte de los titulares.</p>
                    <u><strong>Objetivo:</strong></u>
                    <p>Establecer los criterios para la recolección, almacenamiento, uso, circulación, supresión,
                        procesamiento,
                        transferencia de datos personales, en cumplimiento y desarrollo del derecho constitucional de
                        todas las
                        personas a conocer, actualizar, y rectificar de forma gratuita la información que recaude sobre
                        ellas en
                        bases de datos personales tratados por La CONFEDERACIÓN DE GUÍAS DE TURISMO DE
                        COLOMBIA -CONFEGUIAS.</p>
                    <u><strong>Tratamiento y finalidad de los datos personales</strong></u>
                    <p>La CONFEDERACIÓN DE GUÍAS DE TURISMO DE COLOMBIA -CONFEGUIAS- utiliza la información personal que
                        los titulares suministran con el fin de desarrollar sus servicios, elaborar estadísticas, enviar
                        información de noticias, actividades, entre otros relacionados con el objeto social de la
                        Asociación.
                    </p>
                    <p>Esta política aplica a todos los datos personales que CONFEGUIAS recolecta, almacena, usa,
                        administra,
                        transfiere y transmite, tales como datos de afiliados, proveedores, contratistas, empleados y
                        asistentes
                        a eventos.</p>
                    <p>La Asociación se compromete a no recabar información innecesaria y a mantener la confidencialidad
                        y
                        seguridad de la misma.
                    </p>
                    <p>El Responsable del tratamiento de los datos será La CONFEDERACIÓN DE GUÍAS DE TURISMO DE COLOMBIA
                        -CONFEGUIAS.</p>
                    <u><strong>Tratamiento de datos sensibles</strong></u>
                    <p>En caso de que la Asociación solicite este tipo de información, el titular no está en la
                        obligación de
                        suministrar dicha información por lo cual podrá abstenerse de responder preguntas respecto a
                        este tema.
                    </p>
                    <u><strong>Uso de imagen personal</strong></u>
                    <p>En desarrollo de las actividades y eventos organizados y realizados por CONFEGUIAS se podrán
                        tomar
                        fotografías, videos u otras capturas de la imagen personal del titular, quien autoriza
                        expresamente a
                        CONFEGUIAS a utilizar las imágenes para los fines previstos en la presente Política. Este uso
                        comprende,
                        pero sin limitarse, a la difusión, impresión o divulgación de imágenes en medios de
                        comunicación; redes
                        sociales; material promocional; piezas publicitarias y actividades promocionales.</p>
                    <u><strong>Obligaciones:</strong></u>
                    <p>Esta política es de obligatorio y estricto cumplimiento para La CONFEDERACIÓN DE GUÍAS DE TURISMO
                        DE
                        COLOMBIA CONFEGUIAS.</p>
                    <u><strong>Definiciones:</strong></u>
                    <p>Para la correcta interpretación, aplicación y entendimiento de la presente política de
                        tratamiento de
                        datos se establecen las definiciones que más adelanten se enuncian, las cuales buscan dar un
                        sentido
                        natural a los términos en ellas contenidos, sin excluir la interpretación gramatical de los
                        mismos. Las
                        definiciones dadas no son taxativas, y en todo caso deberían interpretarse en un sentido lógico
                        y
                        natural conforme a la estructura gramatical donde se estén empleando.</p>
                    <ul>
                        <li class="mb-3"><strong>Autorización: </strong>Consentimiento previo, expreso e
                            informado del
                            Titular
                            para llevar a cabo el Tratamiento de Datos personales.</li>
                        <li class="mb-3"><strong>Aviso de Privacidad: </strong>comunicación verbal o escrita
                            generada
                            por el
                            Responsable, dirigida al Titular para el Tratamiento de sus Datos personales, mediante la
                            cual se le
                            informa acerca de la existencia de las políticas de Tratamiento de información que le serán
                            aplicables, la forma de acceder a las mismas y las finalidades del Tratamiento que se
                            pretende dar a
                            los Datos personales</li>
                        <li class="mb-3"><strong>Bases de Datos: </strong>Conjunto organizado de datos
                            personales que
                            sea objeto
                            de Tratamiento.</li>
                        <li class="mb-3"><strong>Dato Personal o Datos Personales: </strong>Cualquier
                            información
                            vinculada o
                            que pueda asociarse a una o varias personas naturales determinadas o determinables.</li>
                        <li class="mb-3"><strong>Dato Público: </strong>Es el dato que no sea semiprivado,
                            privado o
                            sensible.
                            Son considerados Datos públicos, entre otros, los Datos relativos al estado civil de las
                            personas, a
                            su profesión u oficio y a su calidad de comerciante o de servidor público. Por su
                            naturaleza, los
                            Datos públicos pueden estar contenidos, entre otros, en registros públicos, documentos
                            públicos,
                            gacetas y boletines oficiales y sentencias judiciales debidamente ejecutoriadas que no estén
                            sometidas a reserva.</li>
                        <li class="mb-3"><strong>Responsable del Tratamiento: </strong>Será la CONFEDERACIÓN
                            DE GUÍAS DE
                            TURISMO
                            DE COLOMBIA CONFEGUIAS</li>
                        <li class="mb-3"><strong>Titular: </strong>Persona natural cuyos datos personales sean
                            objeto de
                            tratamiento.</li>
                        <li class="mb-3"><strong>Tratamiento: </strong>Cualquier operación o conjunto de
                            operaciones
                            sobre datos
                            personales, tales como la recolección, almacenamiento, uso, circulación o supresión de Datos
                            Personales.</li>
                        <li class="mb-3"><strong>Transferencia: </strong>La transferencia de datos tiene lugar
                            cuando el
                            Responsable y/o Encargado del Tratamiento de Datos Personales, ubicado en Colombia, envía la
                            información o los Datos Personales a un receptor, que a su vez es Responsable del
                            Tratamiento y se
                            encuentra dentro o fuera del país.</li>
                        <li class="mb-3"><strong>Datos Sensibles: </strong>Se entiende por Datos sensibles
                            aquellos que
                            afectan
                            la intimidad del Titular o cuyo uso indebido puede generar su discriminación, tales como
                            aquellos
                            que revelen el origen racial o étnico, la orientación política, las convicciones religiosas
                            o
                            filosóficas, la pertenencia a sindicatos, organizaciones sociales, de derechos humanos o que
                            promueva intereses de cualquier partido político o que garanticen los derechos y garantías
                            de
                            partidos políticos de oposición, así como los Datos relativos a la salud, a la vida sexual,
                            y los
                            Datos biométricos.</li>
                    </ul>
                    <u><strong>Responsable del tratamiento:</strong></u>
                    <p>La persona jurídica Responsable del tratamiento de datos personales y, por tanto, de la base de
                        datos en
                        la cual se encuentren ubicados los mismos, es la CONFEDERACIÓN DE GUÍAS DE TURISMO DE COLOMBIA
                        -CONFEGUIAS-
                        entidad sin ánimo de lucro, identificada con el NIT. ##### ### ##### con domicilio en la ciudad
                        de ####
                        ####, República de Colombia.</p>
                    <p><strong>Página web: </strong><a
                            href="http://https://confeguias.com/">https://confeguias.com/</a>
                    </p>
                    <p><strong>Dirección: </strong>#### #### #####</p>
                    <p><strong>Correo electrónico: </strong><a href="mailto:">correo@soporte.com</a></p>
                    <p><strong>Teléfono: </strong><a href="tel:+57">(+57 2) ### ### ###</a></p>
                    <u><strong>Derechos de los titulares</strong></u>
                    <p>Conforme al artículo 8° de la Ley 1581 de 2012, los titulares de la información tienen los
                        siguientes
                        derechos:</p>
                    <ul style="list-style:none">
                        <li class="mb-2"><strong>a)</strong> Conocer, actualizar y rectificar sus datos
                            personales
                            frente a los
                            responsables del Tratamiento o Encargados del Tratamiento. Este derecho se podrá ejercer,
                            entre
                            otros frente a datos parciales, inexactos, incompletos, fraccionados, que induzcan a error,
                            o
                            aquellos cuyo Tratamiento esté expresamente prohibido o no haya sido autorizado.</li>
                        <li class="mb-2"><strong>b)</strong> Solicitar prueba de la autorización otorgada al
                            Responsable
                            del
                            Tratamiento salvo cuando expresamente se exceptúe como requisito para el Tratamiento, de
                            conformidad
                            con lo previsto en el artículo 10 de la Ley 1581 de 2012.</li>
                        <li class="mb-2"><strong>c)</strong> Ser informado por el Responsable del Tratamiento
                            o el
                            Encargado del
                            Tratamiento, previa solicitud, respecto del uso que le ha dado a sus datos personales.</li>
                        <li class="mb-2"><strong>d)</strong> Presentar ante la Superintendencia de Industria y
                            Comercio
                            quejas
                            por infracciones a lo dispuesto en la Ley 1581 de 2012 y las demás normas que la modifiquen,
                            adicionen o complementen.</li>
                        <li class="mb-2"><strong>e)</strong> Revocar la autorización y/o solicitar la
                            supresión del dato
                            cuando
                            en el Tratamiento no se respeten los principios, derechos y garantías constitucionales y
                            legales. La
                            revocatoria y/o supresión procederá cuando la Superintendencia de Industria y Comercio haya
                            determinado que en el Tratamiento el Responsable o Encargado han incurrido en conductas
                            contrarias a
                            esta ley y a la Constitución;</li>
                        <li class="mb-2"><strong>f)</strong> Acceder en forma gratuita a sus datos personales
                            que hayan
                            sido
                            objeto de Tratamiento.</li>
                        <li class="mb-2"><strong>g)</strong> Conocer el carácter facultativo de las respuestas
                            a las
                            preguntas
                            que le sean hechas, cuando versen sobre datos sensibles, entendidos éstos como aquellos que
                            afecten
                            la intimidad del Titular o cuyo uso indebido puede generar discriminación o, sobre los datos
                            de los
                            niños, niñas y adolescentes.</li>
                    </ul>
                    <u><strong>Atención de peticiones, consultas y reclamo</strong></u>
                    <p>El departamento jurídico será el área encargada de la atención de las peticiones, consultas y
                        reclamos
                        ante la cual el titular de la información podrá ejercer sus derechos.</p>
                    <p>Por tanto, en caso de querer conocer, actualizar, modificar, rectificar, corregir o suprimir la
                        información suministrada en cualquier momento, el titular podrá comunicarse a través de los
                        siguientes
                        canales:</p>

                    <p><strong>Correo electrónico: </strong><a href="mailto:">correo@soporte.com</a></p>
                    <p><strong>Dirección: </strong>#### #### #####</p>
                    <p><strong>Teléfono: </strong><a href="tel:+57">(+57 2) ### ### ###</a></p>

                    <u><strong>Procedimiento para el ejercicio del derecho de habeas data:</strong></u>
                    <p>En cumplimiento de las normas sobre protección de datos personales La CONFEDERACIÓN DE GUÍAS DE
                        TURISMO
                        DE COLOMBIA -CONFEGUIAS- presenta el procedimiento y requisitos mínimos para el ejercicio de sus
                        derechos:</p>
                    <P>Los titulares, sus causahabientes, el representante y/o apoderado o por estipulación a favor de
                        otro,
                        podrán consultar la información personal del titular que repose en cualquier base de datos.</P>
                    <P>Para la radicación y atención de su solicitud le solicitamos suministrar la siguiente
                        información:</P>
                    <ul>
                        <li>Nombre completo y apellidos.</li>
                        <li>Datos de contacto (Dirección física y/o electrónica y teléfonos de contacto).</li>
                        <li>Medios para recibir respuesta a su solicitud.</li>
                        <li>Motivo(s)/hecho(s) que dan lugar al reclamo con una breve descripción del derecho que desea
                            ejercer
                            (conocer, actualizar, rectificar, solicitar prueba de la autorización otorgada, revocarla,
                            suprimir,
                            acceder a la información) Firma (si aplica) y número de identificación.</li>
                    </ul>
                    <p>La consulta será atendida en un término máximo de diez (10) días hábiles contados a partir de la
                        fecha de
                        recibo de la misma. Cuando no fuere posible atender la consulta dentro de dicho término, se
                        informará al
                        interesado, expresando los motivos de la demora y señalando la fecha en que se atenderá su
                        consulta, la
                        cual en ningún caso superará los cinco (5) días hábiles siguientes al vencimiento del primer
                        término.
                    </p>
                    <p>Cuando el titular o sus causahabientes realicen un reclamo por considerar que la información
                        contenida en
                        una base de datos debe ser objeto de corrección, actualización o supresión, o cuando adviertan
                        un
                        presunto incumplimiento de la Ley, podrán presentar un reclamo, el cual deberá contener la
                        siguiente
                        información:</p>
                    <ul>
                        <li>Identificación del titular, del Causahabiente o del apoderado.</li>
                        <li>La descripción de los hechos que dan lugar al reclamo.</li>
                        <li>La dirección.</li>
                        <li>Los documentos que se quiera hacer valer.</li>
                    </ul>
                    <p>Si el reclamo resulta incompleto, se requerirá al interesado dentro de los cinco (5) días
                        siguientes a la
                        recepción del reclamo para que subsane las fallas. Transcurridos dos (2) meses desde la fecha
                        del
                        requerimiento, sin que el solicitante presente la información requerida, se entenderá que ha
                        desistido
                        del reclamo.</p>
                    <p>El término máximo para atender el reclamo será de quince (15) días hábiles contados a partir del
                        día
                        siguiente a la fecha de su recibo. Cuando no fuere posible atender el reclamo dentro de dicho
                        término,
                        se informará al interesado los motivos de la demora y la fecha en que se atenderá su reclamo, la
                        cual no
                        superará los ocho (8) días hábiles siguientes al vencimiento del primer término.</p>
                    <p>Una vez cumplidos los términos señalados por la Ley 1581 de 2012 y las demás normas que la
                        reglamenten o
                        complementen, el Titular al que se deniegue, total o parcialmente, el ejercicio de los derechos
                        de
                        acceso, actualización, rectificación, supresión y revocación, podrá poner su caso en
                        conocimiento de la
                        Superintendencia de Industria y Comercio –Delegatura para la Protección de Datos Personales-.
                    </p>
                    <u><strong>Autorización:</strong></u>
                    <p>El tratamiento de datos personales realizados por La CONFEDERACIÓN DE GUÍAS DE TURISMO DE
                        COLOMBIA
                        -CONFEGUIAS- implica una autorización previa e informada por parte del titular, salvo que los
                        datos sean
                        públicos.</p>
                    <p>Por lo anterior, La CONFEDERACIÓN DE GUÍAS DE TURISMO DE COLOMBIA -CONFEGUIAS- adoptará un
                        procedimiento
                        para solicitar la autorización para la recolección de datos personales e informará las
                        finalidades para
                        las cuales serán almacenados los mismos, garantizándoles la posibilidad de verificar el
                        otorgamiento de
                        dicha autorización.</p>
                    <p>La autorización podrá darse verbalmente, por escrito o cualquier otro formato que permita
                        garantizar su
                        posterior consulta.</p>
                    <p>Declara que ha consultado, conoce y acepta la Política de Tratamiento de Datos Personales de La
                        CONFEDERACIÓN DE GUÍAS DE TURISMO DE COLOMBIA -CONFEGUIAS- publicada en el link:
                        https://anato.org/politica-datos-personales/, y que la información proporcionada es veraz,
                        completa,
                        exacta, actualizada y verificable. Mediante la aceptación del presente documento, manifiesta que
                        reconoce y acepta que cualquier consulta o reclamación relacionada con el Tratamiento de sus
                        datos
                        personales podrá ser elevada ante La CONFEDERACIÓN DE GUÍAS DE TURISMO DE COLOMBIA -CONFEGUIAS-,
                        como
                        Responsable del Tratamiento, cuya página web es: <a
                            href="https://confeguias.com/">https://confeguias.com/</a> y su teléfono de atención es <a
                            href="tel:+57">(57-2) ##### #### ####</a>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modal-check" name='modal-check'
                        data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!---- MODAL BIENVENIDO ---->
    <div class="modal fade" id="PresentacionModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bienvenidos a Confederación de Guías de Turismo de
                        Colombia
                        CONFEGUIAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apreciados colegas:</p>
                    <p>Desde la Confederación de Guías de Turismo de Colombia – CONFEGUIAS, estamos trabajando para
                        lograr
                        construir un gremio unido y propositivo que trabaje en favor del bienestar colectivo de todos
                        los Guías de Turismo del país, la defensa de sus derechos profesionales, el impulso al
                        desarrollo y la excelencia de la Profesión del Guía de Turismo y, por consiguiente, en pro del
                        engrandecimiento de Colombia a través de la industria turística nacional. </p>
                    <p>Para ello, la Confederación ha desarrollado este formulario con el fin de conseguir por primera
                        vez una base de datos de los Guías Profesionales de Colombia, que servirá para desarrollar los
                        programas de competitividad, capacitación y bienestar que se han venido trabajando en
                        CONFEGUIAS.</p>
                    <p>Invitamos a todos nuestros colegas agremiados y no agremiados a diligenciar de manera muy
                        aplicada y diligente este formulario, que tiene como objetivo además de reconocernos, poder
                        entregar una información exacta y confiable a las agencias de viajes y a los turistas de los
                        Guías Profesionales con su tarjeta profesional y registro nacional de turismo activo, sus
                        especializaciones, ubicación, contacto, experiencia y cualificaciones.
                        Plazo máximo para envío: <strong>30 Octubre de 2021</strong>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="modal-check" name='modal-check'
                        data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!---- MODAL REGISTRO ---->
    <div class="modal fade" id="RegistroModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gracias por Registrarse Confederación de Guías de
                        Turismo
                        de Colombia CONFEGUIAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apreciados colegas:</p>
                    <p>Gracias por dar respuesta oportuna y apoyar esta iniciativa gremial que nos permitirá obtener por
                        primera vez una base de datos completa, confiable y accesible de los Guías Profesionales de
                        Colombia.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="reload()">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!---- MODAL ERROR REGISTRO ---->
    <div class="modal fade" id="ErrorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error Los Datos Estas Vacios !!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Porfavor llene todos los campos vacios.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function reload() {
            location.reload();
        }
        $(document).ready(function() {
            //$("#PresentacionModal").modal("show");
            $('select#depart').change(function() {
                $("#ciudad").children().remove();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var cursos = $("#ciudad");
                $.ajax({
                    url: '/Registro/filtrar',
                    type: 'post',
                    data: {
                        _token: CSRF_TOKEN,
                        departamento: $("#depart").val()
                    },
                    success: function(data) {
                        cursos.append(data);
                    }
                })
            })

            $("#clickIdioma").on('click', function() {
                var html =
                    `
                <label>Certificados de Idiomas</label>
                    <input type="text" name="TituloCertificadosIdiomas[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                    <input type="file" name="CertificadosPDFIdiomas[]" accept="application/pdf" class="form-control mb-3">`;
                $("#Idiomas").append(html);
            })
            $("#clickAcademicos").on('click', function() {
                var html =
                    `
                <label>Certificados Academicos</label>
                    <input type="text" name="TituloCertificadosAcademicos[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                    <input type="file" name="CertificadosPDFAcademicos[]" accept="application/pdf" class="form-control mb-3">`;
                $("#Academicos").append(html);
            })
            $("#clickEstudios").on('click', function() {
                var html =
                    `
                <label>Certificados De otros Estudios</label>
                    <input type="text" name="TituloCertificadosEstudios[]" class="form-control mb-2" placeholder="Titulo del Certificado">
                    <input type="file" name="CertificadosPDFEstudios[]" accept="application/pdf" class="form-control mb-3">`;
                $("#Estudios").append(html);
            })
        })
    </script>
</body>

</html>
