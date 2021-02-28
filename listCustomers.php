<?php include 'commerce.php'; ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Liste de clients</title>
  </head>
  <body style="background-color:lavenderblush">
  <h1 style="margin:50px auto;text-align:center;font-family:papyrus,cursive;font-size:60px;font-weight:bold;">Liste de clients</h1>
  <div class="container">
        <div class='table-responsive'>
            <table id='myTable' class='table table-striped table-bordered'>
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Billing Address</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                <!-- <pre><?php var_dump($woocommerce->get('customers')); ?></pre> -->
                <?php  foreach ($woocommerce->get('customers') as $customer): ?> 
                <tr> <td><?= $customer->username ?></td>
                       <td><?= $customer->email ?></td>
                       <td><?= $customer->first_name.' '.$customer->last_name ?></td>
                       <td><?= $customer->billing->address_1 ?></td>
                       <td><?= $customer->billing->city ?></td>
                </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
        </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>