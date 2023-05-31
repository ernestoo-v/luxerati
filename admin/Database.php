<?php

class Database
{
    public static function conectar()
    {
        /*
            SE ENCARGA DE LA CONEXIÓN
            */
        $driver = 'mysql';
        $host = '127.0.0.1';
        $port = '3306';
        $user = 'root';
        $password = '';
        $db = 'PFC';

        $dsn = "$driver:dbname=$db;host=$host;port=$port";

        try {
            // La variable $gbd tiene toda la configuracion de la conexion
            $gbd = new PDO($dsn, $user, $password);
            //echo 'Conectado correctamente';
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

        return $gbd;
    }

    public static function getAllCars()
    {
        /*
            1. Conectar
            2. Realizar la query
            */

        $sql = "SELECT * FROM 2_coches";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    public static function getAllEvents()
    {
        /*
            1. Conectar
            2. Realizar la query
            */

        $sql = "SELECT * FROM 2_eventos";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    public static function getAllRaffles()
    {
        /*
            1. Conectar
            2. Realizar la query
            */

        $sql = "SELECT * FROM 2_sorteos";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    public static function getAllNews()
    {
        /*
            1. Conectar
            2. Realizar la query
            */

        $sql = "SELECT * FROM 2_noticias";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    public static function getAllUsername()
    {
        /*
            1. Conectar
            2. Realizar la query
            */

        $sql = "SELECT * FROM 2_users";
        $resultado = self::conectar()->query($sql);

        return $resultado;
    }

    /*QUERYS*/

    /*ELIMINAR*/
    public static function delete($id, $tabla)
    {
        $sql = "DELETE FROM $tabla WHERE id = $id";
        self::conectar()->exec($sql);
    }


    /*CREAR*/
    public static function saveNoticias($datos)
    {
        $sql = "INSERT INTO 2_noticias (nombre_noticias, href_noticia) VALUES ('$datos[0]', '$datos[1]')";
        self::conectar()->exec($sql);
    }

    public static function saveCoches($datos)
    {
        $sql = "INSERT INTO 2_coches (marca_coche, modelo_coche, ano_coche, precio_coche, color_coche,velocidad_coche,potencia_coche,consumo_coche) VALUES ('$datos[0]', '$datos[1]', $datos[2], $datos[3], '$datos[4]',$datos[5],$datos[6],$datos[7])";

        self::conectar()->exec($sql);
    }

    public static function saveEventos($datos)
    {
        $sql = "INSERT INTO 2_eventos (nombre_evento, fecha_evento, descripcion_evento, href_evento) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
        self::conectar()->exec($sql);
    }

    public static function saveSorteos($datos)
    {
        $sql = "INSERT INTO 2_sorteos (nombre_sorteo, descripcion_sorteo, fecha_fin_sorteo) VALUES ('$datos[0]', '$datos[1]', '$datos[2]')";
        self::conectar()->exec($sql);
    }
    public static function saveUsername($datos)
    {
        $sql = "INSERT INTO 2_users (username, email, password, rol_id) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', $datos[3])";
        self::conectar()->exec($sql);
    }


    /*ACTUALIZAR*/
    public static function findById($id, $tabla)
    {
        $sql = "SELECT * FROM $tabla WHERE id = $id";
        $resultado = self::conectar()->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    public static function updateNoticias($datos)
    {
        $sql = "UPDATE 2_noticias SET nombre_noticias = '$datos[1]', href_noticia = '$datos[2]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }

    public static function updateCoches($datos)
    {
        $sql = "UPDATE 2_coches SET marca_coche = '$datos[1]', modelo_coche = '$datos[2]', ano_coche = $datos[3], precio_coche = $datos[4], color_coche = '$datos[5]', velocidad_coche = $datos[6], potencia_coche = $datos[7], consumo_coche = $datos[8] WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }

    public static function updateEventos($datos)
    {
        $sql = "UPDATE 2_eventos SET nombre_evento = '$datos[1]', fecha_evento = '$datos[2]', descripcion_evento = '$datos[3]', href_evento = '$datos[4]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }

    public static function updateSorteos($datos)
    {
        $sql = "UPDATE 2_sorteos SET nombre_sorteo = '$datos[1]', descripcion_sorteo = '$datos[2]', fecha_fin_sorteo = '$datos[3]' WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }

    public static function updateUsuarios($datos)
    {
        $sql = "UPDATE 2_users SET username = '$datos[1]', email = '$datos[2]', password = '$datos[3]', rol_id = $datos[4] WHERE id = $datos[0]";
        self::conectar()->exec($sql);
    }
    public static function login($email, $password)
    {
        // 1. Conectar a la BD
        $sql = "Select password from 2_users where (email='$email' OR username = '$email')";
        echo $sql;

        $p = self::conectar()->query($sql)->fetch(PDO::FETCH_ASSOC);
        echo $p['password'];
        $e = password_verify($password, $p['password']);


        if ($e) {
            $sql = "Select * from 2_users where (email='$email' OR username = '$email')";
            $user = self::conectar()->query($sql);
            if ($user != null) {
                return $user->fetch(PDO::FETCH_ASSOC);
            } else {
                return null;
            }
        } else {
            return null;
        }
        // exit();
        // // 2. Realizar consulta con el email y password recibido
        // $sql = "SELECT * FROM users WHERE (email = '$email' OR username = '$email') AND password = '$password'";
        // // $sql = "SELECT password as userPassword FROM users WHERE (email = '$email' OR username = '$email')";

        // $user = self::conectar()->query($sql);

        // if ($user != null) {
        //     return $user->fetch(PDO::FETCH_ASSOC);
        // } else {
        //     return null;
        // }

        // if ($user != null) {
        //     $hashPassword =  $user->fetch(PDO::FETCH_ASSOC)['userPassword'];


        //     if (password_verify('$password',  $hashPassword)) {
        //         return $user->fetch(PDO::FETCH_ASSOC);
        //     } else {
        //         return null;
        //     }
        // } else {
        //     return null;
        // }
    }

    public static function addUser($email, $user, $password)

    {
        // $hashPassword = password_hash('$password', PASSWORD_DEFAULT);
        $sql = "INSERT INTO 2_users (id,username,email, password, rol_id) VALUES (null,'$user','$email','$password',2)";
        self::conectar()->exec($sql);
    }

    public static function register($email, $user, $password)
    {



        $sql = "SELECT count(*) as contador FROM 2_users WHERE username= '$user' or email='$email';";

        // 3. Si es correcto, devuelvo los datos del usuario
        $result = self::conectar()->query($sql);

        //header('Location: ../index.php?valido=' . $result->fetch(PDO::FETCH_ASSOC)['contador']);


        return $result->fetch(PDO::FETCH_ASSOC)['contador'];
        // $result->fetch(PDO::FETCH_ASSOC)['contador'];

        // if ($result == 1) {

        //     return $result;
        // }
        // // } else {
        // //     return $result->fetch(PDO::FETCH_ASSOC)['contador'];
        // // }



        // if ($result->fetch(PDO::FETCH_ASSOC)['contador'] == 0) {
        //     //self::addUser($email, $user, $password);


        //     return $result->fetch(PDO::FETCH_ASSOC)['contador'];
        // } else {
        //     // header('Location: ../inicio-sesion/inicio.php?valido=' . $result);
        //     return $result->fetch(PDO::FETCH_ASSOC)['contador'];
        // }
    }


    public static function addFavorite($query)
    {

        self::conectar()->exec($query);
    }

    public static function deleteFavorite($id, $tabla)
    {

        $sql = "DELETE FROM $tabla WHERE id_coche = $id";
        self::conectar()->exec($sql);
    }




    public static function mostrarFavoritos($query)
    {
        $result = self::conectar()->query($query);
    }
}
