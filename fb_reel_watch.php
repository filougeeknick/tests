<?php
use Shaarli\Config\ConfigManager;
use Shaarli\Plugin\PluginManager;
use Shaarli\Render\TemplatePage;

// Init (optionnel)
function mon_plugin_init(ConfigManager $conf) {
    // set defaults, validate config...
    // return ['Erreur...'] si problème
}

// Hook: ajouter CSS quand on affiche la liste
function hook_mon_plugin_render_includes(array $data, ConfigManager $conf): array {
    if ($data['_PAGE_'] === TemplatePage::LINKLIST) {
        $data['css_files'][] = PluginManager::$PLUGINS_PATH . '/mon_plugin/mon_plugin.css';
    }
    return $data;
}

// Déclarer des routes (optionnel)
function mon_plugin_register_routes(): array {
    return [
        [
            'method' => 'GET',
            'route'  => '/ma-route',
            'callable' => 'MonPlugin\\Controller:maMethode',
        ],
    ];
}
