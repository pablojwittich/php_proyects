# Laravel

- Que es Laravel
    
    Laravel es un framework de PHP. Un framework es un marco de trabajo que nos ofrece funcionalidades. 
    
    Laravel es un framework tipo MVC.
    
    - Que es MVC?
        
        Laravel es un framework Modelo Vista Controlador, esto es lo que significa MVC. Y se organiza de la siguiente manera
        
        ![MVC1.drawio.png](Laravel%205bcebb5ae5454adf8fbdbeba31e08e82/MVC1.drawio.png)
        
        Pero Laravel va mucho mas alla….
        
        ![Mvc2.drawio.png](Laravel%205bcebb5ae5454adf8fbdbeba31e08e82/Mvc2.drawio.png)
        
    
- Instalar Laravel en local
    
    **Requisitos:** Tener instalado PHP, Composer, Node y npm
    
    Hay dos maneras de instalar Laravel :
    
    - Mediante composer con el comando `composer create-proyect laravel/laravel nombre-app`
    - Mediante otro comando donde primero instalamos Laravel y luego a través de comando Laravel crea el proyecto:
        
        `composer global requiere laravel`
        
        `laravel new nombre-app`
        
    
    Dentro de la carpeta que genero con nuestro proyecto podemos ejecutar un comando para que se levante un servidor para ver desde el navegador nuestro programa, dicho comando es `php artisan serve` y nos devolverá un mensaje el cual nos dará la dirección para visualizar el proyecto `INFO Server running on [http://127.0.0.1:8000]` . Mas adelante tendremos que también iniciar los servicios apache y mysql.
    
- Configurar BD
    
    Para configurar la BD podemos abrir un gestor de BD y empezar a configurar las tablas necesarias para el proyecto (obviamente antes creando una nueva BD). Luego tendríamos que abrir el proyecto desde el editor de código y dentro de la carpeta del proyecto hay el archivo `.env` . Dicho archivo guarda ciertas variables de entorno o producción, cada una de estas variables tendremos que modificar su valor para configurar el proyecto. 
    
    - Migraciones en Laravel
        - Donde se encuentran en el proyecto?
            
            Las migraciones se encuentran en `database\migrations\2014_10_12_000000_create_users_table.php`
            
        - Que son las migraciones?
            
            Son archivos que están dentro de una carpeta que nos permite crear el esquema de nuestra BD y las tablas de las mismas con simplemente programación orientada a objetos.
            
        
        En dichos archivos habrá dos métodos `up()` y `down()` . La clase `Blueprint` y el objeto `$table` nos permitirá llamar a métodos los cuales nos facilitarán crear la columna de nuestra tabla. Ej:
        
        ```php
        <?php
        
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create('clientes', function (Blueprint $table) {
                    $table->id();
                    $table->string('nombre');
                    $table->string('apellido');
                    $table->integer('legajo');
                    $table->unsignedBigInteger('id_beneficio');
                    $table->foreign('id_beneficio')->references('id')->on('beneficios');
                    $table->uuid('uuid')->unique();
                    $table->timestamps();
                });
            }
        
            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists('clientes');
            }
        };
        
        ```
        
        El comando con el que podemos crear las migraciones si tener que hacerlo desde un servidor de  gestión de bases de datos (SGBD) es : `php artisan make:migration name_migration` . Y para ejecutar las migraciones unas vez definidas correremos el comando: `php artisan migrate` 
        
- Modelos en Laravel
    - Que son los modelos?
        
        Son clases de PHP (de Laravel) que nos permitirá interactuar con la BD. Los módulos se generan en la carpeta `app\models\` . Ahí veremos que el único modelo que existe es el `User.php` 
        
        - Dentro del archivo encontraremos
            - namespace → Es el lugar donde esta almacenado el archivo de la clase User
            - Illuminate → Son clases que Laravel ya tiene por defecto en la carpeta `vendor` . Nunca hay que editar los archivos de esta carpeta.
            - $fillable → Son los campos de nuestra BD que vamos a poder rellenar para ingresar datos de nuestra tabla.
            - $hidden → Son atributos que deberían ser ocultos para la realización
            - $casts → Para castear atributos. Procedimiento que consiste en transformar un objeto de una clase siempre y cuando haya una relación de herencia entre ambas.
            
            Ejemplo de una archivo `User.php` 
            
            ```php
            <?php
            
            namespace App\Models;
            
            // use Illuminate\Contracts\Auth\MustVerifyEmail;
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Foundation\Auth\User as Authenticatable;
            use Illuminate\Notifications\Notifiable;
            use Laravel\Sanctum\HasApiTokens;
            
            class User extends Authenticatable
            {
                use HasApiTokens, HasFactory, Notifiable;
            
                /**
                 * The attributes that are mass assignable.
                 *
                 * @var array<int, string>
                 */
                protected $fillable = [
                    'name',
                    'email',
                    'password',
                ];
            
                /**
                 * The attributes that should be hidden for serialization.
                 *
                 * @var array<int, string>
                 */
                protected $hidden = [
                    'password',
                    'remember_token',
                ];
            
                /**
                 * The attributes that should be cast.
                 *
                 * @var array<string, string>
                 */
                protected $casts = [
                    'email_verified_at' => 'datetime',
                ];
            }
            
            ```
            
    - Crear un nuevo modelo
        
        Para crear un nuevo modelo solo  tenemos que hacer es poner este código en la terminal: `php artisan make:model Name` . Los modelos son en singular y por el contrario las tablas en plural por convención. 
        
- Relación entre modelos
    - Tipos de relaciones:
        
        Podemos tener básicamente tres relaciones:
        
        - One To Many
            
            De uno a muchos
            
            ![relations1.drawio.png](Laravel%205bcebb5ae5454adf8fbdbeba31e08e82/relations1.drawio.png)
            
            Ya habiendo creado las tablas le damos una relación. En este caso para realizar una relación tendríamos que agregar el método en los modelos  de la siguiente forma:
            
            ```php
            <?php
            
            namespace App\Models;
            
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Database\Eloquent\Model;
            
            class Beneficio extends Model
            {
                // Aca se aplica encapsulamiento porque solo la clase beneficio
                // Puede modificar este campo
                protected $fillable = ['nombre_beneficio',];
            
                // Aca se define la funcion de uno a muchos -> donde un beneficio puede tener muchos clientes
                public function clientes()
                {
                    return $this->hasMany(Cliente::class,'id_beneficio');
                }
            }
            ```
            
        - BelongsTo
            
            De muchos a pocos 
            
            ![relations2.drawio.png](Laravel%205bcebb5ae5454adf8fbdbeba31e08e82/relations2.drawio.png)
            
            Es el caso contrario a One To Many y en este caso deberíamos hacer lo siguiente:
            
            ```php
            <?php 
            class Cliente extends Model
            {
            	public function cliente(): BelongsTo
            	{
            		return $this->belongsTo(User::class);
            	}
            }
            ```
            
        - Many To  Many
            
            De muchos a muchos
            
            ![relations3.drawio.png](Laravel%205bcebb5ae5454adf8fbdbeba31e08e82/relations3.drawio.png)
            
            Vamos a necesitar una tabla “pibote” es decir una tabla intermedia. Hay que tener en cuenta que los nombres de las tablas se ponen en singular. Lo primero que tenemos que hacer es ir a la termina para crear la migración de la tabla intermedia y para dicha tabla no se suele crear un modelo (en la mayoría de las tablas no es necesario). Creamos la migración con el comando `php artisan make:migrate create_id_user_tabla` . Luego configuramos el archivo prácticamente igual a como teníamos en la migración anterior.
            
            ```php
            public function up(): void
            {
            	Schemma::create('id_user´, function (Blueprint $table)
            	{
            		$table -> id();
            		$table -> foreing('role_user');
            		$table -> timestamp();
            	});
            }
            ```
            
        
    - Configurar nuestras migraciones
        
        Para configurar tenemos que dirigirnos a los archivos que están dentro de `database\migrations\` y en la función `up()` mediante la clase `Blueprint` y la propiedad `$table` podemos crear los campos de nuestra BD. Ejemplo:
        
        ```php
        <?php
        
        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration
        {
            public function up()
            {
                Schema::create('beneficios', function (Blueprint $table) {
                    $table->id();
                    $table->string('nombre_beneficio');
                    $table->timestamps();
                });
            }
            public function down()
            {
                Schema::dropIfExists('beneficios');
            }
        };
        ```
        
    - FK and PK
        
        Foreing key → En SQL es una clase (campo de columna que sirve para relacionar dos tablas). El campo FK se relaciona o vincula con la Primary Key de otra tabla de BD. La tabla secundaria es la que contiene la foreing  key y la principal el primary key . La foreing key que se permite agregar o insertar datos no son validos en la columna FK y a que los valores que se encuentran o ya estén en la tabla que se quiere relacionar.
        
        Primary Key → En SQL identifica de forma única cada registro en una tabla. La PK deben contener valores únicos y no pueden contener valores `null` . Una tabla solo puede tener una PK que puede consistir en campos simples o múltiples