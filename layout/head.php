<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
    <h1 class="text-center">Pets Shop</h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <div class="badge bg-primary position-absolute top-0 end-0">€<?= $product->getPrice() ?></div>
                        <div class="card-body">
                            <h3><?= $product->name ?></h3>
                            <p><?= $product->description ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

  