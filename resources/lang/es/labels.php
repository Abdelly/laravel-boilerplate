<?php

return [
    'language' => 'Idioma',
    'actions' => 'Acciones',
    'general' => 'General',
    'no_results' => 'No hay resultados disponibles',
    'search' => 'Buscar',
    'validate' => 'Validar',
    'choose_file' => 'Seleccione el archivo',
    'no_file_chosen' => 'Ning�n archivo seleccionado',
    'are_you_sure' => 'Est�s seguro ?',
    'yes' => 'S�',
    'no' => 'No',
    'add_new' => 'A�adir',
    'export' => 'Exportar',
    'more_info' => 'M�s informaci�n',
    'author' => 'Autor',
    'author_id' => 'Autor ID',
    'last_access_at' => '�ltimo acceso a',
    'published_at' => 'Publicado en',
    'created_at' => 'Creado en',
    'updated_at' => 'Actualizado en',
    'deleted_at' => 'Eliminado en',
    'no_value' => 'Sin valor',
    'upload_image' => 'Cargar imagen',
    'anonymous' => 'An�nimo',
    'all_rights_reserved' => 'Todos los derechos reservados.',

    'datatables' => [
        'no_results' => 'No hay resultados disponibles',
        'no_matched_results' => 'No hay resultados coincidentes disponibles',
        'show_per_page' => 'Mostrar',
        'entries_per_page' => 'entradas por p�gina',
        'search' => 'Buscar',
        'infos' => 'Mostrando :offset_start a :offset_end de :total entries',
    ],

    'morphs' => [
        'post' => 'Articulo, identidad :id',
        'user' => 'Usuario, identidad:id',
    ],

    'auth' => [
        'disabled' => 'Your account has been disabled.',
    ],

    'http' => [
        '403' => [
            'title' => 'Acceso denegado',
            'description' => 'Lo sentimos, pero no tienes permisos para acceder a esta p�gina.',
        ],
        '404' => [
            'title' => 'P�gina no encontrada',
            'description' => 'Lo sentimos, pero la p�gina que intentabas ver no existe.',
        ],
        '500' => [
            'title' => 'Error del Servidor',
            'description' => 'Lo sentimos, pero el servidor ha encontrado una situaci�n que no sabe c�mo manejar. Arreglaremos esto lo antes posible.',
        ],
    ],

    'localization' => [
        'en' => 'Ingl�s',
        'fr' => 'Franc�s',
        'es' => 'Espa�ol',
    ],

    'placeholders' => [
        'route' => 'Seleccione una ruta interna v�lida',
        'tags' => 'Seleccione o cree una etiqueta',
    ],

    'cookieconsent' => [
        'message' => 'Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia en nuestro sitio web.',
        'dismiss' => 'Estoy de acuerdo !',
    ],

    'descriptions' => [
        'allowed_image_types' => 'Tipos permitidos: png gif jpg jpeg.',
    ],

    'user' => [
        'dashboard' => 'Controles',
        'remember' => 'Recuerda',
        'login' => 'Iniciar sesi�n',
        'logout' => 'Cerrar sesi�n',
        'password_forgot' => 'Contrase�a olvidada ?',
        'send_password_link' => 'Enviar enlace para restablecer contrase�a',
        'password_reset' => 'Restablecimiento de contrase�a',
        'register' => 'Registro',
        'space' => 'Mi espacio',
        'settings' => 'Settings',
        'account' => 'Mi cuenta',
        'profile' => 'Mi perfil',
        'avatar' => 'Avatar',
        'online' => 'En l�nea',
        'edit_profile' => 'Editar mi perfil',
        'change_password' => 'Cambiar mi contrase�a',
        'delete' => 'Borrar mi cuenta',
        'administration' => 'Administraci�n',
        'member_since' => 'Miembro desde :date',
        'profile_updated' => 'Perfil actualizado con �xito.',
        'password_updated' => 'Contrase�a actualizada con �xito.',
        'email_confirmation_sended' => 'Correo de confirmaci�n enviado.',
        'email_confirmed' => 'Correo electr�nico confirmado con �xito.',
        'super_admin' => 'S�per administrador',

        'account_delete' => '<p>Esta acci�n eliminar� por completo su cuenta de este sitio, as� como todos los datos asociados.</p>',
        'account_deleted' => 'Cuenta eliminada con �xito',

        'titles' => [
            'space' => 'Mi espacio',
            'account' => 'Mi cuenta',
        ],
    ],

    'alerts' => [
        'login_as' => 'Actualmente as iniciado session como <strong>:name</strong>, puedes cerrar sesi�n como <a href=":route" data-turbolinks="false">:admin</a>.',
        'not_confirmed' => 'Su cuenta estar� en modo limitado mientras su correo electr�nico no est� confirmado. <a href=":route">Haga clic aqu�</a> para volver a enviar la confirmaci�n del correo.',
    ],

    'backend' => [
        'dashboard' => [
            'new_posts' => 'Art�culos nuevos',
            'pending_posts' => 'Art�culos pendientes',
            'published_posts' => 'Art�culos Publicados',
            'active_users' => 'Usuarios activos',
            'form_submissions' => 'Solicitudes',
            'last_posts' => '�ltimos art�culos',
            'last_published_posts' => '�ltimos art�culos publicados',
            'last_pending_posts' => '�ltimos art�culos pendientes',
            'last_new_posts' => '�ltimos art�culos nuevos',
            'all_posts' => 'Todos los art�culos',
        ],

        'new_menu' => [
            'post' => 'Nuevo articulo',
            'form_setting' => 'Nueva configuraci�n de formulario',
            'user' => 'Nuevo usuario',
            'role' => 'Nuevo rol',
            'meta' => 'Nueva meta',
            'redirection' => 'Nueva redirecci�n',
        ],

        'sidebar' => [
            'content' => 'Gesti�n de contenido',
            'forms' => 'Gesti�n de formularios',
            'access' => 'Gesti�n de Acceso',
            'seo' => 'Ajustes SEO',
        ],

        'titles' => [
            'dashboard' => 'Controles',
        ],

        'users' => [
            'titles' => [
                'main' => 'Gesti�n de usuarios',
                'index' => 'Lista de usuarios',
                'create' => 'Creaci�n de usuario',
                'edit' => 'Modificaci�n del usuario',
            ],

            'actions' => [
                'destroy' => 'Eliminar usuarios seleccionados',
                'enable' => 'Habilitar usuarios seleccionados',
                'disable' => 'Desactivar usuarios seleccionados',
            ],
        ],

        'roles' => [
            'titles' => [
                'main' => 'Gesti�n de roles',
                'index' => 'Lista de roles',
                'create' => 'Creaci�n de roles',
                'edit' => 'Modificaci�n de roles',
            ],
        ],

        'metas' => [
            'titles' => [
                'main' => 'Meta gesti�n',
                'index' => 'Lista Meta',
                'create' => 'Creaci�n de Meta',
                'edit' => 'Modificaci�n de meta',
            ],

            'actions' => [
                'destroy' => 'Eliminar metas seleccionadas',
            ],
        ],

        'form_submissions' => [
            'titles' => [
                'main' => 'Gesti�n de solicitudes',
                'index' => 'Lista de solicitudes',
                'show' => 'Detalle de solicitud',
            ],

            'actions' => [
                'destroy' => 'Elimiar solicitudes seleccionadas',
            ],
        ],

        'form_settings' => [
            'titles' => [
                'main' => 'Configuraci�n de formulario',
                'index' => 'Lista de configuraci�n de formulario',
                'create' => 'Creaci�n de configuraci�n de formulario',
                'edit' => 'Modificaci�n de configuraci�n de formulario',
            ],

            'descriptions' => [
                'recipients' => 'Ejemplo: \'webmaster@example.com\' o \'sales@example.com,support@example.com\' . Para especificar m�ltiples destinatarios, separe cada direcci�n de correo electr�nico con una coma.',
                'message' => 'El mensaje para mostrar al usuario despu�s del env�o de este formulario. Dejar en blanco para ning�n mensaje.',
            ],
        ],

        'redirections' => [
            'titles' => [
                'main' => 'Gesti�n de redirecci�n',
                'index' => 'Lista de redirecci�n',
                'create' => 'Creaci�n de redirecci�n',
                'edit' => 'Modificaci�n de redirecci�n',
            ],

            'actions' => [
                'destroy' => 'Eliminar las redirecciones seleccionadas',
                'enable' => 'Habilitar redirecciones seleccionadas',
                'disable' => 'Deshabilitar redirecciones seleccionadas',
            ],

            'types' => [
                'permanent' => 'Redirecci�n permanente (301)',
                'temporary' => 'Redirecci�n temporal (302)',
            ],

            'import' => [
                'title' => 'Importaci�n de archivo CSV',
                'label' => 'Seleccionar archivo CSV para importar',
                'description' => 'El archivo debe tener 2 columnas con "source" y "target" como encabezado, la redirecci�n ser� permanente por defecto',
            ],
        ],

        'posts' => [
            'statuses' => [
                'draft' => 'Borrador',
                'pending' => 'Pendiente',
                'published' => 'Publicado',
            ],

            'titles' => [
                'main' => 'Gesti�n de art�culos',
                'index' => 'Lista de art�culos',
                'create' => 'Crear articulo',
                'edit' => 'Editar articulo',
                'publication' => 'Opciones de publicaci�n',
            ],

            'descriptions' => [
                'meta_title' => 'If leave empty, title will be that of article\' title by default.',
                'meta_description' => 'If leave empty, description will be that of article\'s summary by default.',
            ],

            'placeholders' => [
                'body' => 'Escribe tu contenido...',
                'meta_title' => 'T�tulo del articulo.',
                'meta_description' => 'Resumen del articulo.',
            ],

            'actions' => [
                'destroy' => 'Eliminar art�culos seleccionados',
                'publish' => 'Publicar art�culos seleccionados',
                'pin' => 'Fijar art�culos seleccionados',
                'promote' => 'Promover art�culos seleccionados',
            ],
        ],
    ],

    'frontend' => [
        'titles' => [
            'home' => 'Inicio',
            'about' => 'Acerca de',
            'contact' => 'Contacto',
            'blog' => 'Blog',
            'message_sent' => 'Mensaje enviado',
            'legal_mentions' => 'Menciones legales',
            'administration' => 'Administraci�n',
        ],

        'submissions' => [
            'message_sent' => '<p>Su mensaje ha sido enviado con �xito</p>',
        ],

        'placeholders' => [
            'locale' => 'Selecciona tu idioma',
            'timezone' => 'Selecciona tu zona horaria',
        ],

        'blog' => [
            'published_at' => 'Publicado en :date',
            'published_at_with_owner_linkable' => 'Publicado en :date por <a href=":link">:name</a>',
            'tags' => 'Etiquetas',
        ],
    ],
];
