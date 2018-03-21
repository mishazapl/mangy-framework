<?php

require __DIR__ . '/../../app/component/helpers/App.php';
require __DIR__ . '/../../app/component/helpers/Functions.php';

/* хелперы */
\App\component\helpers\App::setApp('helpers', App\component\helpers\FunctionsClass::class);
/* роутинг */
\App\component\helpers\App::setApp('route', \App\component\router\Route::class);