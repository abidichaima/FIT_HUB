<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::showBack'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::showFront'], null, null, null, false, false, null]],
        '/participation/seance' => [[['_route' => 'app_participation_seance_index', '_controller' => 'App\\Controller\\ParticipationSeanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/seance/participation' => [[['_route' => 'app_participation_seance_index1', '_controller' => 'App\\Controller\\ParticipationSeanceController::index1'], null, ['GET' => 0], null, false, false, null]],
        '/participation/seance/AllParticipationSeances' => [[['_route' => 'participation_index_json', '_controller' => 'App\\Controller\\ParticipationSeanceController::afficherJson'], null, null, null, false, false, null]],
        '/participation/seance/participation/Ajoutjson' => [[['_route' => 'app_participation_ajoutjson', '_controller' => 'App\\Controller\\ParticipationSeanceController::ajoutJson'], null, null, null, false, false, null]],
        '/participation/seance/new' => [[['_route' => 'app_participation_seance_new', '_controller' => 'App\\Controller\\ParticipationSeanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/seance' => [[['_route' => 'app_seance_index', '_controller' => 'App\\Controller\\SeanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/seance/histogram-chart-month' => [[['_route' => 'app_seance_chart_month', '_controller' => 'App\\Controller\\SeanceController::histogramChartMonth'], null, null, null, false, false, null]],
        '/seance/list' => [[['_route' => 'app_seance_index1', '_controller' => 'App\\Controller\\SeanceController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/seance/AllSeances' => [[['_route' => 'app_seance_index_json', '_controller' => 'App\\Controller\\SeanceController::afficherJson'], null, null, null, false, false, null]],
        '/seance/seance/ajoutjson' => [[['_route' => 'app_seance_ajoutjson', '_controller' => 'App\\Controller\\SeanceController::ajoutJson'], null, null, null, false, false, null]],
        '/seance/seance/add' => [[['_route' => 'app_seance_add', '_controller' => 'App\\Controller\\SeanceController::add'], null, ['POST' => 0], null, false, false, null]],
        '/seance/new' => [[['_route' => 'app_seance_new', '_controller' => 'App\\Controller\\SeanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/seance/new1' => [[['_route' => 'app_seance_new1', '_controller' => 'App\\Controller\\SeanceController::new1'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/video/admin' => [[['_route' => 'app_video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, false, false, null]],
        '/video/video' => [[['_route' => 'app_video_index1', '_controller' => 'App\\Controller\\VideoController::index1'], null, ['GET' => 0], null, false, false, null]],
        '/video/admin/videos' => [[['_route' => 'app_videos', '_controller' => 'App\\Controller\\VideoController::listVideos'], null, null, null, false, false, null]],
        '/video/new' => [[['_route' => 'app_video_new', '_controller' => 'App\\Controller\\VideoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/json' => [[['_route' => 'app_seance_calendar', '_controller' => 'App\\Controller\\SeanceController::seancesJson'], null, null, null, false, false, null]],
        '/histogram-chart-month' => [[['_route' => 'seance_histogram_chart', '_controller' => 'App\\Controller\\SeanceController::histogramChartMonth'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/participation/seance/(?'
                    .'|supprimerjson/([^/]++)(*:54)'
                    .'|modifierjson/([^/]++)(*:82)'
                    .'|([^/]++)(*:97)'
                    .'|participation/([^/]++)(*:126)'
                    .'|([^/]++)(?'
                        .'|/edit(*:150)'
                        .'|(*:158)'
                    .')'
                .')'
                .'|/seance(?'
                    .'|/(?'
                        .'|s(?'
                            .'|upprimerjson/([^/]++)(*:207)'
                            .'|eance/([^/]++)(*:229)'
                        .')'
                        .'|modifierSeancejson/([^/]++)(*:265)'
                        .'|([^/]++)/edit(?'
                            .'|(*:289)'
                            .'|1(*:298)'
                        .')'
                        .'|seance(?'
                            .'|/delete/([^/]++)(*:332)'
                            .'|s/delete/([^/]++)(*:357)'
                        .')'
                    .')'
                    .'|seancecalendar/([^/]++)(*:390)'
                .')'
                .'|/video/(?'
                    .'|back/([^/]++)(*:422)'
                    .'|front/([^/]++)(*:444)'
                    .'|([^/]++)(?'
                        .'|/edit(*:468)'
                        .'|(*:476)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:517)'
                    .'|wdt/([^/]++)(*:537)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:583)'
                            .'|router(*:597)'
                            .'|exception(?'
                                .'|(*:617)'
                                .'|\\.css(*:630)'
                            .')'
                        .')'
                        .'|(*:640)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        54 => [[['_route' => 'participation_supprimer_json', '_controller' => 'App\\Controller\\ParticipationSeanceController::supprimerJson'], ['id'], null, null, false, true, null]],
        82 => [[['_route' => 'app_participation_modifier_json', '_controller' => 'App\\Controller\\ParticipationSeanceController::modifierJson'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'app_participation_seance_show', '_controller' => 'App\\Controller\\ParticipationSeanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        126 => [[['_route' => 'app_participation_seance_show1', '_controller' => 'App\\Controller\\ParticipationSeanceController::show1'], ['id'], ['GET' => 0], null, false, true, null]],
        150 => [[['_route' => 'app_participation_seance_edit', '_controller' => 'App\\Controller\\ParticipationSeanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        158 => [[['_route' => 'app_participation_seance_delete', '_controller' => 'App\\Controller\\ParticipationSeanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        207 => [[['_route' => 'app_seance_supprimer_json', '_controller' => 'App\\Controller\\SeanceController::supprimerJson'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'app_seance_showBack', '_controller' => 'App\\Controller\\SeanceController::show1'], ['id'], ['GET' => 0], null, false, true, null]],
        265 => [[['_route' => 'app_seance_modifier_json', '_controller' => 'App\\Controller\\SeanceController::modifierJson'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'app_seance_edit', '_controller' => 'App\\Controller\\SeanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        298 => [[['_route' => 'app_seance_edit1', '_controller' => 'App\\Controller\\SeanceController::edit1'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        332 => [[['_route' => 'app_seance_delete', '_controller' => 'App\\Controller\\SeanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        357 => [[['_route' => 'app_seance_deleteC', '_controller' => 'App\\Controller\\SeanceController::deleteC'], ['id'], ['DELETE' => 0], null, false, true, null]],
        390 => [[['_route' => 'app_seance_show', '_controller' => 'App\\Controller\\SeanceController::showC'], ['id'], null, null, false, true, null]],
        422 => [[['_route' => 'app_video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        444 => [[['_route' => 'app_video_showFront', '_controller' => 'App\\Controller\\VideoController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'app_video_edit', '_controller' => 'App\\Controller\\VideoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        476 => [[['_route' => 'app_video_delete', '_controller' => 'App\\Controller\\VideoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        517 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        537 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        583 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        597 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        617 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        630 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        640 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
