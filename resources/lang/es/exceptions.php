<?php

return [
    'general' => 'Excepci�n del servidor',
    'unauthorized' => 'Acci�n no permitida',

    'backend' => [
        'users' => [
            'create' => 'Error en la creaci�n del usuario',
            'update' => 'Error en la actualizaci�n del usuario',
            'delete' => 'Error en la eliminaci�n del usuario',
            'first_user_cannot_be_edited' => 'No puedes editar el usuario s�per administrador',
            'first_user_cannot_be_disabled' => 'El usuario s�per administrador no puede ser deshabilitado',
            'first_user_cannot_be_destroyed' => 'El usuario s�per administrador no puede ser eliminado',
            'first_user_cannot_be_impersonated' => 'El usuario Super administrador no puede ser suplantado',
            'cannot_set_superior_roles' => 'No puedes atribuir roles superiores a los tuyos',
        ],

        'roles' => [
            'create' => 'Error en la creaci�n de roles',
            'update' => 'Error en la actualizaci�n de roles',
            'delete' => 'Error en la eliminaci�n de roles',
        ],

        'metas' => [
            'create' => 'Error en la creaci�n de la meta',
            'update' => 'Error en la actualizaci�n de la meta',
            'delete' => 'Error en la eliminaci�n de la meta',
            'already_exist' => 'Ya hay una meta para esta ruta de configuraci�n regional',
        ],

        'form_submissions' => [
            'create' => 'Error en la creaci�n de la solicitud',
            'delete' => 'Error en la eliminaci�n de la solicitud',
        ],

        'form_settings' => [
            'create' => 'Error en la creaci�n de configuraci�n de formulario',
            'update' => 'Error en la actualizaci�n de configuraci�n del formulario',
            'delete' => 'Error en la eliminaci�n de configuraci�n del formulario',
            'already_exist' => 'Ya hay una configuraci�n vinculada a este formulario',
        ],

        'redirections' => [
            'create' => 'Error en la creaci�n de la redirecci�n',
            'update' => 'Error en la actualizaci�n de la redirecci�n',
            'delete' => 'Error en la eliminaci�n de la redirecci�n',
            'already_exist' => 'Ya hay una redirecci�n para este camino',
        ],

        'posts' => [
            'create' => 'Error en la creaci�n del articulo',
            'update' => 'Error en la actualizaci�n del articulo',
            'save' => 'Error en la salvado del articulo',
            'delete' => 'Error en la eliminaci�n del articulo',
        ],
    ],

    'frontend' => [
        'user' => [
            'email_taken' => 'Esa direcci�n de correo electr�nico ya est� es uso.',
            'password_mismatch' => 'Esa no es tu contrase�a anterior.',
            'delete_account' => 'Error al eliminar la cuenta.',
            'updating_disabled' => 'La edici�n de cuenta est� deshabilitada.',
        ],

        'auth' => [
            'registration_disabled' => 'El registro est� desactivado.',
        ],
    ],
];
