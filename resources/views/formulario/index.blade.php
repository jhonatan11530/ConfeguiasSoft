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
                    <option value="C??dula de ciudadania">C??dula de ciudadan??a(CC)</option>
                    <option value="Targeta de extrangeria">Tarjeta de extranjer??a(TE)</option>
                    <option value="C??dula de extrangeria">C??dula de extranjer??a(CE)</option>
                    <option value="N??mero de identificacion tributaria">N??mero de identificaci??n tributaria(NIT)
                    </option>
                    <option value="Pasaporte">Pasaporte(PP)</option>
                    <option value="Documento de identificaci??n de extrangero">Documento de
                        identificaci??n extranjero(DIE)</option>
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
            <div class="form-group col-sm-3">
                <label>Celular <span style="color: red">*</span></label>
                <input type="number" name="Celular" min="0" class="form-control mb-2" required>
            </div>
            <div class="form-group col-sm-3">
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
                <label>Contrase??a <span style="color: red">*</span></label>
                <input type="password" name="Contrase??a" placeholder="cree una contrase??a ingresar al sistema"
                    class="form-control mb-2" required>
            </div>
        </div>
        <hr>
        <p class="text-center">DATOS PROFESIONALES</p>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>N?? Tarjeta Profesional <span style="color: red">*</span></label>
                <input type="number" min="0" name="TarjetaProfesional" class="form-control mb-3" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Adjunto Tarjeta Profesional PDF <span style="color: red">*</span></label>
                <input type="file" name="AdjuntoTarjetaProfesional" accept="application/pdf"
                    class="form-control mb-3" required>
            </div>
            <div class="form-group col-sm-6">
                <label>N?? Guia Registro Nacional de Turismo <span style="color: red">*</span></label>
                <input type="number" min="0" name="NGuiaRegistro" class="form-control mb-3" required>
            </div>
            <div class="form-group col-sm-6">
                <label>Adjunto Registro Nacional de Turismo PDF <span style="color: red">*</span></label>
                <input type="file" name="DocumentoGuiaRegistro" accept="application/pdf"
                    class="form-control mb-3" required>
            </div>
            <div class="form-group col-sm-12">
                <label>Descripcion Del Perfil <span style="color: red">*</span></label>
                <textarea name="DescripcionPerfil" class="form-control" placeholder="Descripcion del perfil" rows="5"
                    required></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="AceptarTerminos" value="SI">
                <label class="form-check-label">Aceptar Pol??ticas y procedimientos para el tratamiento de datos
                    personales <span style="color: red">*</span></label><a href="#"> <span data-toggle="modal"
                        data-target="#ProteccionDatos">LEER POL??TICAS DE DATOS</span></a>
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
                    <h5 class="modal-title" id="exampleModalLabel">POL??TICA DE TRATAMIENTO DE DATOS PERSONALES</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>En cumplimiento con lo establecido en la Ley Estatutaria 1581 de 2012 y en el Decreto 1377 de
                        2013, que
                        regulan el manejo de la informaci??n de datos personales, la CONFEDERACI??N DE GU??AS DE TURISMO DE
                        COLOMBIA -CONFEGUIAS- pone en conocimiento la presente pol??tica de tratamiento para la
                        protecci??n de
                        datos
                        personales, la cual regula la recolecci??n, almacenamiento, administraci??n y protecci??n de
                        aquella
                        informaci??n que se reciba por parte de los titulares.</p>
                    <u><strong>Objetivo:</strong></u>
                    <p>Establecer los criterios para la recolecci??n, almacenamiento, uso, circulaci??n, supresi??n,
                        procesamiento,
                        transferencia de datos personales, en cumplimiento y desarrollo del derecho constitucional de
                        todas las
                        personas a conocer, actualizar, y rectificar de forma gratuita la informaci??n que recaude sobre
                        ellas en
                        bases de datos personales tratados por La CONFEDERACI??N DE GU??AS DE TURISMO DE
                        COLOMBIA -CONFEGUIAS.</p>
                    <u><strong>Tratamiento y finalidad de los datos personales</strong></u>
                    <p>La CONFEDERACI??N DE GU??AS DE TURISMO DE COLOMBIA -CONFEGUIAS- utiliza la informaci??n personal que
                        los titulares suministran con el fin de desarrollar sus servicios, elaborar estad??sticas, enviar
                        informaci??n de noticias, actividades, entre otros relacionados con el objeto social de la
                        Asociaci??n.
                    </p>
                    <p>Esta pol??tica aplica a todos los datos personales que CONFEGUIAS recolecta, almacena, usa,
                        administra,
                        transfiere y transmite, tales como datos de afiliados, proveedores, contratistas, empleados y
                        asistentes
                        a eventos.</p>
                    <p>La Asociaci??n se compromete a no recabar informaci??n innecesaria y a mantener la confidencialidad
                        y
                        seguridad de la misma.
                    </p>
                    <p>El Responsable del tratamiento de los datos ser?? La CONFEDERACI??N DE GU??AS DE TURISMO DE COLOMBIA
                        -CONFEGUIAS.</p>
                    <u><strong>Tratamiento de datos sensibles</strong></u>
                    <p>En caso de que la Asociaci??n solicite este tipo de informaci??n, el titular no est?? en la
                        obligaci??n de
                        suministrar dicha informaci??n por lo cual podr?? abstenerse de responder preguntas respecto a
                        este tema.
                    </p>
                    <u><strong>Uso de imagen personal</strong></u>
                    <p>En desarrollo de las actividades y eventos organizados y realizados por CONFEGUIAS se podr??n
                        tomar
                        fotograf??as, videos u otras capturas de la imagen personal del titular, quien autoriza
                        expresamente a
                        CONFEGUIAS a utilizar las im??genes para los fines previstos en la presente Pol??tica. Este uso
                        comprende,
                        pero sin limitarse, a la difusi??n, impresi??n o divulgaci??n de im??genes en medios de
                        comunicaci??n; redes
                        sociales; material promocional; piezas publicitarias y actividades promocionales.</p>
                    <u><strong>Obligaciones:</strong></u>
                    <p>Esta pol??tica es de obligatorio y estricto cumplimiento para La CONFEDERACI??N DE GU??AS DE TURISMO
                        DE
                        COLOMBIA CONFEGUIAS.</p>
                    <u><strong>Definiciones:</strong></u>
                    <p>Para la correcta interpretaci??n, aplicaci??n y entendimiento de la presente pol??tica de
                        tratamiento de
                        datos se establecen las definiciones que m??s adelanten se enuncian, las cuales buscan dar un
                        sentido
                        natural a los t??rminos en ellas contenidos, sin excluir la interpretaci??n gramatical de los
                        mismos. Las
                        definiciones dadas no son taxativas, y en todo caso deber??an interpretarse en un sentido l??gico
                        y
                        natural conforme a la estructura gramatical donde se est??n empleando.</p>
                    <ul>
                        <li class="mb-3"><strong>Autorizaci??n: </strong>Consentimiento previo, expreso e
                            informado del
                            Titular
                            para llevar a cabo el Tratamiento de Datos personales.</li>
                        <li class="mb-3"><strong>Aviso de Privacidad: </strong>comunicaci??n verbal o escrita
                            generada
                            por el
                            Responsable, dirigida al Titular para el Tratamiento de sus Datos personales, mediante la
                            cual se le
                            informa acerca de la existencia de las pol??ticas de Tratamiento de informaci??n que le ser??n
                            aplicables, la forma de acceder a las mismas y las finalidades del Tratamiento que se
                            pretende dar a
                            los Datos personales</li>
                        <li class="mb-3"><strong>Bases de Datos: </strong>Conjunto organizado de datos
                            personales que
                            sea objeto
                            de Tratamiento.</li>
                        <li class="mb-3"><strong>Dato Personal o Datos Personales: </strong>Cualquier
                            informaci??n
                            vinculada o
                            que pueda asociarse a una o varias personas naturales determinadas o determinables.</li>
                        <li class="mb-3"><strong>Dato P??blico: </strong>Es el dato que no sea semiprivado,
                            privado o
                            sensible.
                            Son considerados Datos p??blicos, entre otros, los Datos relativos al estado civil de las
                            personas, a
                            su profesi??n u oficio y a su calidad de comerciante o de servidor p??blico. Por su
                            naturaleza, los
                            Datos p??blicos pueden estar contenidos, entre otros, en registros p??blicos, documentos
                            p??blicos,
                            gacetas y boletines oficiales y sentencias judiciales debidamente ejecutoriadas que no est??n
                            sometidas a reserva.</li>
                        <li class="mb-3"><strong>Responsable del Tratamiento: </strong>Ser?? la CONFEDERACI??N
                            DE GU??AS DE
                            TURISMO
                            DE COLOMBIA CONFEGUIAS</li>
                        <li class="mb-3"><strong>Titular: </strong>Persona natural cuyos datos personales sean
                            objeto de
                            tratamiento.</li>
                        <li class="mb-3"><strong>Tratamiento: </strong>Cualquier operaci??n o conjunto de
                            operaciones
                            sobre datos
                            personales, tales como la recolecci??n, almacenamiento, uso, circulaci??n o supresi??n de Datos
                            Personales.</li>
                        <li class="mb-3"><strong>Transferencia: </strong>La transferencia de datos tiene lugar
                            cuando el
                            Responsable y/o Encargado del Tratamiento de Datos Personales, ubicado en Colombia, env??a la
                            informaci??n o los Datos Personales a un receptor, que a su vez es Responsable del
                            Tratamiento y se
                            encuentra dentro o fuera del pa??s.</li>
                        <li class="mb-3"><strong>Datos Sensibles: </strong>Se entiende por Datos sensibles
                            aquellos que
                            afectan
                            la intimidad del Titular o cuyo uso indebido puede generar su discriminaci??n, tales como
                            aquellos
                            que revelen el origen racial o ??tnico, la orientaci??n pol??tica, las convicciones religiosas
                            o
                            filos??ficas, la pertenencia a sindicatos, organizaciones sociales, de derechos humanos o que
                            promueva intereses de cualquier partido pol??tico o que garanticen los derechos y garant??as
                            de
                            partidos pol??ticos de oposici??n, as?? como los Datos relativos a la salud, a la vida sexual,
                            y los
                            Datos biom??tricos.</li>
                    </ul>
                    <u><strong>Responsable del tratamiento:</strong></u>
                    <p>La persona jur??dica Responsable del tratamiento de datos personales y, por tanto, de la base de
                        datos en
                        la cual se encuentren ubicados los mismos, es la CONFEDERACI??N DE GU??AS DE TURISMO DE COLOMBIA
                        -CONFEGUIAS-
                        entidad sin ??nimo de lucro, identificada con el NIT. ##### ### ##### con domicilio en la ciudad
                        de ####
                        ####, Rep??blica de Colombia.</p>
                    <p><strong>P??gina web: </strong><a
                            href="http://https://confeguias.com/">https://confeguias.com/</a>
                    </p>
                    <p><strong>Direcci??n: </strong>#### #### #####</p>
                    <p><strong>Correo electr??nico: </strong><a href="mailto:">correo@soporte.com</a></p>
                    <p><strong>Tel??fono: </strong><a href="tel:+57">(+57 2) ### ### ###</a></p>
                    <u><strong>Derechos de los titulares</strong></u>
                    <p>Conforme al art??culo 8?? de la Ley 1581 de 2012, los titulares de la informaci??n tienen los
                        siguientes
                        derechos:</p>
                    <ul style="list-style:none">
                        <li class="mb-2"><strong>a)</strong> Conocer, actualizar y rectificar sus datos
                            personales
                            frente a los
                            responsables del Tratamiento o Encargados del Tratamiento. Este derecho se podr?? ejercer,
                            entre
                            otros frente a datos parciales, inexactos, incompletos, fraccionados, que induzcan a error,
                            o
                            aquellos cuyo Tratamiento est?? expresamente prohibido o no haya sido autorizado.</li>
                        <li class="mb-2"><strong>b)</strong> Solicitar prueba de la autorizaci??n otorgada al
                            Responsable
                            del
                            Tratamiento salvo cuando expresamente se except??e como requisito para el Tratamiento, de
                            conformidad
                            con lo previsto en el art??culo 10 de la Ley 1581 de 2012.</li>
                        <li class="mb-2"><strong>c)</strong> Ser informado por el Responsable del Tratamiento
                            o el
                            Encargado del
                            Tratamiento, previa solicitud, respecto del uso que le ha dado a sus datos personales.</li>
                        <li class="mb-2"><strong>d)</strong> Presentar ante la Superintendencia de Industria y
                            Comercio
                            quejas
                            por infracciones a lo dispuesto en la Ley 1581 de 2012 y las dem??s normas que la modifiquen,
                            adicionen o complementen.</li>
                        <li class="mb-2"><strong>e)</strong> Revocar la autorizaci??n y/o solicitar la
                            supresi??n del dato
                            cuando
                            en el Tratamiento no se respeten los principios, derechos y garant??as constitucionales y
                            legales. La
                            revocatoria y/o supresi??n proceder?? cuando la Superintendencia de Industria y Comercio haya
                            determinado que en el Tratamiento el Responsable o Encargado han incurrido en conductas
                            contrarias a
                            esta ley y a la Constituci??n;</li>
                        <li class="mb-2"><strong>f)</strong> Acceder en forma gratuita a sus datos personales
                            que hayan
                            sido
                            objeto de Tratamiento.</li>
                        <li class="mb-2"><strong>g)</strong> Conocer el car??cter facultativo de las respuestas
                            a las
                            preguntas
                            que le sean hechas, cuando versen sobre datos sensibles, entendidos ??stos como aquellos que
                            afecten
                            la intimidad del Titular o cuyo uso indebido puede generar discriminaci??n o, sobre los datos
                            de los
                            ni??os, ni??as y adolescentes.</li>
                    </ul>
                    <u><strong>Atenci??n de peticiones, consultas y reclamo</strong></u>
                    <p>El departamento jur??dico ser?? el ??rea encargada de la atenci??n de las peticiones, consultas y
                        reclamos
                        ante la cual el titular de la informaci??n podr?? ejercer sus derechos.</p>
                    <p>Por tanto, en caso de querer conocer, actualizar, modificar, rectificar, corregir o suprimir la
                        informaci??n suministrada en cualquier momento, el titular podr?? comunicarse a trav??s de los
                        siguientes
                        canales:</p>

                    <p><strong>Correo electr??nico: </strong><a href="mailto:">correo@soporte.com</a></p>
                    <p><strong>Direcci??n: </strong>#### #### #####</p>
                    <p><strong>Tel??fono: </strong><a href="tel:+57">(+57 2) ### ### ###</a></p>

                    <u><strong>Procedimiento para el ejercicio del derecho de habeas data:</strong></u>
                    <p>En cumplimiento de las normas sobre protecci??n de datos personales La CONFEDERACI??N DE GU??AS DE
                        TURISMO
                        DE COLOMBIA -CONFEGUIAS- presenta el procedimiento y requisitos m??nimos para el ejercicio de sus
                        derechos:</p>
                    <P>Los titulares, sus causahabientes, el representante y/o apoderado o por estipulaci??n a favor de
                        otro,
                        podr??n consultar la informaci??n personal del titular que repose en cualquier base de datos.</P>
                    <P>Para la radicaci??n y atenci??n de su solicitud le solicitamos suministrar la siguiente
                        informaci??n:</P>
                    <ul>
                        <li>Nombre completo y apellidos.</li>
                        <li>Datos de contacto (Direcci??n f??sica y/o electr??nica y tel??fonos de contacto).</li>
                        <li>Medios para recibir respuesta a su solicitud.</li>
                        <li>Motivo(s)/hecho(s) que dan lugar al reclamo con una breve descripci??n del derecho que desea
                            ejercer
                            (conocer, actualizar, rectificar, solicitar prueba de la autorizaci??n otorgada, revocarla,
                            suprimir,
                            acceder a la informaci??n) Firma (si aplica) y n??mero de identificaci??n.</li>
                    </ul>
                    <p>La consulta ser?? atendida en un t??rmino m??ximo de diez (10) d??as h??biles contados a partir de la
                        fecha de
                        recibo de la misma. Cuando no fuere posible atender la consulta dentro de dicho t??rmino, se
                        informar?? al
                        interesado, expresando los motivos de la demora y se??alando la fecha en que se atender?? su
                        consulta, la
                        cual en ning??n caso superar?? los cinco (5) d??as h??biles siguientes al vencimiento del primer
                        t??rmino.
                    </p>
                    <p>Cuando el titular o sus causahabientes realicen un reclamo por considerar que la informaci??n
                        contenida en
                        una base de datos debe ser objeto de correcci??n, actualizaci??n o supresi??n, o cuando adviertan
                        un
                        presunto incumplimiento de la Ley, podr??n presentar un reclamo, el cual deber?? contener la
                        siguiente
                        informaci??n:</p>
                    <ul>
                        <li>Identificaci??n del titular, del Causahabiente o del apoderado.</li>
                        <li>La descripci??n de los hechos que dan lugar al reclamo.</li>
                        <li>La direcci??n.</li>
                        <li>Los documentos que se quiera hacer valer.</li>
                    </ul>
                    <p>Si el reclamo resulta incompleto, se requerir?? al interesado dentro de los cinco (5) d??as
                        siguientes a la
                        recepci??n del reclamo para que subsane las fallas. Transcurridos dos (2) meses desde la fecha
                        del
                        requerimiento, sin que el solicitante presente la informaci??n requerida, se entender?? que ha
                        desistido
                        del reclamo.</p>
                    <p>El t??rmino m??ximo para atender el reclamo ser?? de quince (15) d??as h??biles contados a partir del
                        d??a
                        siguiente a la fecha de su recibo. Cuando no fuere posible atender el reclamo dentro de dicho
                        t??rmino,
                        se informar?? al interesado los motivos de la demora y la fecha en que se atender?? su reclamo, la
                        cual no
                        superar?? los ocho (8) d??as h??biles siguientes al vencimiento del primer t??rmino.</p>
                    <p>Una vez cumplidos los t??rminos se??alados por la Ley 1581 de 2012 y las dem??s normas que la
                        reglamenten o
                        complementen, el Titular al que se deniegue, total o parcialmente, el ejercicio de los derechos
                        de
                        acceso, actualizaci??n, rectificaci??n, supresi??n y revocaci??n, podr?? poner su caso en
                        conocimiento de la
                        Superintendencia de Industria y Comercio ???Delegatura para la Protecci??n de Datos Personales-.
                    </p>
                    <u><strong>Autorizaci??n:</strong></u>
                    <p>El tratamiento de datos personales realizados por La CONFEDERACI??N DE GU??AS DE TURISMO DE
                        COLOMBIA
                        -CONFEGUIAS- implica una autorizaci??n previa e informada por parte del titular, salvo que los
                        datos sean
                        p??blicos.</p>
                    <p>Por lo anterior, La CONFEDERACI??N DE GU??AS DE TURISMO DE COLOMBIA -CONFEGUIAS- adoptar?? un
                        procedimiento
                        para solicitar la autorizaci??n para la recolecci??n de datos personales e informar?? las
                        finalidades para
                        las cuales ser??n almacenados los mismos, garantiz??ndoles la posibilidad de verificar el
                        otorgamiento de
                        dicha autorizaci??n.</p>
                    <p>La autorizaci??n podr?? darse verbalmente, por escrito o cualquier otro formato que permita
                        garantizar su
                        posterior consulta.</p>
                    <p>Declara que ha consultado, conoce y acepta la Pol??tica de Tratamiento de Datos Personales de La
                        CONFEDERACI??N DE GU??AS DE TURISMO DE COLOMBIA -CONFEGUIAS- publicada en el link:
                        https://anato.org/politica-datos-personales/, y que la informaci??n proporcionada es veraz,
                        completa,
                        exacta, actualizada y verificable. Mediante la aceptaci??n del presente documento, manifiesta que
                        reconoce y acepta que cualquier consulta o reclamaci??n relacionada con el Tratamiento de sus
                        datos
                        personales podr?? ser elevada ante La CONFEDERACI??N DE GU??AS DE TURISMO DE COLOMBIA -CONFEGUIAS-,
                        como
                        Responsable del Tratamiento, cuya p??gina web es: <a
                            href="https://confeguias.com/">https://confeguias.com/</a> y su tel??fono de atenci??n es <a
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
                    <h5 class="modal-title" id="exampleModalLabel">Bienvenidos a Confederaci??n de Gu??as de Turismo de
                        Colombia
                        CONFEGUIAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apreciados colegas:</p>
                    <p>Desde la Confederaci??n de Gu??as de Turismo de Colombia ??? CONFEGUIAS, estamos trabajando para
                        lograr
                        construir un gremio unido y propositivo que trabaje en favor del bienestar colectivo de todos
                        los Gu??as de Turismo del pa??s, la defensa de sus derechos profesionales, el impulso al
                        desarrollo y la excelencia de la Profesi??n del Gu??a de Turismo y, por consiguiente, en pro del
                        engrandecimiento de Colombia a trav??s de la industria tur??stica nacional. </p>
                    <p>Para ello, la Confederaci??n ha desarrollado este formulario con el fin de conseguir por primera
                        vez una base de datos de los Gu??as Profesionales de Colombia, que servir?? para desarrollar los
                        programas de competitividad, capacitaci??n y bienestar que se han venido trabajando en
                        CONFEGUIAS.</p>
                    <p>Invitamos a todos nuestros colegas agremiados y no agremiados a diligenciar de manera muy
                        aplicada y diligente este formulario, que tiene como objetivo adem??s de reconocernos, poder
                        entregar una informaci??n exacta y confiable a las agencias de viajes y a los turistas de los
                        Gu??as Profesionales con su tarjeta profesional y registro nacional de turismo activo, sus
                        especializaciones, ubicaci??n, contacto, experiencia y cualificaciones.
                        Plazo m??ximo para env??o: <strong>30 Octubre de 2021</strong>
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
                    <h5 class="modal-title" id="exampleModalLabel">Gracias por Registrarse Confederaci??n de Gu??as de
                        Turismo
                        de Colombia CONFEGUIAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apreciados colegas:</p>
                    <p>Gracias por dar respuesta oportuna y apoyar esta iniciativa gremial que nos permitir?? obtener por
                        primera vez una base de datos completa, confiable y accesible de los Gu??as Profesionales de
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
        })
    </script>
</body>

</html>
