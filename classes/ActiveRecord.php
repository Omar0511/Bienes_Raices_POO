<?php 

    namespace App;

    class ActiveRecord {        
        //Solo en la clase podemos acceder a el, static porque siempre seran las mismas credenciales
        protected static $conexion;
        protected static $columnasDB = [];
        protected static $tabla = '';
        //Errores
        protected static $errores = [];

        /*
            Definir la conexion a la BD, como el atributo es STATICS, el metodo debe ser igual, 
            self hace referencia a los atributos estaticos
            tood lo que este como PUBLIC, hacemos referencia con $this            
        */
        public static function setDB($database) {
            self::$conexion = $database;
        }

        public function guardar() {
            if (!is_null($this->id)) {
                //Actualizar
                $this->actualizar();
            } else {
                //Creando nuevo registro
                $this->crear();
            }
        }

        public function crear() {
            //Sanitizar datos
            $atributos = $this->sanitizarQuery();

            //Crea un string a partir de un arreglo
            //debuguear(array_keys($atributos));            

            $query = "INSERT INTO " . static::$tabla . " ( ";
            $query .= join(', ', array_keys($atributos));
            $query .= " ) VALUES (' ";
            $query .= join("', '", array_values($atributos));
            $query .= " ') ";                        
            
            $resultado = self::$conexion->query($query);
            //debuguear($resultado);    
            
            if ($resultado) {
                header('Location: /admin?resultado=1');
            }
        }

        public function actualizar() {
            //Sanitizar datos
            $atributos = $this->sanitizarQuery();

            $valores = [];
            foreach($atributos as $key => $value) {
                $valores[] = "{$key}='{$value}'";
            }
            
            $query = "UPDATE " . static::$tabla . " SET ";
            $query .= join(', ', $valores);
            $query .= " WHERE id = '" . self::$conexion->escape_string($this->id) . "' ";
            $query .= " LIMIT 1;";

            $resultado = self::$conexion->query($query);
            
            if ($resultado) {
                header('Location: /admin?resultado=2');
            }
        }
        
        //Eliminar un registro
        public function eliminar() {
            $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$conexion->escape_string($this->id) . " LIMIT 1;";

            $resultado = self::$conexion->query($query);

            if ($resultado) {
                $this->borrarImagen();
                header('Location: /admin?resultado=3');
            }
        }

        //Identificar y unir los atributos de la BD
        public function atributos() {
            $atributos = [];

            foreach (static::$columnasDB as $columna) {
                if ($columna === 'id') {
                    continue;
                }

                $atributos[$columna] = $this->$columna;
            }

            return $atributos;
        }

        public function sanitizarQuery() {
            $atributos = $this->atributos();
            $sanitizado = [];

            foreach ($atributos as $key => $value) {
                $sanitizado[$key] = self::$conexion->escape_string($value);
            }

            return $sanitizado;
        }

        //Subida de archivos
        public function setImagen($imagen) {
            //Eliminar imagen previa
            if (!is_null($this->id)) {
                $this->borrarImagen();
            }

            //Asignando el atributo de imagen el nombre de la imagen
            if ($imagen) {
                $this->imagen = $imagen;
            }
        }

        //Elminar imagen
        public function borrarImagen() {
            //Comprobar si existe el archivo
            $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
            if ($existeArchivo) {
                unlink(CARPETA_IMAGENES . $this->imagen);
            }
        }

        public static function getErrores() {            
            return static::$errores;
        }

        public function validar() {            
            static::$errores = [];

            return static::$errores;
        }

        //Listando las propiedades (registros)
        public static function all() {
            $query = "SELECT * FROM  " . static::$tabla;

            //$resultado = self::$conexion->query($query);
            $resultado = self::consultarSQL($query);

            //debuguear($resultado->fetch_assoc());

            return $resultado;
        }

        //Obtiene determinando número de registros
        public static function get($cantidad) {
            $query = "SELECT * FROM  " . static::$tabla . " LIMIT " . $cantidad;

            //$resultado = self::$conexion->query($query);
            $resultado = self::consultarSQL($query);

            //debuguear($resultado->fetch_assoc());

            return $resultado;
        }

        //Busca un registro por su ID
        public static function find($id) {
            $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id};";

            $resultado = self::consultarSQL($query);

            //array_shift = retorna el primer elemento de un arreglo
            return array_shift($resultado);
        }

        public static function consultarSQL($query) {
            //Consultar la BD
            $resultado = self::$conexion->query($query);

            //Iterar resultados
            $array = [];
            while($registro = $resultado->fetch_assoc()) {
                $array[] = static::crearObjeto($registro);
            }

            //Liberar memoria
            $resultado->free();

            //Retornar los resultados
            return $array;

            //debuguear($array);
        }

        protected static function crearObjeto($registro) {
            //Crea objetos de la clase actual(padre)
            $objeto = new static;

            foreach ($registro as $key => $value) {
                if (property_exists($objeto, $key)) {
                    $objeto->$key = $value;
                }
            }

            //debuguear($objeto);

            return $objeto;
        }

        //Sincroniza el objeto en memoria con los cambios realizados por el usuario
        public function sincronizar($args = []) {
            foreach($args as $key => $value) {
                if (property_exists($this, $key) && !is_null($value)) {
                    $this->$key = $value;
                }
            }
        }
    }