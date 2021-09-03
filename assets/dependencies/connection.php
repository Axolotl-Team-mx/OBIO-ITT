<?php
class DataBase
{
    private $hotsname = 'the.axolotlteam.com';
    private $connectioninfo = array(
        "database" => 'OBIO_ITT',
        "uid" => 'apiAxolotl',
        "pwd" => '^u4U5#keVl#7DKcj'
    );
    public function __construct()
    {
    }

    public function connect()
    {
        $conn = sqlsrv_connect($this->hotsname, $this->connectioninfo);

        if ($conn) {
            //echo "Logré conectarme.\n";
            return $conn;
        } else {
            echo "Connection could not be established.\n";
            die(print_r(sqlsrv_errors(), true));
        }
    }
    // 
    public function getHash($usrUsername)
    {
        $conn = $this->connect();

        $sql = 'SELECT * FROM Users WHERE usrUsername = ?;';
        $params = array($usrUsername);

        $stmt = sqlsrv_query($conn, $sql, $params);
        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

        if ($row) {
            $hash = $row['usrPassword'];
            return $hash;
        }
    }
    public function getUsers()
    {
        $sql = "SELECT * FROM Users";
        $conn = $this->connect();
        $stmt = sqlsrv_query($conn, $sql);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
            printf("Algo fallo");
        }
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "
            <form method='POST' action='#'>
                <tr>";
            echo "<td>" . $row['usrId'];
            echo "<input type='hidden' name='modId' value='" . $row['usrId'] . "'></td><td>";
            echo "<input class='form-control' type='text' name='modUsername' id='usrFname' placeholder='" . $row['usrUsername'] . "'>";
            echo "</td><td><input class='form-control' type='text' name='modFname' id='usrFname' placeholder='" . $row['usrFname'] . "'>";
            echo "</td><td><input class='form-control' type='text' name='modLname' id='usrFname' placeholder='" . $row['usrLname'] . "'>";
            echo "</td><td><input class='form-control' type='text' name='modEmail' id='usrFname' placeholder='" . $row['usrEmail'] . "'>";
            echo "</td><td><input class='form-control' type='password' name='modPassword' id='usrPassword' placeholder='Cambiar contraseña'>";
            echo "</td>
                    <td>
                        <div class='btn-group' role='group'>
                                <button type='submit' class='btn btn-primary' id='cmdModify'>Modificar</button>
                            <a href='users.php?delUser=" . $row['usrId'] . "'>
                                <button type='button' class='btn btn-danger' id='cmdDelete'>Eliminar</button>
                            </a>
                        </div>
                    </td>
                </tr>
            </form>
            ";
        }
    }
    function EliminarUsuario($usrId)
    {
        $sql = "DELETE FROM Users WHERE usrId= ? ;";
        $params = array($usrId);

        $conn = $this->connect();
        $stmt = sqlsrv_query($conn, $sql, $params);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        } else return true;
    }
    function ModificarUsuario($id, $attrib, $parm)
    {
        $sql = "UPDATE Users SET " . $attrib . "=? WHERE usrId=?";
        $params = array($parm, $id);

        $conn = $this->connect();
        $stmt = sqlsrv_query($conn, $sql, $params);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
            AlertMessage("Hubo un error al modificar el usuario.", "");
        } else return true;
    }
}
function AlertMessage($message, $ruta)
{
    echo '<script language="javascript">';
    echo 'alert("' . $message . '")';  //not showing an alert box.
    if ($ruta != '') {
        echo 'window.location.href = "' . "$ruta" . '";';
        echo "</script>";
    } else
        echo "</script>";
}
