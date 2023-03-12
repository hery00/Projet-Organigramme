
<div class="liste">
    <table>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Poste</th>
        <th> description du poste</th>
        <?php for($i=0;$i<count($Objets);$i++) { ?>
        <tr>
            <td><?php echo $Objets[$i]['nom']; ?></td>
            <td><?php echo $Objets[$i]['prenom']; ?></td>
            <td><?php echo $Objets[$i]['poste']; ?></td>
            <!-- <td><?php echo $Objets[$i]['Descri']; ?></td> -->
            <td>Description</td>
        </tr>
        <?php } ?>
    </table>
</div>