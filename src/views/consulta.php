<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - simple admin panel</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="style/style-header.css">
</head>
<body>

<div>
  <?php include 'header.php'; ?>
</div>

<div class="container" style="margin-top: 100px;">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Data de Naixament</th>
                <th>Adreça</th>
                <th>Grup</th>

            </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user['nom']?></td>
                <td><?= $user['cognoms']?></td>
                <td><?= $user['data_naix']?></td>
                <td><?= $user['adreca']?></td>
                <td><?= $user['grup']?></td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
</div>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>

<script src="script.js"></script>


<script>
	
$(document).ready(function() {
    $('#example').DataTable();
});

</script>


</body>
</html>
