<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => 'app_api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\BackController::showBack'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::showFront'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/mobile/utilisateur' => [[['_route' => 'app_mobile_utilisateurmobile_index', '_controller' => 'App\\Controller\\Mobile\\UtilisateurMobileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/mobile/utilisateur/add' => [[['_route' => 'app_mobile_utilisateurmobile_add', '_controller' => 'App\\Controller\\Mobile\\UtilisateurMobileController::add'], null, ['POST' => 0], null, false, false, null]],
        '/mobile/utilisateur/edit' => [[['_route' => 'app_mobile_utilisateurmobile_edit', '_controller' => 'App\\Controller\\Mobile\\UtilisateurMobileController::edit'], null, ['POST' => 0], null, false, false, null]],
        '/mobile/utilisateur/delete' => [[['_route' => 'app_mobile_utilisateurmobile_delete', '_controller' => 'App\\Controller\\Mobile\\UtilisateurMobileController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/mobile/utilisateur/deleteAll' => [[['_route' => 'app_mobile_utilisateurmobile_deleteall', '_controller' => 'App\\Controller\\Mobile\\UtilisateurMobileController::deleteAll'], null, ['POST' => 0], null, false, false, null]],
        '/mobile/utilisateur/verif' => [[['_route' => 'app_mobile_utilisateurmobile_verif', '_controller' => 'App\\Controller\\Mobile\\UtilisateurMobileController::verif'], null, ['POST' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile_show', '_controller' => 'App\\Controller\\ProfileController::show'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/signup' => [[['_route' => 'app_utilisateur_signup', '_controller' => 'App\\Controller\\UtilisateurApiController::signupAction'], null, null, null, false, false, null]],
        '/user/signin' => [[['_route' => 'app_utilisateur_signin', '_controller' => 'App\\Controller\\UtilisateurApiController::signinAction'], null, null, null, false, false, null]],
        '/user/editprofile' => [[['_route' => 'app_utilisateur_profile', '_controller' => 'App\\Controller\\UtilisateurApiController::editprofile'], null, null, null, false, false, null]],
        '/utilisateur/acceuil' => [[['_route' => 'app_utilisateur_acceuil', '_controller' => 'App\\Controller\\UtilisateurController::acceuil'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/profile/([^/]++)/edit(*:29)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:72)'
                .'|/utilisateur/(?'
                    .'|([^/]++)(?'
                        .'|(*:106)'
                        .'|/edit(*:119)'
                        .'|(*:127)'
                    .')'
                    .'|block/([^/]++)(*:150)'
                    .'|unblock/([^/]++)(*:174)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:214)'
                    .'|wdt/([^/]++)(*:234)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:280)'
                            .'|router(*:294)'
                            .'|exception(?'
                                .'|(*:314)'
                                .'|\\.css(*:327)'
                            .')'
                        .')'
                        .'|(*:337)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        72 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        106 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        119 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        127 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        150 => [[['_route' => 'app_block_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::blockUser'], ['id'], null, null, false, true, null]],
        174 => [[['_route' => 'app_unblock_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::unblockUser'], ['id'], null, null, false, true, null]],
        214 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        234 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        280 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        294 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        314 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        327 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        337 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
