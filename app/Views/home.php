<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
        <title>CineStream - Movies & Shows</title>
    </head>
    <body>
        <header class="bg-body-tertiary mb-4">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">CineStream</a>
                    </div>
                </nav>
            </div>
        </header>
        <section class="fillter mb-3">
            <div class="container">
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" data-filter="all" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">All Types</label>
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" data-filter="movie" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Movies</label>
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" data-filter="show" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Show</label>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container my-auto pb-5">
                <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
                    <?php foreach ($content as $item): ?>
                        <div id="<?=$item['id']?>" class="col item-card" data-type="<?=$item['type']?>">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$item['title']?></h5>
                                    <span class="badge text-bg-danger"><?=$item['type']?></span>
                                    <span class="badge text-bg-warning"><i class="bi bi-star-fill me-1"></i> <?=$item['rating']?></span>
                                    <p class="card-text mt-2 text-secondary"><?=$item['description']?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const radioButtons = document.querySelectorAll('input[name="btnradio"]');
                const cards = document.querySelectorAll('.item-card');
                radioButtons.forEach(radio => {
                    radio.addEventListener('change', (e) => {
                        const selectedFilter = e.target.getAttribute('data-filter');
                        cards.forEach(card => {
                            const cardType = card.getAttribute('data-type');
                            
                            if (selectedFilter === 'all' || cardType === selectedFilter) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });
                });
            });
        </script>
    </body>
</html>