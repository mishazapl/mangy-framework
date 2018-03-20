<?php

require __DIR__ . '/../../app/component/helpers/App.php';

/* хелперы */
\App\component\helpers\App::setApp('helpers', App\component\helpers\Functions::class);
/* роутинг */
\App\component\helpers\App::setApp('route', \App\component\router\Route::class);