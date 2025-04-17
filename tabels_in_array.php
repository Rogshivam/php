<html>
    <head>
        <title>Tabel</title>
</head>
<body>
    <tabel border="1">
        <tr>
            <td>S.N.</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>1</td>
            <td>shivam</td>
            <td>shivamk200.com@gmail.com</td>
        </tr>
        <tr>
        <tr>
            <td>2</td>
            <td>Nanodemonme</td>
            <td>nana@gmail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>baba</td>
            <td>baba@gmail.com</td>
        </tr>
        $user=[
            ["shivam","noida","shivamk2000.com@gmail.com"]
            ["anomol","gurugram","anmol.com@gmail.com"]
            ["sam","dehli","sam.com@gmail.com"]
        ];
        echo "<table>";
        for($i=0;$i<count($users);$i++){
            for($j=0;$j<count($users[$i]);$j++){
                echo "<td>"
                echo $users[$i][$j];

            }
            echo"</tr>";
        }
        echo"</table>";
</tabel>
</body>
</html>
