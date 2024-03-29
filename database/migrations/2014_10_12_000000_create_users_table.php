<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('identificacion')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();
        });

        Schema::create('registro', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Nombre')->nullable();
            $table->text('Apellido')->nullable();
            $table->text('AdjuntarFoto')->nullable();
            $table->text('TipoIdentificacion')->nullable();
            $table->string('NumeroIdentificacion', 20)->nullable();
            $table->date('FechaExpedicion')->nullable();
            $table->text('Departamento')->nullable();
            $table->text('Ciudad')->nullable();
            $table->text('Celular')->nullable();
            $table->text('TelefonoFijo')->nullable();
            $table->text('TarjetaProfesional')->nullable();
            $table->text('AdjuntoTarjetaProfesional')->nullable();
            $table->text('DescripcionPerfil')->nullable();
            $table->text('NGuiaRegistro')->nullable();
            $table->text('DocumentoGuiaRegistro')->nullable();
            $table->text('Terminos')->nullable();
            $table->timestamps();
        });

        Schema::create('ciudades', function (Blueprint $table) {
            $table->string('departamento', 30)->nullable();
            $table->string('ciudad', 25)->nullable();
        });

        DB::statement("INSERT INTO ciudades (departamento, ciudad) VALUES
('AMAZONAS', 'EL ENCANTO'),
('AMAZONAS', 'LA CHORRERA'),
('AMAZONAS', 'LA PEDRERA'),
('AMAZONAS', 'LA VICTORIA'),
('AMAZONAS', 'LETICIA'),
('AMAZONAS', 'MIRITI - PARANÁ'),
('AMAZONAS', 'PUERTO ALEGRIA'),
('AMAZONAS', 'PUERTO ARICA'),
('AMAZONAS', 'PUERTO NARIÑO'),
('AMAZONAS', 'PUERTO SANTANDER'),
('AMAZONAS', 'TARAPACÁ'),
('ANTIOQUIA', 'CÁCERES'),
('ANTIOQUIA', 'CAUCASIA'),
('ANTIOQUIA', 'EL BAGRE'),
('ANTIOQUIA', 'NECHÍ'),
('ANTIOQUIA', 'TARAZÁ'),
('ANTIOQUIA', 'ZARAGOZA'),
('ANTIOQUIA', 'CARACOLÍ'),
('ANTIOQUIA', 'MACEO'),
('ANTIOQUIA', 'PUERTO BERRiO'),
('ANTIOQUIA', 'PUERTO NARE'),
('ANTIOQUIA', 'PUERTO TRIUNFO'),
('ANTIOQUIA', 'YONDÓ'),
('ANTIOQUIA', 'AMALFI'),
('ANTIOQUIA', 'ANORÍ'),
('ANTIOQUIA', 'CISNEROS'),
('ANTIOQUIA', 'REMEDIOS'),
('ANTIOQUIA', 'SAN ROQUE'),
('ANTIOQUIA', 'SANTO DOMINGO'),
('ANTIOQUIA', 'SEGOVIA'),
('ANTIOQUIA', 'VEGACHÍ'),
('ANTIOQUIA', 'YALÍ'),
('ANTIOQUIA', 'YOLOMBÓ'),
('ANTIOQUIA', 'ANGOSTURA'),
('ANTIOQUIA', 'BELMIRA'),
('ANTIOQUIA', 'BRICEÑO'),
('ANTIOQUIA', 'CAMPAMENTO'),
('ANTIOQUIA', 'CAROLINA'),
('ANTIOQUIA', 'DON MATiAS'),
('ANTIOQUIA', 'ENTRERRIOS'),
('ANTIOQUIA', 'GÓMEZ PLATA'),
('ANTIOQUIA', 'GUADALUPE'),
('ANTIOQUIA', 'ITUANGO'),
('ANTIOQUIA', 'SAN ANDRÉS'),
('ANTIOQUIA', 'SAN JOSÉ DE LA MONTAÑA'),
('ANTIOQUIA', 'SAN PEDRO'),
('ANTIOQUIA', 'SANTA ROSA de osos'),
('ANTIOQUIA', 'TOLEDO'),
('ANTIOQUIA', 'VALDIVIA'),
('ANTIOQUIA', 'YARUMAL'),
('ANTIOQUIA', 'ABRIAQUÍ'),
('ANTIOQUIA', 'ANZA'),
('ANTIOQUIA', 'ARMENIA'),
('ANTIOQUIA', 'BURITICÁ'),
('ANTIOQUIA', 'CAÑASGORDAS'),
('ANTIOQUIA', 'DABEIBA'),
('ANTIOQUIA', 'EBÉJICO'),
('ANTIOQUIA', 'FRONTINO'),
('ANTIOQUIA', 'GIRALDO'),
('ANTIOQUIA', 'HELICONIA'),
('ANTIOQUIA', 'LIBORINA'),
('ANTIOQUIA', 'OLAYA'),
('ANTIOQUIA', 'PEQUE'),
('ANTIOQUIA', 'SABANALARGA'),
('ANTIOQUIA', 'SAN JERÓNIMO'),
('ANTIOQUIA', 'SANTAFÉ DE ANTIOQUIA'),
('ANTIOQUIA', 'SOPETRaN'),
('ANTIOQUIA', 'URAMITA'),
('ANTIOQUIA', 'ABEJORRAL'),
('ANTIOQUIA', 'ALEJANDRÍA'),
('ANTIOQUIA', 'ARGELIA'),
('ANTIOQUIA', 'CARMEN DE VIBORAL'),
('ANTIOQUIA', 'COCORNÁ'),
('ANTIOQUIA', 'CONCEPCIÓN'),
('ANTIOQUIA', 'GRANADA'),
('ANTIOQUIA', 'GUARNE'),
('ANTIOQUIA', 'GUATAPE'),
('ANTIOQUIA', 'LA CEJA'),
('ANTIOQUIA', 'LA UNIÓN'),
('ANTIOQUIA', 'MARINILLA'),
('ANTIOQUIA', 'NARIÑO'),
('ANTIOQUIA', 'PEÑOL'),
('ANTIOQUIA', 'RETIRO'),
('ANTIOQUIA', 'RIONEGRO'),
('ANTIOQUIA', 'SAN CARLOS'),
('ANTIOQUIA', 'SAN FRANCISCO'),
('ANTIOQUIA', 'SAN LUIS'),
('ANTIOQUIA', 'SAN RAFAEL'),
('ANTIOQUIA', 'SAN VICENTE'),
('ANTIOQUIA', 'SANTUARIO'),
('ANTIOQUIA', 'SONSON'),
('ANTIOQUIA', 'AMAGa'),
('ANTIOQUIA', 'ANDES'),
('ANTIOQUIA', 'ANGELOPOLIS'),
('ANTIOQUIA', 'BETANIA'),
('ANTIOQUIA', 'BETULIA'),
('ANTIOQUIA', 'CAICEDO'),
('ANTIOQUIA', 'CARAMANTA'),
('ANTIOQUIA', 'CIUDAD BOLÍVAR'),
('ANTIOQUIA', 'CONCORDIA'),
('ANTIOQUIA', 'FREDONIA'),
('ANTIOQUIA', 'HISPANIA'),
('ANTIOQUIA', 'JARDÍN'),
('ANTIOQUIA', 'JERICÓ'),
('ANTIOQUIA', 'LA PINTADA'),
('ANTIOQUIA', 'MONTEBELLO'),
('ANTIOQUIA', 'PUEBLORRICO'),
('ANTIOQUIA', 'SALGAR'),
('ANTIOQUIA', 'SANTA BaRBARA'),
('ANTIOQUIA', 'TÁMESIS'),
('ANTIOQUIA', 'TARSO'),
('ANTIOQUIA', 'TITIRIBÍ'),
('ANTIOQUIA', 'URRAO'),
('ANTIOQUIA', 'VALPARAISO'),
('ANTIOQUIA', 'VENECIA'),
('ANTIOQUIA', 'APARTADÓ'),
('ANTIOQUIA', 'ARBOLETES'),
('ANTIOQUIA', 'CAREPA'),
('ANTIOQUIA', 'CHIGORODÓ'),
('ANTIOQUIA', 'MURINDÓ'),
('ANTIOQUIA', 'MUTATA'),
('ANTIOQUIA', 'NECOCLÍ'),
('ANTIOQUIA', 'SAN JUAN DE URABA'),
('ANTIOQUIA', 'SAN PEDRO DE URABA'),
('ANTIOQUIA', 'TURBO'),
('ANTIOQUIA', 'VIGÍA DEL FUERTE'),
('ANTIOQUIA', 'BARBOSA'),
('ANTIOQUIA', 'BELLO'),
('ANTIOQUIA', 'CALDAS'),
('ANTIOQUIA', 'COPACABANA'),
('ANTIOQUIA', 'ENVIGADO'),
('ANTIOQUIA', 'GIRARDOTA'),
('ANTIOQUIA', 'ITAGUI'),
('ANTIOQUIA', 'LA ESTRELLA'),
('ANTIOQUIA', 'MEDELLÍN'),
('ANTIOQUIA', 'SABANETA'),
('ARAUCA', 'ARAUCA'),
('ARAUCA', 'ARAUQUITA'),
('ARAUCA', 'CRAVO NORTE'),
('ARAUCA', 'FORTUL'),
('ARAUCA', 'PUERTO RONDÓN'),
('ARAUCA', 'SARAVENA'),
('ARAUCA', 'TAME'),
('ARCHIPIELAGO DE SAN ANDRES', 'PROVIDENCIA Y SANTA CATAL'),
('ARCHIPIELAGO DE SAN ANDRES', 'SAN ANDRES'),
('ATLÁNTICO', 'BARRANQUILLA'),
('ATLÁNTICO', 'GALAPA'),
('ATLÁNTICO', 'MALAMBO'),
('ATLÁNTICO', 'PUERTO COLOMBIA'),
('ATLÁNTICO', 'SOLEDAD'),
('ATLÁNTICO', 'CAMPO DE LA CRUZ'),
('ATLÁNTICO', 'CANDELARIA'),
('ATLÁNTICO', 'LURUACO'),
('ATLÁNTICO', 'MANATi'),
('ATLÁNTICO', 'REPELON'),
('ATLÁNTICO', 'SANTA LUCiA'),
('ATLÁNTICO', 'SUAN'),
('ATLÁNTICO', 'BARANOA'),
('ATLÁNTICO', 'PALMAR DE VARELA'),
('ATLÁNTICO', 'POLONUEVO'),
('ATLÁNTICO', 'PONEDERA'),
('ATLÁNTICO', 'Sabanagrande'),
('ATLÁNTICO', 'SABANALARGA'),
('ATLÁNTICO', 'Santo Tomas'),
('ATLÁNTICO', 'JUAN DE ACOSTA'),
('ATLÁNTICO', 'PIOJÓ'),
('ATLÁNTICO', 'TUBARA'),
('ATLÁNTICO', 'USIACURi'),
('BOLÍVAR', 'CICUCO'),
('BOLÍVAR', 'HATILLO DE LOBA'),
('BOLÍVAR', 'MARGARITA'),
('BOLÍVAR', 'MOMPÓS'),
('BOLÍVAR', 'SAN FERNANDO'),
('BOLÍVAR', 'TALAIGUA NUEVO'),
('BOLÍVAR', 'ARJONA'),
('BOLÍVAR', 'ARROYOHONDO'),
('BOLÍVAR', 'CALAMAR'),
('BOLÍVAR', 'CARTAGENA'),
('BOLÍVAR', 'CLEMENCIA'),
('BOLÍVAR', 'MAHATES'),
('BOLÍVAR', 'SAN CRISTOBAL'),
('BOLÍVAR', 'SAN ESTANISLAO'),
('BOLÍVAR', 'SANTA CATALINA'),
('BOLÍVAR', 'SANTA ROSA DE LIMA'),
('BOLÍVAR', 'SOPLAVIENTO'),
('BOLÍVAR', 'TURBACO'),
('BOLÍVAR', 'TURBANA'),
('BOLÍVAR', 'VILLANUEVA'),
('BOLÍVAR', 'ALTOS DEL ROSARIO'),
('BOLÍVAR', 'BARRANCO DE LOBA'),
('BOLÍVAR', 'EL PEÑON'),
('BOLÍVAR', 'REGIDOR'),
('BOLÍVAR', 'RÍO VIEJO'),
('BOLÍVAR', 'SAN MARTIN DE LOBA'),
('BOLÍVAR', 'ARENAL'),
('BOLÍVAR', 'CANTAGALLO'),
('BOLÍVAR', 'MORALES'),
('BOLÍVAR', 'SAN PABLO'),
('BOLÍVAR', 'SANTA ROSA DEL SUR'),
('BOLÍVAR', 'SIMITÍ'),
('BOLÍVAR', 'ACHÍ'),
('BOLÍVAR', 'MAGANGUÉ'),
('BOLÍVAR', 'MONTECRISTO'),
('BOLÍVAR', 'PINILLOS'),
('BOLÍVAR', 'SAN JACINTO DEL CAUCA'),
('BOLÍVAR', 'TIQUISIO'),
('BOLÍVAR', 'CARMEN DE BOLÍVAR'),
('BOLÍVAR', 'CÓRDOBA'),
('BOLÍVAR', 'EL GUAMO'),
('BOLÍVAR', 'MARÍA LA BAJA'),
('BOLÍVAR', 'SAN JACINTO'),
('BOLÍVAR', 'SAN JUAN NEPOMUCENO'),
('BOLÍVAR', 'ZAMBRANO'),
('BOYACÁ', 'CHÍQUIZA'),
('BOYACÁ', 'CHIVATÁ'),
('BOYACÁ', 'CÓMBITA'),
('BOYACÁ', 'CUCAITA'),
('BOYACÁ', 'MOTAVITA'),
('BOYACÁ', 'OICATÁ'),
('BOYACÁ', 'SAMACÁ'),
('BOYACÁ', 'SIACHOQUE'),
('BOYACÁ', 'SORA'),
('BOYACÁ', 'SORACÁ'),
('BOYACÁ', 'SOTAQUIRÁ'),
('BOYACÁ', 'TOCA'),
('BOYACÁ', 'TUNJA'),
('BOYACÁ', 'TUTA'),
('BOYACÁ', 'VENTAQUEMADA'),
('BOYACÁ', 'CHISCAS'),
('BOYACÁ', 'CUBARÁ'),
('BOYACÁ', 'EL COCUY'),
('BOYACÁ', 'EL ESPINO'),
('BOYACÁ', 'GUACAMAYAS'),
('BOYACÁ', 'GÜICÁN'),
('BOYACÁ', 'PANQUEBA'),
('BOYACÁ', 'LABRANZAGRANDE'),
('BOYACÁ', 'PAJARITO'),
('BOYACÁ', 'PAYA'),
('BOYACÁ', 'PISBA'),
('BOYACÁ', 'BERBEO'),
('BOYACÁ', 'CAMPOHERMOSO'),
('BOYACÁ', 'MIRAFLORES'),
('BOYACÁ', 'PÁEZ'),
('BOYACÁ', 'SAN EDUARDO'),
('BOYACÁ', 'ZETAQUIRA'),
('BOYACÁ', 'BOYACÁ'),
('BOYACÁ', 'CIÉNEGA'),
('BOYACÁ', 'JENESANO'),
('BOYACÁ', 'NUEVO COLÓN'),
('BOYACÁ', 'RAMIRIQUÍ'),
('BOYACÁ', 'RONDÓN'),
('BOYACÁ', 'TIBANÁ'),
('BOYACÁ', 'TURMEQUÉ'),
('BOYACÁ', 'UMBITA'),
('BOYACÁ', 'VIRACACHÁ'),
('BOYACÁ', 'CHINAVITA'),
('BOYACÁ', 'GARAGOA'),
('BOYACÁ', 'MACANAL'),
('BOYACÁ', 'PACHAVITA'),
('BOYACÁ', 'SAN LUIS DE GACENO'),
('BOYACÁ', 'SANTA MARÍA'),
('BOYACÁ', 'BOAVITA'),
('BOYACÁ', 'COVARACHÍA'),
('BOYACÁ', 'LA UVITA'),
('BOYACÁ', 'SAN MATEO'),
('BOYACÁ', 'SATIVANORTE'),
('BOYACÁ', 'SATIVASUR'),
('BOYACÁ', 'SOATÁ'),
('BOYACÁ', 'SUSACÓN'),
('BOYACÁ', 'TIPACOQUE'),
('BOYACÁ', 'BRICEÑO'),
('BOYACÁ', 'BUENAVISTA'),
('BOYACÁ', 'CALDAS'),
('BOYACÁ', 'CHIQUINQUIRÁ'),
('BOYACÁ', 'COPER'),
('BOYACÁ', 'LA VICTORIA'),
('BOYACÁ', 'MARIPÍ'),
('BOYACÁ', 'MUZO'),
('BOYACÁ', 'OTANCHE'),
('BOYACÁ', 'PAUNA'),
('BOYACÁ', 'PUERTO BOYACa'),
('BOYACÁ', 'QUÍPAMA'),
('BOYACÁ', 'SABOYÁ'),
('BOYACÁ', 'SAN MIGUEL DE SEMA'),
('BOYACÁ', 'SAN PABLO BORBUR'),
('BOYACÁ', 'TUNUNGUÁ'),
('BOYACÁ', 'ALMEIDA'),
('BOYACÁ', 'CHIVOR'),
('BOYACÁ', 'GUATEQUE'),
('BOYACÁ', 'GUAYATÁ'),
('BOYACÁ', 'LA CAPILLA'),
('BOYACÁ', 'SOMONDOCO'),
('BOYACÁ', 'SUTATENZA'),
('BOYACÁ', 'TENZA'),
('BOYACÁ', 'ARCABUCO'),
('BOYACÁ', 'CHITARAQUE'),
('BOYACÁ', 'GACHANTIVÁ'),
('BOYACÁ', 'MONIQUIRÁ'),
('BOYACÁ', 'RÁQUIRA'),
('BOYACÁ', 'SÁCHICA'),
('BOYACÁ', 'SAN JOSÉ DE PARE'),
('BOYACÁ', 'SANTA SOFÍA'),
('BOYACÁ', 'SANTANA'),
('BOYACÁ', 'SUTAMARCHÁN'),
('BOYACÁ', 'TINJACÁ'),
('BOYACÁ', 'TOGÜÍ'),
('BOYACÁ', 'VILLA DE LEYVA'),
('BOYACÁ', 'AQUITANIA'),
('BOYACÁ', 'CUÍTIVA'),
('BOYACÁ', 'FIRAVITOBA'),
('BOYACÁ', 'GAMEZA'),
('BOYACÁ', 'IZA'),
('BOYACÁ', 'MONGUA'),
('BOYACÁ', 'MONGUÍ'),
('BOYACÁ', 'NOBSA'),
('BOYACÁ', 'PESCA'),
('BOYACÁ', 'SOGAMOSO'),
('BOYACÁ', 'TIBASOSA'),
('BOYACÁ', 'TÓPAGA'),
('BOYACÁ', 'TOTA'),
('BOYACÁ', 'BELÉN'),
('BOYACÁ', 'BUSBANZÁ'),
('BOYACÁ', 'CERINZA'),
('BOYACÁ', 'CORRALES'),
('BOYACÁ', 'DUITAMA'),
('BOYACÁ', 'FLORESTA'),
('BOYACÁ', 'PAIPA'),
('BOYACÁ', 'SAN ROSA VITERBO'),
('BOYACÁ', 'TUTAZÁ'),
('BOYACÁ', 'BETÉITIVA'),
('BOYACÁ', 'CHITA'),
('BOYACÁ', 'JERICÓ'),
('BOYACÁ', 'PAZ DE RÍO'),
('BOYACÁ', 'SOCHA'),
('BOYACÁ', 'SOCOTÁ'),
('BOYACÁ', 'TASCO'),
('CALDAS', 'FILADELFIA'),
('CALDAS', 'LA MERCED'),
('CALDAS', 'MARMATO'),
('CALDAS', 'RIOSUCIO'),
('CALDAS', 'SUPÍA'),
('CALDAS', 'MANZANARES'),
('CALDAS', 'MARQUETALIA'),
('CALDAS', 'MARULANDA'),
('CALDAS', 'PENSILVANIA'),
('CALDAS', 'ANSERMA'),
('CALDAS', 'BELALCÁZAR'),
('CALDAS', 'RISARALDA'),
('CALDAS', 'SAN JOSÉ'),
('CALDAS', 'VITERBO'),
('CALDAS', 'CHINCHINa'),
('CALDAS', 'MANIZALES'),
('CALDAS', 'NEIRA'),
('CALDAS', 'PALESTINA'),
('CALDAS', 'VILLAMARiA'),
('CALDAS', 'AGUADAS'),
('CALDAS', 'ARANZAZU'),
('CALDAS', 'PÁCORA'),
('CALDAS', 'SALAMINA'),
('CALDAS', 'LA DORADA'),
('CALDAS', 'NORCASIA'),
('CALDAS', 'SAMANÁ'),
('CALDAS', 'VICTORIA'),
('CAQUETÁ', 'ALBANIA'),
('CAQUETÁ', 'BELÉN DE LOS ANDAQUIES'),
('CAQUETÁ', 'CARTAGENA DEL CHAIRÁ'),
('CAQUETÁ', 'CURRILLO'),
('CAQUETÁ', 'EL DONCELLO'),
('CAQUETÁ', 'EL PAUJIL'),
('CAQUETÁ', 'FLORENCIA'),
('CAQUETÁ', 'LA MONTAÑITA'),
('CAQUETÁ', 'MILaN'),
('CAQUETÁ', 'MORELIA'),
('CAQUETÁ', 'PUERTO RICO'),
('CAQUETÁ', 'SAN JOSE DEL FRAGUA'),
('CAQUETÁ', 'SAN VICENTE DEL CAGUÁN'),
('CAQUETÁ', 'SOLANO'),
('CAQUETÁ', 'SOLITA'),
('CAQUETÁ', 'VALPARAISO'),
('CASANARE', 'AGUAZUL'),
('CASANARE', 'CHAMEZA'),
('CASANARE', 'HATO COROZAL'),
('CASANARE', 'LA SALINA'),
('CASANARE', 'MANÍ'),
('CASANARE', 'MONTERREY'),
('CASANARE', 'NUNCHÍA'),
('CASANARE', 'OROCUÉ'),
('CASANARE', 'PAZ DE ARIPORO'),
('CASANARE', 'PORE'),
('CASANARE', 'RECETOR'),
('CASANARE', 'SABANALARGA'),
('CASANARE', 'SÁCAMA'),
('CASANARE', 'SAN LUIS DE PALENQUE'),
('CASANARE', 'TÁMARA'),
('CASANARE', 'TAURAMENA'),
('CASANARE', 'TRINIDAD'),
('CASANARE', 'VILLANUEVA'),
('CASANARE', 'YOPAL'),
('CAUCA', 'CAJIBÍO'),
('CAUCA', 'EL TAMBO'),
('CAUCA', 'LA SIERRA'),
('CAUCA', 'MORALES'),
('CAUCA', 'PIENDAMO'),
('CAUCA', 'POPAYÁN'),
('CAUCA', 'ROSAS'),
('CAUCA', 'SOTARA'),
('CAUCA', 'TIMBIO'),
('CAUCA', 'BUENOS AIRES'),
('CAUCA', 'CALOTO'),
('CAUCA', 'CORINTO'),
('CAUCA', 'MIRANDA'),
('CAUCA', 'PADILLA'),
('CAUCA', 'PUERTO TEJADA'),
('CAUCA', 'SANTANDER DE QUILICHAO'),
('CAUCA', 'SUAREZ'),
('CAUCA', 'VILLA RICA'),
('CAUCA', 'GUAPI'),
('CAUCA', 'LOPEZ'),
('CAUCA', 'TIMBIQUI'),
('CAUCA', 'CALDONO'),
('CAUCA', 'INZÁ'),
('CAUCA', 'JAMBALO'),
('CAUCA', 'PAEZ'),
('CAUCA', 'PURACE'),
('CAUCA', 'Silvia'),
('CAUCA', 'TORIBIO'),
('CAUCA', 'TOTORO'),
('CAUCA', 'ALMAGUER'),
('CAUCA', 'ARGELIA'),
('CAUCA', 'BALBOA'),
('CAUCA', 'BOLÍVAR'),
('CAUCA', 'FLORENCIA'),
('CAUCA', 'LA VEGA'),
('CAUCA', 'MERCADERES'),
('CAUCA', 'PATIA'),
('CAUCA', 'PIAMONTE'),
('CAUCA', 'SAN SEBASTIAN'),
('CAUCA', 'SANTA ROSA'),
('CAUCA', 'SUCRE'),
('CESAR', 'BECERRIL'),
('CESAR', 'CHIMICHAGUA'),
('CESAR', 'CHIRIGUANA'),
('CESAR', 'CURUMANÍ'),
('CESAR', 'LA JAGUA DE IBIRICO'),
('CESAR', 'PAILITAS'),
('CESAR', 'TAMALAMEQUE'),
('CESAR', 'ASTREA'),
('CESAR', 'BOSCONIA'),
('CESAR', 'EL COPEY'),
('CESAR', 'EL PASO'),
('CESAR', 'AGUSTÍN CODAZZI'),
('CESAR', 'LA PAZ'),
('CESAR', 'MANAURE'),
('CESAR', 'PUEBLO BELLO'),
('CESAR', 'SAN DIEGO'),
('CESAR', 'VALLEDUPAR'),
('CESAR', 'AGUACHICA'),
('CESAR', 'GAMARRA'),
('CESAR', 'GONZÁLEZ'),
('CESAR', 'LA GLORIA'),
('CESAR', 'PELAYA'),
('CESAR', 'RÍO DE ORO'),
('CESAR', 'SAN ALBERTO'),
('CESAR', 'SAN MARTÍN'),
('CHOCÓ', 'ATRATO'),
('CHOCÓ', 'BAGADÓ'),
('CHOCÓ', 'BOJAYA'),
('CHOCÓ', 'EL CARMEN DE ATRATO'),
('CHOCÓ', 'LLORÓ'),
('CHOCÓ', 'MEDIO ATRATO'),
('CHOCÓ', 'QUIBDÓ'),
('CHOCÓ', 'RIO QUITO'),
('CHOCÓ', 'ACANDÍ'),
('CHOCÓ', 'BELÉN DE BAJIRA'),
('CHOCÓ', 'CARMÉN DEL DARIÉN'),
('CHOCÓ', 'RIOSUCIO'),
('CHOCÓ', 'UNGUÍA'),
('CHOCÓ', 'BAHÍA SOLANO'),
('CHOCÓ', 'JURADÓ'),
('CHOCÓ', 'NUQUÍ'),
('CHOCÓ', 'ALTO BAUDÓ'),
('CHOCÓ', 'BAJO BAUDÓ'),
('CHOCÓ', 'El Litoral del San Juan'),
('CHOCÓ', 'MEDIO BAUDÓ'),
('CHOCÓ', 'CANTON DE SAN PABLO'),
('CHOCÓ', 'CERTEGUI'),
('CHOCÓ', 'CONDOTO'),
('CHOCÓ', 'ITSMINA'),
('CHOCÓ', 'MEDIO SAN JUAN'),
('CHOCÓ', 'NÓVITA'),
('CHOCÓ', 'RÍO FRÍO'),
('CHOCÓ', 'SAN JOSÉ DEL PALMAR'),
('CHOCÓ', 'SIPÍ'),
('CHOCÓ', 'TADÓ'),
('CHOCÓ', 'UNION PANAMERICANA'),
('CÓRDOBA', 'TIERRALTA'),
('CÓRDOBA', 'VALENCIA'),
('CÓRDOBA', 'CHIMÁ'),
('CÓRDOBA', 'COTORRA'),
('CÓRDOBA', 'LORICA'),
('CÓRDOBA', 'MOMIL'),
('CÓRDOBA', 'PURÍSIMA'),
('CÓRDOBA', 'MONTERÍA'),
('CÓRDOBA', 'CANALETE'),
('CÓRDOBA', 'LOS CÓRDOBAS'),
('CÓRDOBA', 'MOÑITOS'),
('CÓRDOBA', 'PUERTO ESCONDIDO'),
('CÓRDOBA', 'SAN ANTERO'),
('CÓRDOBA', 'SAN BERNARDO DEL VIENTO'),
('CÓRDOBA', 'CHINÚ'),
('CÓRDOBA', 'SAHAGÚN'),
('CÓRDOBA', 'SAN ANDRÉS SOTAVENTO'),
('CÓRDOBA', 'AYAPEL'),
('CÓRDOBA', 'BUENAVISTA'),
('CÓRDOBA', 'LA APARTADA'),
('CÓRDOBA', 'MONTELÍBANO'),
('CÓRDOBA', 'PLANETA RICA'),
('CÓRDOBA', 'PUEBLO NUEVO'),
('CÓRDOBA', 'PUERTO LIBERTADOR'),
('CÓRDOBA', 'CERETÉ'),
('CÓRDOBA', 'CIÉNAGA DE ORO'),
('CÓRDOBA', 'SAN CARLOS'),
('CÓRDOBA', 'SAN PELAYO'),
('CUNDINAMARCA', 'BOGOTA D.C'),
('CUNDINAMARCA', 'CHOCONTÁ'),
('CUNDINAMARCA', 'MACHETA'),
('CUNDINAMARCA', 'MANTA'),
('CUNDINAMARCA', 'SESQUILÉ'),
('CUNDINAMARCA', 'SUESCA'),
('CUNDINAMARCA', 'TIBIRITA'),
('CUNDINAMARCA', 'VILLAPINZÓN'),
('CUNDINAMARCA', 'AGUA DE DIOS'),
('CUNDINAMARCA', 'GIRARDOT'),
('CUNDINAMARCA', 'GUATAQUÍ'),
('CUNDINAMARCA', 'JERUSALÉN'),
('CUNDINAMARCA', 'NARIÑO'),
('CUNDINAMARCA', 'NILO'),
('CUNDINAMARCA', 'RICAURTE'),
('CUNDINAMARCA', 'TOCAIMA'),
('CUNDINAMARCA', 'CAPARRAPÍ'),
('CUNDINAMARCA', 'GUADUAS'),
('CUNDINAMARCA', 'PUERTO SALGAR'),
('CUNDINAMARCA', 'ALBÁN'),
('CUNDINAMARCA', 'LA PEÑA'),
('CUNDINAMARCA', 'LA VEGA'),
('CUNDINAMARCA', 'NIMAIMA'),
('CUNDINAMARCA', 'NOCAIMA'),
('CUNDINAMARCA', 'QUEBRADANEGRA'),
('CUNDINAMARCA', 'SAN FRANCISCO'),
('CUNDINAMARCA', 'SASAIMA'),
('CUNDINAMARCA', 'SUPATÁ'),
('CUNDINAMARCA', 'ÚTICA'),
('CUNDINAMARCA', 'VERGARA'),
('CUNDINAMARCA', 'VILLETA'),
('CUNDINAMARCA', 'GACHALA'),
('CUNDINAMARCA', 'GACHETA'),
('CUNDINAMARCA', 'GAMA'),
('CUNDINAMARCA', 'GUASCA'),
('CUNDINAMARCA', 'GUATAVITA'),
('CUNDINAMARCA', 'JUNÍN'),
('CUNDINAMARCA', 'LA CALERA'),
('CUNDINAMARCA', 'UBALÁ'),
('CUNDINAMARCA', 'BELTRÁN'),
('CUNDINAMARCA', 'BITUIMA'),
('CUNDINAMARCA', 'CHAGUANÍ'),
('CUNDINAMARCA', 'GUAYABAL DE SIQUIMA'),
('CUNDINAMARCA', 'PULI'),
('CUNDINAMARCA', 'SAN JUAN DE RÍO SECO'),
('CUNDINAMARCA', 'VIANÍ'),
('CUNDINAMARCA', 'MEDINA'),
('CUNDINAMARCA', 'PARATEBUENO'),
('CUNDINAMARCA', 'CAQUEZA'),
('CUNDINAMARCA', 'CHIPAQUE'),
('CUNDINAMARCA', 'CHOACHÍ'),
('CUNDINAMARCA', 'FOMEQUE'),
('CUNDINAMARCA', 'FOSCA'),
('CUNDINAMARCA', 'GUAYABETAL'),
('CUNDINAMARCA', 'GUTIÉRREZ'),
('CUNDINAMARCA', 'QUETAME'),
('CUNDINAMARCA', 'UBAQUE'),
('CUNDINAMARCA', 'UNE'),
('CUNDINAMARCA', 'EL PEÑÓN'),
('CUNDINAMARCA', 'LA PALMA'),
('CUNDINAMARCA', 'PACHO'),
('CUNDINAMARCA', 'PAIME'),
('CUNDINAMARCA', 'SAN CAYETANO'),
('CUNDINAMARCA', 'TOPAIPI'),
('CUNDINAMARCA', 'VILLAGOMEZ'),
('CUNDINAMARCA', 'YACOPÍ'),
('CUNDINAMARCA', 'CAJICÁ'),
('CUNDINAMARCA', 'CHÍA'),
('CUNDINAMARCA', 'COGUA'),
('CUNDINAMARCA', 'GACHANCIPÁ'),
('CUNDINAMARCA', 'NEMOCoN'),
('CUNDINAMARCA', 'SOPÓ'),
('CUNDINAMARCA', 'TABIO'),
('CUNDINAMARCA', 'TOCANCIPÁ'),
('CUNDINAMARCA', 'ZIPAQUIRÁ'),
('CUNDINAMARCA', 'BOJACÁ'),
('CUNDINAMARCA', 'COTA'),
('CUNDINAMARCA', 'EL ROSAL'),
('CUNDINAMARCA', 'FACATATIVÁ'),
('CUNDINAMARCA', 'FUNZA'),
('CUNDINAMARCA', 'MADRID'),
('CUNDINAMARCA', 'MOSQUERA'),
('CUNDINAMARCA', 'SUBACHOQUE'),
('CUNDINAMARCA', 'TENJO'),
('CUNDINAMARCA', 'ZIPACoN'),
('CUNDINAMARCA', 'SIBATÉ'),
('CUNDINAMARCA', 'SOACHA'),
('CUNDINAMARCA', 'ARBELÁEZ'),
('CUNDINAMARCA', 'CABRERA'),
('CUNDINAMARCA', 'FUSAGASUGÁ'),
('CUNDINAMARCA', 'GRANADA'),
('CUNDINAMARCA', 'PANDI'),
('CUNDINAMARCA', 'PASCA'),
('CUNDINAMARCA', 'SAN BERNARDO'),
('CUNDINAMARCA', 'SILVANIA'),
('CUNDINAMARCA', 'TIBACUY'),
('CUNDINAMARCA', 'VENECIA'),
('CUNDINAMARCA', 'ANAPOIMA'),
('CUNDINAMARCA', 'ANOLAIMA'),
('CUNDINAMARCA', 'APULO'),
('CUNDINAMARCA', 'CACHIPAY'),
('CUNDINAMARCA', 'EL COLEGIO'),
('CUNDINAMARCA', 'LA MESA'),
('CUNDINAMARCA', 'QUIPILE'),
('CUNDINAMARCA', 'SAN ANTONIO DE TEQUENDAMA'),
('CUNDINAMARCA', 'TENA'),
('CUNDINAMARCA', 'VIOTÁ'),
('CUNDINAMARCA', 'CARMEN DE CARUPA'),
('CUNDINAMARCA', 'CUCUNUBÁ'),
('CUNDINAMARCA', 'FÚQUENE'),
('CUNDINAMARCA', 'GUACHETÁ'),
('CUNDINAMARCA', 'LENGUAZAQUE'),
('CUNDINAMARCA', 'SIMIJACA'),
('CUNDINAMARCA', 'SUSA'),
('CUNDINAMARCA', 'SUTATAUSA'),
('CUNDINAMARCA', 'TAUSA'),
('CUNDINAMARCA', 'UBATE'),
('GUAINÍA', 'BARRANCO MINA'),
('GUAINÍA', 'CACAHUAL'),
('GUAINÍA', 'INÍRIDA'),
('GUAINÍA', 'LA GUADALUPE'),
('GUAINÍA', 'MAPIRIPaN'),
('GUAINÍA', 'MORICHAL'),
('GUAINÍA', 'PANA PANA'),
('GUAINÍA', 'PUERTO COLOMBIA'),
('GUAINÍA', 'SAN FELIPE'),
('GUAVIARE', 'CALAMAR'),
('GUAVIARE', 'EL RETORNO'),
('GUAVIARE', 'MIRAFLORES'),
('GUAVIARE', 'SAN JOSÉ DEL GUAVIARE'),
('HUILA', 'AGRADO'),
('HUILA', 'ALTAMIRA'),
('HUILA', 'GARZÓN'),
('HUILA', 'GIGANTE'),
('HUILA', 'GUADALUPE'),
('HUILA', 'PITAL'),
('HUILA', 'SUAZA'),
('HUILA', 'TARQUI'),
('HUILA', 'AIPE'),
('HUILA', 'ALGECIRAS'),
('HUILA', 'BARAYA'),
('HUILA', 'CAMPOALEGRE'),
('HUILA', 'COLOMBIA'),
('HUILA', 'HOBO'),
('HUILA', 'IQUIRA'),
('HUILA', 'NEIVA'),
('HUILA', 'PALERMO'),
('HUILA', 'RIVERA'),
('HUILA', 'SANTA MARÍA'),
('HUILA', 'TELLO'),
('HUILA', 'TERUEL'),
('HUILA', 'VILLAVIEJA'),
('HUILA', 'YAGUARÁ'),
('HUILA', 'LA ARGENTINA'),
('HUILA', 'LA PLATA'),
('HUILA', 'NÁTAGA'),
('HUILA', 'PAICOL'),
('HUILA', 'TESALIA'),
('HUILA', 'ACEVEDO'),
('HUILA', 'ELÍAS'),
('HUILA', 'ISNOS'),
('HUILA', 'OPORAPA'),
('HUILA', 'PALESTINA'),
('HUILA', 'PITALITO'),
('HUILA', 'SALADOBLANCO'),
('HUILA', 'SAN AGUSTÍN'),
('HUILA', 'TIMANÁ'),
('LA GUAJIRA', 'ALBANIA'),
('LA GUAJIRA', 'DIBULLA'),
('LA GUAJIRA', 'MAICAO'),
('LA GUAJIRA', 'MANAURE'),
('LA GUAJIRA', 'RIOHACHA'),
('LA GUAJIRA', 'URIBIA'),
('LA GUAJIRA', 'BARRANCAS'),
('LA GUAJIRA', 'DISTRACCION'),
('LA GUAJIRA', 'EL MOLINO'),
('LA GUAJIRA', 'FONSECA'),
('LA GUAJIRA', 'HATONUEVO'),
('LA GUAJIRA', 'LA JAGUA DEL PILAR'),
('LA GUAJIRA', 'SAN JUAN DEL CESAR'),
('LA GUAJIRA', 'URUMITA'),
('LA GUAJIRA', 'VILLANUEVA'),
('MAGDALENA', 'ARIGUANÍ'),
('MAGDALENA', 'CHIBOLO'),
('MAGDALENA', 'NUEVA GRANADA'),
('MAGDALENA', 'PLATO'),
('MAGDALENA', 'SABANAS DE SAN ANGEL'),
('MAGDALENA', 'TENERIFE'),
('MAGDALENA', 'ALGARROBO'),
('MAGDALENA', 'ARACATACA'),
('MAGDALENA', 'CIÉNAGA'),
('MAGDALENA', 'EL RETEN'),
('MAGDALENA', 'FUNDACION'),
('MAGDALENA', 'PUEBLO VIEJO'),
('MAGDALENA', 'ZONA BANANERA'),
('MAGDALENA', 'CERRO SAN ANTONIO'),
('MAGDALENA', 'CONCORDIA'),
('MAGDALENA', 'EL PIÑON'),
('MAGDALENA', 'PEDRAZA'),
('MAGDALENA', 'PIVIJAY'),
('MAGDALENA', 'REMOLINO'),
('MAGDALENA', 'SALAMINA'),
('MAGDALENA', 'SITIONUEVO'),
('MAGDALENA', 'ZAPAYAN'),
('MAGDALENA', 'SANTA MARTA'),
('MAGDALENA', 'EL BANCO'),
('MAGDALENA', 'GUAMAL'),
('MAGDALENA', 'PIJIÑO DEL CARMEN'),
('MAGDALENA', 'SAN SEBASTIAN DE BUENAVIS'),
('MAGDALENA', 'SAN ZENON'),
('MAGDALENA', 'SANTA ANA'),
('MAGDALENA', 'SANTA BARBARA DE PINTO'),
('META', 'EL CASTILLO'),
('META', 'EL DORADO'),
('META', 'FUENTE DE ORO'),
('META', 'GRANADA'),
('META', 'LA MACARENA'),
('META', 'LA URIBE'),
('META', 'LEJANÍAS'),
('META', 'MAPIRIPaN'),
('META', 'MESETAS'),
('META', 'PUERTO CONCORDIA'),
('META', 'PUERTO LLERAS'),
('META', 'PUERTO RICO'),
('META', 'SAN JUAN DE ARAMA'),
('META', 'VISTA HERMOSA'),
('META', 'VILLAVICENCIO'),
('META', 'ACACiAS'),
('META', 'BARRANCA DE UPIA'),
('META', 'CASTILLA LA NUEVA'),
('META', 'CUMARAL'),
('META', 'EL CALVARIO'),
('META', 'GUAMAL'),
('META', 'RESTREPO'),
('META', 'SAN CARLOS GUAROA'),
('META', 'SAN JUANITO'),
('META', 'SAN LUIS DE CUBARRAL'),
('META', 'SAN MARTÍN'),
('META', 'CABUYARO'),
('META', 'PUERTO GAITÁN'),
('META', 'PUERTO LoPEZ'),
('NARIÑO', 'CHACHAGUI'),
('NARIÑO', 'CONSACA'),
('NARIÑO', 'EL PEÑOL'),
('NARIÑO', 'EL TAMBO'),
('NARIÑO', 'LA FLORIDA'),
('NARIÑO', 'NARIÑO'),
('NARIÑO', 'PASTO'),
('NARIÑO', 'SANDONÁ'),
('NARIÑO', 'TANGUA'),
('NARIÑO', 'YACUANQUER'),
('NARIÑO', 'ANCUYA'),
('NARIÑO', 'GUAITARILLA'),
('NARIÑO', 'LA LLANADA'),
('NARIÑO', 'LINARES'),
('NARIÑO', 'LOS ANDES'),
('NARIÑO', 'MALLAMA'),
('NARIÑO', 'OSPINA'),
('NARIÑO', 'PROVIDENCIA'),
('NARIÑO', 'RICAURTE'),
('NARIÑO', 'SAMANIEGO'),
('NARIÑO', 'SANTA CRUZ'),
('NARIÑO', 'SAPUYES'),
('NARIÑO', 'TUQUERRES'),
('NARIÑO', 'BARBACOAS'),
('NARIÑO', 'EL CHARCO'),
('NARIÑO', 'FRANCISCO PIZARRO'),
('NARIÑO', 'LA TOLA'),
('NARIÑO', 'Magui'),
('NARIÑO', 'MOSQUERA'),
('NARIÑO', 'OLAYA HERRERA'),
('NARIÑO', 'ROBERTO PAYAN'),
('NARIÑO', 'SANTA BaRBARA'),
('NARIÑO', 'TUMACO'),
('NARIÑO', 'ALBAN'),
('NARIÑO', 'ARBOLEDA'),
('NARIÑO', 'BELEN'),
('NARIÑO', 'BUESACO'),
('NARIÑO', 'COLON'),
('NARIÑO', 'CUMBITARA'),
('NARIÑO', 'EL ROSARIO'),
('NARIÑO', 'El Tablon de Gomez'),
('NARIÑO', 'LA CRUZ'),
('NARIÑO', 'LA UNION'),
('NARIÑO', 'LEIVA'),
('NARIÑO', 'POLICARPA'),
('NARIÑO', 'SAN BERNARDO'),
('NARIÑO', 'SAN LORENZO'),
('NARIÑO', 'SAN PABLO'),
('NARIÑO', 'SAN PEDRO DE CARTAGO'),
('NARIÑO', 'TAMINANGO'),
('NARIÑO', 'ALDANA'),
('NARIÑO', 'CONTADERO'),
('NARIÑO', 'CÓRDOBA'),
('NARIÑO', 'CUASPUD'),
('NARIÑO', 'CUMBAL'),
('NARIÑO', 'FUNES'),
('NARIÑO', 'GUACHUCAL'),
('NARIÑO', 'GUALMATAN'),
('NARIÑO', 'ILES'),
('NARIÑO', 'IMUES'),
('NARIÑO', 'IPIALES'),
('NARIÑO', 'POTOSÍ'),
('NARIÑO', 'PUERRES'),
('NARIÑO', 'PUPIALES'),
('NORTE DE SANTANDER', 'ARBOLEDAS'),
('NORTE DE SANTANDER', 'CUCUTILLA'),
('NORTE DE SANTANDER', 'GRAMALOTE'),
('NORTE DE SANTANDER', 'LOURDES'),
('NORTE DE SANTANDER', 'SALAZAR'),
('NORTE DE SANTANDER', 'SANTIAGO'),
('NORTE DE SANTANDER', 'VILLA CARO'),
('NORTE DE SANTANDER', 'BUCARASICA'),
('NORTE DE SANTANDER', 'EL TARRA'),
('NORTE DE SANTANDER', 'SARDINATA'),
('NORTE DE SANTANDER', 'TIBÚ'),
('NORTE DE SANTANDER', 'ABREGO'),
('NORTE DE SANTANDER', 'CACHIRÁ'),
('NORTE DE SANTANDER', 'CONVENCIÓN'),
('NORTE DE SANTANDER', 'EL CARMEN'),
('NORTE DE SANTANDER', 'HACARÍ'),
('NORTE DE SANTANDER', 'LA ESPERANZA'),
('NORTE DE SANTANDER', 'LA PLAYA'),
('NORTE DE SANTANDER', 'OCAÑA'),
('NORTE DE SANTANDER', 'SAN CALIXTO'),
('NORTE DE SANTANDER', 'TEORAMA'),
('NORTE DE SANTANDER', 'CÚCUTA'),
('NORTE DE SANTANDER', 'EL ZULIA'),
('NORTE DE SANTANDER', 'LOS PATIOS'),
('NORTE DE SANTANDER', 'PUERTO SANTANDER'),
('NORTE DE SANTANDER', 'SAN CAYETANO'),
('NORTE DE SANTANDER', 'VILLA DEL ROSARIO'),
('NORTE DE SANTANDER', 'CÁCOTA'),
('NORTE DE SANTANDER', 'CHITAGÁ'),
('NORTE DE SANTANDER', 'MUTISCUA'),
('NORTE DE SANTANDER', 'PAMPLONA'),
('NORTE DE SANTANDER', 'PAMPLONITA'),
('NORTE DE SANTANDER', 'SILOS'),
('NORTE DE SANTANDER', 'BOCHALEMA'),
('NORTE DE SANTANDER', 'CHINÁCOTA'),
('NORTE DE SANTANDER', 'DURANIA'),
('NORTE DE SANTANDER', 'HERRÁN'),
('NORTE DE SANTANDER', 'LABATECA'),
('NORTE DE SANTANDER', 'RAGONVALIA'),
('NORTE DE SANTANDER', 'TOLEDO'),
('PUTUMAYO', 'COLÓN'),
('PUTUMAYO', 'MOCOA'),
('PUTUMAYO', 'ORITO'),
('PUTUMAYO', 'PUERTO ASIS'),
('PUTUMAYO', 'PUERTO CAICEDO'),
('PUTUMAYO', 'PUERTO GUZMAN'),
('PUTUMAYO', 'PUERTO LEGUIZAMO'),
('PUTUMAYO', 'SAN FRANCISCO'),
('PUTUMAYO', 'SAN MIGUEL'),
('PUTUMAYO', 'SANTIAGO'),
('PUTUMAYO', 'SIBUNDOY'),
('PUTUMAYO', 'VALLE DEL GUAMUEZ'),
('PUTUMAYO', 'VILLA GARZON'),
('QUINDIO', 'ARMENIA'),
('QUINDIO', 'BUENAVISTA'),
('QUINDIO', 'CALARCA'),
('QUINDIO', 'CoRDOBA'),
('QUINDIO', 'GeNOVA'),
('QUINDIO', 'PIJAO'),
('QUINDIO', 'FILANDIA'),
('QUINDIO', 'SALENTO'),
('QUINDIO', 'CIRCASIA'),
('QUINDIO', 'LA TEBAIDA'),
('QUINDIO', 'Montengro'),
('QUINDIO', 'QUIMBAYA'),
('RISARALDA', 'DOSQUEBRADAS'),
('RISARALDA', 'LA VIRGINIA'),
('RISARALDA', 'MARSELLA'),
('RISARALDA', 'PEREIRA'),
('RISARALDA', 'SANTA ROSA DE CABAL'),
('RISARALDA', 'APÍA'),
('RISARALDA', 'BALBOA'),
('RISARALDA', 'BELÉN DE UMBRÍA'),
('RISARALDA', 'GUÁTICA'),
('RISARALDA', 'LA CELIA'),
('RISARALDA', 'QUINCHiA'),
('RISARALDA', 'SANTUARIO'),
('RISARALDA', 'MISTRATÓ'),
('RISARALDA', 'PUEBLO RICO'),
('SANTANDER', 'CHIMA'),
('SANTANDER', 'CONFINES'),
('SANTANDER', 'CONTRATACIÓN'),
('SANTANDER', 'EL GUACAMAYO'),
('SANTANDER', 'GALÁN'),
('SANTANDER', 'GAMBITA'),
('SANTANDER', 'GUADALUPE'),
('SANTANDER', 'GUAPOTÁ'),
('SANTANDER', 'HATO'),
('SANTANDER', 'OIBA'),
('SANTANDER', 'PALMAR'),
('SANTANDER', 'PALMAS DEL SOCORRO'),
('SANTANDER', 'SANTA HELENA DEL OPÓN'),
('SANTANDER', 'SIMACOTA'),
('SANTANDER', 'SOCORRO'),
('SANTANDER', 'SUAITA'),
('SANTANDER', 'CAPITANEJO'),
('SANTANDER', 'CARCASÍ'),
('SANTANDER', 'CEPITÁ'),
('SANTANDER', 'CERRITO'),
('SANTANDER', 'CONCEPCIÓN'),
('SANTANDER', 'ENCISO'),
('SANTANDER', 'GUACA'),
('SANTANDER', 'MACARAVITA'),
('SANTANDER', 'MÁLAGA'),
('SANTANDER', 'MOLAGAVITA'),
('SANTANDER', 'SAN ANDRÉS'),
('SANTANDER', 'SAN JOSÉ DE MIRANDA'),
('SANTANDER', 'SAN MIGUEL'),
('SANTANDER', 'ARATOCA'),
('SANTANDER', 'BARICHARA'),
('SANTANDER', 'CABRERA'),
('SANTANDER', 'CHARALÁ'),
('SANTANDER', 'COROMORO'),
('SANTANDER', 'CURITÍ'),
('SANTANDER', 'ENCINO'),
('SANTANDER', 'JORDÁN'),
('SANTANDER', 'MOGOTES'),
('SANTANDER', 'OCAMONTE'),
('SANTANDER', 'ONZAGA'),
('SANTANDER', 'PÁRAMO'),
('SANTANDER', 'PINCHOTE'),
('SANTANDER', 'SAN GIL'),
('SANTANDER', 'SAN JOAQUÍN'),
('SANTANDER', 'VALLE DE SAN JOSÉ'),
('SANTANDER', 'VILLANUEVA'),
('SANTANDER', 'BARRANCABERMEJA'),
('SANTANDER', 'BETULIA'),
('SANTANDER', 'EL CARMEN DE CHUCURÍ'),
('SANTANDER', 'PUERTO WILCHES'),
('SANTANDER', 'SABANA DE TORRES'),
('SANTANDER', 'SAN VICENTE DE CHUCURÍ'),
('SANTANDER', 'ZAPATOCA'),
('SANTANDER', 'BUCARAMANGA'),
('SANTANDER', 'CALIFORNIA'),
('SANTANDER', 'CHARTA'),
('SANTANDER', 'EL PLAYÓN'),
('SANTANDER', 'FLORIDABLANCA'),
('SANTANDER', 'GIRÓN'),
('SANTANDER', 'LEBRÍJA'),
('SANTANDER', 'LOS SANTOS'),
('SANTANDER', 'MATANZA'),
('SANTANDER', 'PIEDECUESTA'),
('SANTANDER', 'RIONEGRO'),
('SANTANDER', 'SANTA BÁRBARA'),
('SANTANDER', 'SURATA'),
('SANTANDER', 'TONA'),
('SANTANDER', 'VETAS'),
('SANTANDER', 'AGUADA'),
('SANTANDER', 'ALBANIA'),
('SANTANDER', 'BARBOSA'),
('SANTANDER', 'BOLÍVAR'),
('SANTANDER', 'CHIPATÁ'),
('SANTANDER', 'CIMITARRA'),
('SANTANDER', 'EL PEÑÓN'),
('SANTANDER', 'FLORIÁN'),
('SANTANDER', 'GUAVATÁ'),
('SANTANDER', 'GuEPSA'),
('SANTANDER', 'JESÚS MARÍA'),
('SANTANDER', 'LA BELLEZA'),
('SANTANDER', 'LA PAZ'),
('SANTANDER', 'LANDÁZURI'),
('SANTANDER', 'PUENTE NACIONAL'),
('SANTANDER', 'PUERTO PARRA'),
('SANTANDER', 'SAN BENITO'),
('SANTANDER', 'SUCRE'),
('SANTANDER', 'VÉLEZ'),
('SUCRE', 'GUARANDA'),
('SUCRE', 'MAJAGUAL'),
('SUCRE', 'SUCRE'),
('SUCRE', 'CHALÁN'),
('SUCRE', 'COLOSO'),
('SUCRE', 'MORROA'),
('SUCRE', 'OVEJAS'),
('SUCRE', 'SINCELEJO'),
('SUCRE', 'COVEÑAS'),
('SUCRE', 'PALMITO'),
('SUCRE', 'SAN ONOFRE'),
('SUCRE', 'SANTIAGO DE TOLÚ'),
('SUCRE', 'TOLÚ VIEJO'),
('SUCRE', 'BUENAVISTA'),
('SUCRE', 'COROZAL'),
('SUCRE', 'EL ROBLE'),
('SUCRE', 'GALERAS'),
('SUCRE', 'LOS PALMITOS'),
('SUCRE', 'SAMPUÉS'),
('SUCRE', 'SAN JUAN BETULIA'),
('SUCRE', 'SAN PEDRO'),
('SUCRE', 'SINCÉ'),
('SUCRE', 'CAIMITO'),
('SUCRE', 'LA UNIÓN'),
('SUCRE', 'SAN BENITO ABAD'),
('SUCRE', 'SAN MARCOS'),
('TOLIMA', 'AMBALEMA'),
('TOLIMA', 'ARMERO'),
('TOLIMA', 'FALAN'),
('TOLIMA', 'FRESNO'),
('TOLIMA', 'HONDA'),
('TOLIMA', 'MARIQUITA'),
('TOLIMA', 'PALOCABILDO'),
('TOLIMA', 'CARMEN DE APICALÁ'),
('TOLIMA', 'CUNDAY'),
('TOLIMA', 'ICONONZO'),
('TOLIMA', 'MELGAR'),
('TOLIMA', 'VILLARRICA'),
('TOLIMA', 'ATACO'),
('TOLIMA', 'CHAPARRAL'),
('TOLIMA', 'COYAIMA'),
('TOLIMA', 'NATAGAIMA'),
('TOLIMA', 'ORTEGA'),
('TOLIMA', 'PLANADAS'),
('TOLIMA', 'RIOBLANCO'),
('TOLIMA', 'RONCESVALLES'),
('TOLIMA', 'SAN ANTONIO'),
('TOLIMA', 'ALVARADO'),
('TOLIMA', 'ANZOÁTEGUI'),
('TOLIMA', 'CAJAMARCA'),
('TOLIMA', 'COELLO'),
('TOLIMA', 'ESPINAL'),
('TOLIMA', 'FLANDES'),
('TOLIMA', 'IBAGUe'),
('TOLIMA', 'PIEDRAS'),
('TOLIMA', 'ROVIRA'),
('TOLIMA', 'SAN LUIS'),
('TOLIMA', 'VALLE DE SAN JUAN'),
('TOLIMA', 'ALPUJARRA'),
('TOLIMA', 'DOLORES'),
('TOLIMA', 'GUAMO'),
('TOLIMA', 'PRADO'),
('TOLIMA', 'PURIFICACIÓN'),
('TOLIMA', 'SALDAÑA'),
('TOLIMA', 'SUÁREZ'),
('TOLIMA', 'CASABIANCA'),
('TOLIMA', 'HERVEO'),
('TOLIMA', 'LeRIDA'),
('TOLIMA', 'LiBANO'),
('TOLIMA', 'MURILLO'),
('TOLIMA', 'SANTA ISABEL'),
('TOLIMA', 'VENADILLO'),
('TOLIMA', 'VILLAHERMOSA'),
('VALLE DEL CAUCA', 'ANDALUCÍA'),
('VALLE DEL CAUCA', 'BUGA'),
('VALLE DEL CAUCA', 'BUGALAGRANDE'),
('VALLE DEL CAUCA', 'CALIMA'),
('VALLE DEL CAUCA', 'EL CERRITO'),
('VALLE DEL CAUCA', 'GINEBRA'),
('VALLE DEL CAUCA', 'GUACARÍ'),
('VALLE DEL CAUCA', 'RESTREPO'),
('VALLE DEL CAUCA', 'RIOFRIO'),
('VALLE DEL CAUCA', 'SAN PEDRO'),
('VALLE DEL CAUCA', 'TRUJILLO'),
('VALLE DEL CAUCA', 'TULUÁ'),
('VALLE DEL CAUCA', 'YOTOCO'),
('VALLE DEL CAUCA', 'ALCALa'),
('VALLE DEL CAUCA', 'ANSERMANUEVO'),
('VALLE DEL CAUCA', 'ARGELIA'),
('VALLE DEL CAUCA', 'BOLÍVAR'),
('VALLE DEL CAUCA', 'CARTAGO'),
('VALLE DEL CAUCA', 'EL ÁGUILA'),
('VALLE DEL CAUCA', 'EL CAIRO'),
('VALLE DEL CAUCA', 'EL DOVIO'),
('VALLE DEL CAUCA', 'LA UNIÓN'),
('VALLE DEL CAUCA', 'LA VICTORIA'),
('VALLE DEL CAUCA', 'OBANDO'),
('VALLE DEL CAUCA', 'ROLDANILLO'),
('VALLE DEL CAUCA', 'TORO'),
('VALLE DEL CAUCA', 'ULLOA'),
('VALLE DEL CAUCA', 'VERSALLES'),
('VALLE DEL CAUCA', 'ZARZAL'),
('VALLE DEL CAUCA', 'BUENAVENTURA'),
('VALLE DEL CAUCA', 'CAICEDONIA'),
('VALLE DEL CAUCA', 'SEVILLA'),
('VALLE DEL CAUCA', 'CALI'),
('VALLE DEL CAUCA', 'CANDELARIA'),
('VALLE DEL CAUCA', 'DAGUA'),
('VALLE DEL CAUCA', 'FLORIDA'),
('VALLE DEL CAUCA', 'JAMUNDÍ'),
('VALLE DEL CAUCA', 'LA CUMBRE'),
('VALLE DEL CAUCA', 'PALMIRA'),
('VALLE DEL CAUCA', 'PRADERA'),
('VALLE DEL CAUCA', 'VIJES'),
('VALLE DEL CAUCA', 'YUMBO'),
('VAUPÉS', 'CARURU'),
('VAUPÉS', 'MITÚ'),
('VAUPÉS', 'PACOA'),
('VAUPÉS', 'PAPUNAHUA'),
('VAUPÉS', 'TARAIRA'),
('VAUPÉS', 'YAVARATÉ'),
('VICHADA', 'CUMARIBO'),
('VICHADA', 'LA PRIMAVERA'),
('VICHADA', 'PUERTO CARREÑO'),
('VICHADA', 'SANTA ROSALÍA');
");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('registro');
        Schema::dropIfExists('documentos');
        Schema::dropIfExists('denuncia');
        Schema::dropIfExists('ciudades');
    }
}
