<div id="booking" class="container">
    <div class="row">
        <div class="col-12">
            <?php
            $villedepart = $_POST['villedepart'];
            $villearrivee = $_POST['villearrivee'];


            $query = "SELECT * from vols where depart='$villedepart' AND destination='$villearrivee'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $result = $stmt->get_result();
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Date départ</th>
                        <th scope="col">Ville du départ</th>
                        <th scope="col">Ville d'arrivée</th>
                        <th scope="col">Nombre de Places</th>
                        <th scope="col">Reservation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <td><?= $row['date_depart']; ?></td>
                            <td><?= $row['depart']; ?></td>
                            <td><?= $row['destination']; ?></td>
                            <td><?= $row['num_place']; ?></td>
                            <td>
                                <button><a href="reservation.php?id=<?= $row['id']; ?>" type="button" class="btn btn-success"><i class="fas fa-edit"></i></a></button>
                            </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>