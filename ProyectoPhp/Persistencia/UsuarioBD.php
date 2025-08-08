<?php
include_once "conexionBD.php";
include_once "../Logica/cliente.php";

class UsuarioBD extends conexion
{
    public function Login($email, $contraseña)
    {
        $conexion = $this->getConexion();
        $sql = "select * from usuarios where correo=? and password=?";
        $stmt = $conexion->prepare($sql);

        $stmt->bind_param("ss", $email, $contraseña);

        $stmt->execute();

        $usuario = new cliente();
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $usuario->setCi($fila['Ci']);
                $usuario->setNombre($fila['nombre']);
                $usuario->setEmail($fila['correo']);
                $usuario->setTelefono($fila['tel']);
                $usuario->setDireccion($fila['direccion']);
                $usuario->setTipo($fila['tipo']);
            }
            return $usuario;
        } else {
            return null;
        }
    }
    public function RegistrarUsuario($ci, $nombre, $correo, $telefono, $contraseña, $direccion, $tipo)
    {
        try {
            $conexion = $this->getConexion();
            $sql = "Insert into usuarios values (?,?,?,?,?,?,?)";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("issssss", $ci, $nombre, $correo, $telefono, $contraseña, $direccion, $tipo);
            $stmt->execute();
        } catch (mysqli_sql_exception $e) {
            switch ($e->getCode()) {
                case 1062:
                    echo "<script>
                            alert('La cédula que ingresaste ya existe');
                            </script>";
                    exit;
                case 1064:
                    echo "<script>
                            alert('No se cargó correctamente la consulta');
                            </script>";
                default:
                    echo "<script>
                        alert('Error en la página de registro. Intente nuevamente');
                            </script>" ;
                    exit;
            }
        }
    }
}
