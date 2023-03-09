<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_back' => [[], ['_controller' => 'App\\Controller\\BackController::showBack'], [], [['text', '/back']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\FrontController::showFront'], [], [['text', '/front']], [], [], []],
    'app_participation_seance_index' => [[], ['_controller' => 'App\\Controller\\ParticipationSeanceController::index'], [], [['text', '/participation/seance/']], [], [], []],
    'app_participation_seance_index1' => [[], ['_controller' => 'App\\Controller\\ParticipationSeanceController::index1'], [], [['text', '/participation/seance/participation']], [], [], []],
    'participation_index_json' => [[], ['_controller' => 'App\\Controller\\ParticipationSeanceController::afficherJson'], [], [['text', '/participation/seance/AllParticipationSeances']], [], [], []],
    'app_participation_ajoutjson' => [[], ['_controller' => 'App\\Controller\\ParticipationSeanceController::ajoutJson'], [], [['text', '/participation/seance/participation/Ajoutjson']], [], [], []],
    'participation_supprimer_json' => [['id'], ['_controller' => 'App\\Controller\\ParticipationSeanceController::supprimerJson'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participation/seance/supprimerjson']], [], [], []],
    'app_participation_modifier_json' => [['id'], ['_controller' => 'App\\Controller\\ParticipationSeanceController::modifierJson'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participation/seance/modifierjson']], [], [], []],
    'app_participation_seance_new' => [[], ['_controller' => 'App\\Controller\\ParticipationSeanceController::new'], [], [['text', '/participation/seance/new']], [], [], []],
    'app_participation_seance_show' => [['id'], ['_controller' => 'App\\Controller\\ParticipationSeanceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participation/seance']], [], [], []],
    'app_participation_seance_show1' => [['id'], ['_controller' => 'App\\Controller\\ParticipationSeanceController::show1'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participation/seance/participation']], [], [], []],
    'app_participation_seance_edit' => [['id'], ['_controller' => 'App\\Controller\\ParticipationSeanceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/participation/seance']], [], [], []],
    'app_participation_seance_delete' => [['id'], ['_controller' => 'App\\Controller\\ParticipationSeanceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participation/seance']], [], [], []],
    'app_seance_index' => [[], ['_controller' => 'App\\Controller\\SeanceController::index'], [], [['text', '/seance/']], [], [], []],
    'app_seance_chart_month' => [[], ['_controller' => 'App\\Controller\\SeanceController::histogramChartMonth'], [], [['text', '/seance/histogram-chart-month']], [], [], []],
    'app_seance_index1' => [[], ['_controller' => 'App\\Controller\\SeanceController::indexFront'], [], [['text', '/seance/list']], [], [], []],
    'app_seance_index_json' => [[], ['_controller' => 'App\\Controller\\SeanceController::afficherJson'], [], [['text', '/seance/AllSeances']], [], [], []],
    'app_seance_supprimer_json' => [['id'], ['_controller' => 'App\\Controller\\SeanceController::supprimerJson'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/seance/supprimerjson']], [], [], []],
    'app_seance_ajoutjson' => [[], ['_controller' => 'App\\Controller\\SeanceController::ajoutJson'], [], [['text', '/seance/seance/ajoutjson']], [], [], []],
    'app_seance_modifier_json' => [['id'], ['_controller' => 'App\\Controller\\SeanceController::modifierJson'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/seance/modifierSeancejson']], [], [], []],
    'app_seance_add' => [[], ['_controller' => 'App\\Controller\\SeanceController::add'], [], [['text', '/seance/seance/add']], [], [], []],
    'app_seance_new' => [[], ['_controller' => 'App\\Controller\\SeanceController::new'], [], [['text', '/seance/new']], [], [], []],
    'app_seance_new1' => [[], ['_controller' => 'App\\Controller\\SeanceController::new1'], [], [['text', '/seance/new1']], [], [], []],
    'app_seance_show' => [['id'], ['_controller' => 'App\\Controller\\SeanceController::showC'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/seanceseancecalendar']], [], [], []],
    'app_seance_showBack' => [['id'], ['_controller' => 'App\\Controller\\SeanceController::show1'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/seance/seance']], [], [], []],
    'app_seance_edit' => [['id'], ['_controller' => 'App\\Controller\\SeanceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/seance']], [], [], []],
    'app_seance_edit1' => [['id'], ['_controller' => 'App\\Controller\\SeanceController::edit1'], [], [['text', '/edit1'], ['variable', '/', '[^/]++', 'id', true], ['text', '/seance']], [], [], []],
    'app_seance_delete' => [['id'], ['_controller' => 'App\\Controller\\SeanceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/seance/seance/delete']], [], [], []],
    'app_seance_deleteC' => [['id'], ['_controller' => 'App\\Controller\\SeanceController::deleteC'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/seance/seances/delete']], [], [], []],
    'app_video_index' => [[], ['_controller' => 'App\\Controller\\VideoController::index'], [], [['text', '/video/admin']], [], [], []],
    'app_video_index1' => [[], ['_controller' => 'App\\Controller\\VideoController::index1'], [], [['text', '/video/video']], [], [], []],
    'app_videos' => [[], ['_controller' => 'App\\Controller\\VideoController::listVideos'], [], [['text', '/video/admin/videos']], [], [], []],
    'app_video_new' => [[], ['_controller' => 'App\\Controller\\VideoController::new'], [], [['text', '/video/new']], [], [], []],
    'app_video_show' => [['id'], ['_controller' => 'App\\Controller\\VideoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/video/back']], [], [], []],
    'app_video_showFront' => [['id'], ['_controller' => 'App\\Controller\\VideoController::showFront'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/video/front']], [], [], []],
    'app_video_edit' => [['id'], ['_controller' => 'App\\Controller\\VideoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    'app_video_delete' => [['id'], ['_controller' => 'App\\Controller\\VideoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/video']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_seance_calendar' => [[], ['_controller' => 'App\\Controller\\SeanceController::seancesJson'], [], [['text', '/json']], [], [], []],
    'seance_histogram_chart' => [[], ['_controller' => 'App\\Controller\\SeanceController::histogramChartMonth'], [], [['text', '/histogram-chart-month']], [], [], []],
];
