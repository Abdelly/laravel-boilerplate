<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute debe ser aceptado.',
    'active_url' => ':attribute no es una URL v�lida.',
    'after' => ':attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => ':attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => ':attribute s�lo debe contener letras.',
    'alpha_dash' => ':attribute s�lo debe contener letras, n�meros y guiones.',
    'alpha_num' => ':attribute s�lo debe contener letras y n�meros.',
    'array' => ':attribute debe ser un conjunto.',
    'before' => ':attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => ':attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => ':attribute tiene que estar entre :min - :max.',
        'file' => ':attribute debe pesar entre :min - :max kilobytes.',
        'string' => ':attribute tiene que tener entre :min - :max caracteres.',
        'array' => ':attribute tiene que tener entre :min - :max �tems.',
    ],
    'boolean' => 'El campo :attribute debe tener un valor verdadero o falso.',
    'confirmed' => 'La confirmaci�n de :attribute no coincide.',
    'date' => ':attribute no es una fecha v�lida.',
    'date_format' => ':attribute no corresponde al formato :format.',
    'different' => ':attribute y :other deben ser diferentes.',
    'digits' => ':attribute debe tener :digits d�gitos.',
    'digits_between' => ':attribute debe tener entre :min y :max d�gitos.',
    'dimensions' => 'Las dimensiones de la imagen :attribute no son v�lidas.',
    'distinct' => 'El campo :attribute contiene un valor duplicado.',
    'email' => ':attribute no es un correo v�lido',
    'exists' => ':attribute es inv�lido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute es obligatorio.',
    'image' => ':attribute debe ser una imagen.',
    'in' => ':attribute es inv�lido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => ':attribute debe ser un n�mero entero.',
    'ip' => ':attribute debe ser una direcci�n IP v�lida.',
    'ipv4' => ':attribute debe ser un direcci�n IPv4 v�lida',
    'ipv6' => ':attribute debe ser un direcci�n IPv6 v�lida.',
    'json' => 'El campo :attribute debe tener una cadena JSON v�lida.',
    'max' => [
        'numeric' => ':attribute no debe ser mayor a :max.',
        'file' => ':attribute no debe ser mayor que :max kilobytes.',
        'string' => ':attribute no debe ser mayor que :max caracteres.',
        'array' => ':attribute no debe tener m�s de :max elementos.',
    ],
    'mimes' => ':attribute debe ser un archivo con formato: :values.',
    'mimetypes' => ':attribute debe ser un archivo con formato: :values.',
    'min' => [
        'numeric' => 'El tama�o de :attribute debe ser de al menos :min.',
        'file' => 'El tama�o de :attribute debe ser de al menos :min kilobytes.',
        'string' => ':attribute debe contener al menos :min caracteres.',
        'array' => ':attribute debe tener al menos :min elementos.',
    ],
    'not_in' => ':attribute es inv�lido.',
    'not_regex' => 'El formato del campo :attribute no es v�lido.',
    'numeric' => ':attribute debe ser num�rico.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :attribute es inv�lido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other est� en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values est� presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values est� presente.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no est� presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values est�n presentes.',
    'same' => ':attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El tama�o de :attribute debe ser :size.',
        'file' => 'El tama�o de :attribute debe ser :size kilobytes.',
        'string' => ':attribute debe contener :size caracteres.',
        'array' => ':attribute debe contener :size elementos.',
    ],
    'string' => 'El campo :attribute debe ser una cadena de caracteres.',
    'timezone' => 'El :attribute debe ser una zona v�lida.',
    'unique' => ':attribute ya ha sido registrado.',
    'uploaded' => 'Subir :attribute ha fallado.',
    'url' => 'El formato :attribute es inv�lido.',


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensaje personalizado',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'Nombre',
        'display_name' => 'Nombre para mostrar',
        'username' => 'Seudo',
        'email' => 'Email',
        'first_name' => 'Nombre',
        'last_name' => 'Apellidos',
        'password' => 'Contrase�a',
        'password_confirmation' => 'Confirmar contrase�a',
        'old_password' => 'Contrase�a anterior',
        'new_password' => 'Nueva contrase�a',
        'new_password_confirmation' => 'Confirmar nueva contrase�a',
        'postal_code' => 'c�digo postal',
        'city' => 'Ciudad',
        'country' => 'Pa�s',
        'address' => 'Direcci�n',
        'phone' => 'Tel�fono',
        'mobile' => 'M�vil',
        'age' => 'A�os',
        'sex' => 'Sexo',
        'gender' => 'G�nero',
        'day' => 'D�a',
        'month' => 'Mes',
        'year' => 'A�o',
        'hour' => 'Hora',
        'minute' => 'Minuto',
        'second' => 'Segundo',
        'title' => 'T�tulo',
        'content' => 'Contenido',
        'description' => 'Descripci�n',
        'summary' => 'Resumen',
        'excerpt' => 'Extracto',
        'date' => 'Fecha',
        'time' => 'Hora',
        'available' => 'Disponible',
        'size' => 'Tama�o',
        'roles' => 'Roles',
        'permissions' => 'Permisos',
        'active' => 'Activo',
        'confirmed' => 'Confirmado',
        'message' => 'Mensaje',
        'g-recaptcha-response' => 'Captcha',
        'locale' => 'Localizaci�n',
        'route' => 'Ruta',
        'url' => 'URL alias',
        'form_type' => 'Tipo de formulario',
        'form_data' => 'Datos de formulario',
        'recipients' => 'Destinatarios',
        'source_path' => 'Ruta original',
        'target_path' => 'Ruta de destino',
        'redirect_type' => 'Redirigir tipo',
        'timezone' => 'Zona horaria',
        'order' => 'Orden de visualizaci�n',
        'image' => 'Imagen',
        'status' => 'Estado',
        'pinned' => 'Fijado',
        'promoted' => 'Promovido',
        'body' => 'Cuerpo',
        'tags' => 'Etiquetas',
        'published_at' => 'Publicar en',
        'unpublished_at' => 'Anular publicaci�n en',
        'metable_type' => 'Entidad',
    ],
];
