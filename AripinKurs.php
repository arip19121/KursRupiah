<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurs Aripin 0110219121 TI Weekend 2019</title>
</head>
<body>
    <fieldset>
        <legend>Kurs Rupiah ke Mata Uang Asing</legend>
            <table border="1">
                <tr>
                    <td>Masukkan Nilai</td>
                    <td>Valas</td>
                    <td>Nilai Rupiah</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nilai" id="nilai" onchange="menghitung_valas()">
                    </td>
                    <td>
                        <select name="valas" id="valas" onchange="menghitung_valas()">
                            <option value="9915">Dollar US</option>
                            <option value="13472">Dollar Singapore</option>
                            <option value="874">Ringgir Malaysia</option>
                            <option value="120">Yen Japan</option>
                            <option value="15888">Euro</option>
                            <option value="3592">Riyal UAE</option>
                        </select>
                    </td>
                    <td><input type="text" name="hasil" id="hasil"></td>
                </tr>
            </table>
    </fieldset>
</body>
<script>
    function menghitung_valas(){
        let valas = document.getElementById("valas").value;
        let nilai = document.getElementById("nilai").value;
        document.getElementById("hasil").value = nilai * valas;
    }
</script>
</html>
