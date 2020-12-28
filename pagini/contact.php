<h1>Contact</h1>

<form action="index.php?p=contact" method="post">
    <table>
        <tr>
            <td>Nume:</td>
            <td>
                <input type="text" name="nume"/>
            </td>
        </tr>
        <tr>
            <td>Subiect:</td>
            <td>
                <input type="text" name="subiect" />
            </td>
        </tr>
        <tr>
            <td>Mesaj:</td>
        </tr>
        <tr>
            <td colspan="2">
                <textarea name="mesaj" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="trimite" value="Trimite" /></td>
        </tr>
    </table>
</form>

<?php 
    if(isset($_POST['trimite'])){
        $nume = $_POST['nume'];
        $subiect = $_POST['subiect'];
        $mesaj = $_POST['mesaj'];

        $to = "ionutsima@vtm.ro";
        $body = "";
        $body.= "NUME: $nume \n";
        $body.= "MESAJ: \n";
        $body.= $mesaj."\n";
        $header="FROM: obama@whitehouse.gov";

        mail($to,$subiect,$body,$header);

        print "<h3>Mesajul a fost trimis</h3>";
    }
?>