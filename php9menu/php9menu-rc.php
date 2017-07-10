<?php

include "functions.php";

$main_label  = "Favoritos";
$cats_label  = "Categorias";
$back_label  = "Voltar";
$close_label = "Fechar";

$fg_color    = "#c8c8c8";
$bg_color    = "#2F343F";

$sep_string  = "·"; // CAN'T USE '-' NOR ':' !!!

$d_launcher     = "gmrun";
$d_terminal     = "xfce4-terminal";
$d_file_manager = "thunar";
$d_web_browser  = "firefox";
$d_email_client = "thunderbird";

$cats_names = [
    'Utility'     => 'Acessórios',
    'Settings'    => 'Configurações',
    'Development' => 'Desenvolvimento',
    'Education'   => 'Educação',
    'Office'      => 'Escritório',
    'Chrome'      => 'Google Chrome',
    'Graphics'    => 'Gráficos',
    'Network'     => 'Internet',
    'Game'        => 'Jogos',
    'AudioVideo'  => 'Multimídia',
    'Other'       => 'Outros',
    'System'      => 'Sistema'
];

/* DO NOT EDIT FROM HERE... ------------------------------------------------- */
$menus_path = $_SERVER['HOME']."/.config/9menu/";
$script_path = $argv[0];
if (!file_exists($menus_path)) {
    mkdir($menus_path, 0755, true);
}
$menu_cats  = menu_command($bg_color, $fg_color, $cats_label, $menus_path, "categories");
$menu_main  = menu_command($bg_color, $fg_color, $main_label, $menus_path, "main");
/* TO HERE! ----------------------------------------------------------------- */

# MAIN MENU ( CUSTOM ) ---------------------------------------------------------

$custom_menu = 
'  Executar Comando...         Alt+F2  :'.$d_launcher.'
  Procurar Arquivos...        Alt+F3  :catfish
  Terminal               Super+Enter  :'.$d_terminal.'
  Pasta Pessoal              Super+F  :'.$d_file_manager.'
······································:'.$menu_main.'
  Categorias                       >  :'.$menu_cats.'
······································:'.$menu_main.'
  Firefox               Super+Ctrl+F  :'.$d_browser.'
  Thunderbird           Super+Ctrl+M  :'.$d_email_client.'
  Whatsie               Super+Ctrl+W  :whatsie
  Telegram              Super+Ctrl+T  :telegram
  Geany                 Super+Ctrl+E  :geany
  Atom                  Super+Ctrl+A  :atom
  OmegaT                Super+Ctrl+O  :omegat
  LibreOffice Writer    Super+Ctrl+D  :libreoffice --writer
  LibreOffice Calc      Super+Ctrl+C  :libreoffice --calc
  GoldenDict            Super+Ctrl+G  :goldendict
  Netflix               Super+Ctrl+N  :~/scripts/netflix.sh
  Steam                 Super+Ctrl+S  :steam
  Battle for Wesnoth    Super+Ctrl+B  :wesnoth
  VirtualBox            Super+Ctrl+V  :VirtualBox
  Synaptic              Super+Ctrl+I  :gksu synaptic-pkexec
······································:'.$menu_main.'
  '.$close_label."                              \n";



?>
