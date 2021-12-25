<?php

use function PHPSTORM_META\type;

$con = mysqli_connect("localhost", "root", "", "kebakaran-nn") or die("Koneksi Gagal !!");

function setWeight(): array
{
    $sizeTraning = 0.7;
    $w = [25, 50, 14, 0, 64.3, 3.2, 7.2, 1, 3.3, 0.2];
    $learningRate = 0.9;
    $threshold = 0;

    $ORIdataset = query("SELECT temprature,rm,windspeed,rain,ffmc,dmc,dc,isi,bui,fwi,incident FROM datacenter");

    shuffle($ORIdataset);
    $dataSet = array_splice($ORIdataset, 0, round(count($ORIdataset) * $sizeTraning));
    $listV = [];
    $listError = array();
    $prediction = [];

    $error = 1;
    while ($error > 0) {
        $error = 0;
        for ($i = 0; $i < count($dataSet); $i++) {
            $value = 0;
            for ($j = 0; $j < count($dataSet[$i]) - 1; $j++) {
                $value += ($dataSet[$i][$j] * $w[$j]);
            }
            $listV[$i] = $value;

            if ($listV[$i] < $threshold) {
                $prediction[$i] = 0;
            } else {
                $prediction[$i] = 1;
            }
            $listError[$i] = $dataSet[$i][count($dataSet[$i]) - 1] - $prediction[$i];
        }
        for ($i = 0; $i < count($listError); $i++) {
            if ($listError[$i] != 0 || $listError[$i] != -0) {
                $error += 1;
            }
        }
        if ($error != 0) {
            for ($i = 0; $i < count($dataSet); $i++) {
                for ($j = 0; $j < count($dataSet[$i]) - 1; $j++) {
                    $w[$j] = $w[$j] + ($learningRate * $listError[$i] * $dataSet[$i][$j]);
                }
            }
        }
    }
    return $w;
}

function query($sql): array
{
    global $con;
    $query = mysqli_query($con, $sql);
    $rows = array();
    while ($arr = mysqli_fetch_row($query)) {
        $rows[] = $arr;
    }
    return $rows;
}

function getPredict($testing): float
{
    $weight = setWeight();
    array_splice($testing, 0, 1); //hapus tanggal
    array_splice($testing, 10, 1); //hapus submit
    try {
        $testing = array_values($testing);
        $v = 0;
        for ($j = 0; $j < count($testing) - 1; $j++) {
            $v += ($testing[$j] * $weight[$j]);
        }
        return $v;
    } catch (\Throwable $th) {
        echo "
            <script>alert('Your input is error!');</script>
        ";
    }
}

function addData($data)
{
    global $con;
    $date = $data['tgl'];
    $temprature = $data['temp'];
    $rm = $data['rm'];
    $windspeed = $data['ws'];
    $rain = $data['rain'];
    $ffmc = $data['ffmc'];
    $dmc = $data['dmc'];
    $dc = $data['dc'];
    $isi = $data['isi'];
    $bui = $data['bui'];
    $fwi = $data['fwi'];
    $incident = $data['incident'];

    try {
        echo $date;
        $cek = mysqli_query($con, 'INSERT into datacenter VALUES(null,"' . $date . '","' . $temprature . '","' . $rm . '","' . $windspeed . '","' . $rain . '","' . $ffmc . '","' . $dmc . '","' . $dc . '","' . $isi . '","' . $bui . '","' . $fwi . '","' . $incident . '")');
        if ($cek) {
            echo '
                <script type="text/javascript">
                alert("Add Data Successfully");
                document.location.href = "datacenter.php";
                </script>
            ';
        } else {
            echo '
                <script type="text/javascript">
                alert("there is something wrong with the SQL !");
                document.location.href = "add.php";
                </script>
            ';
        }
    } catch (Exception $e) {
        echo '
                <script type="text/javascript">
                alert("there is something wrong with the input !");
                document.location.href = "datacenter.php";
                </script>
            ';
    }
}

function update($data, $id)
{
    global $con;
    $date = $data['tgl'];
    $temprature = $data['temp'];
    $rm = $data['rm'];
    $windspeed = $data['ws'];
    $rain = $data['rain'];
    $ffmc = $data['ffmc'];
    $dmc = $data['dmc'];
    $dc = $data['dc'];
    $isi = $data['isi'];
    $bui = $data['bui'];
    $fwi = $data['fwi'];
    $incident = $data['incident'];

    try {
        echo $date;
        $cek = mysqli_query($con, 'UPDATE datacenter SET tanggal = "' . $date . '",temprature = "' . $temprature . '",rm = "' . $rm . '",windspeed = "' . $windspeed . '",rain = "' . $rain . '",ffmc = "' . $ffmc . '",dmc = "' . $dmc . '",dc = "' . $dc . '",isi = "' . $isi . '",bui = "' . $bui . '",fwi = "' . $fwi . '",incident = "' . $incident . '" WHERE id = ' . $id . ' ');
        if ($cek) {
            echo '
                <script type="text/javascript">
                alert("Update Data Successfully");
                document.location.href = "datacenter.php";
                </script>
            ';
        } else {
            echo '
                <script type="text/javascript">
                alert("there is something wrong with the SQL !");
                document.location.href = "update.php?i=' . $id . '";
                </script>
            ';
        }
    } catch (Exception $e) {
        echo '
                <script type="text/javascript">
                alert("there is something wrong with the input !");
                document.location.href = "datacenter.php";
                </script>
            ';
    }
}

function delete($id)
{
    global $con;
    try {
        $query = mysqli_query($con, "DELETE FROM datacenter WHERE id = " . $id . " ");
        if ($query) {
            echo '
                <script type="text/javascript">
                alert("Delete Data Successfully");
                document.location.href = "datacenter.php";
                </script>
            ';
        } else {
            echo '
                <script type="text/javascript">
                alert("Delete Data Error");
                document.location.href = "datacenter.php";
                </script>
            ';
        }
    } catch (Exception $e) {
        echo '
                <script type="text/javascript">
                alert("there is something wrong with the input !");
                document.location.href = "datacenter.php";
                </script>
            ';
    }
}
