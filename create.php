<html>
<head>
</head>
<body>
    <h2>Create</h2>
    <form method="post" action="outter.php">
        <table padding="3">
            <tr>
                <td>nim</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>
                    <label>prodi</label>
                    <select name="prodi">
                        <option value="Teknik Informatika">IF</option>
                        <option value="Teknik Geomatika">TG</option>
                        <option value="Teknik Fisika">TF</option>
                        <option value="Teknik Kimia">TK</option>
                        <option value="Teknik Elektro">EL</option>
                        <option value="Teknik Geologi">TL</option>
                        <option value="Teknik Sipil">SI</option>
                </select>
                </td>
            <tr>
                <td>angkatan</td>
                <td><input type="number" name="angkatan"></td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="tambah">
        <a href="index.php"><input type="button" value="batal"</a>
</form>
</body>
</html>