<?php

return [
    'field' => [
        'invalid_type' => 'El tipo de campo utilizado es inválido :type.',
        'options_method_not_exists' => 'La clase del modelo :model debe definir un método :method() que devuelva opciones para el campo ":field".',
    ],
    'widget' => [
        'not_registered' => "No se ha registrado ningún módulo con la clase ':name'.",
        'not_bound' => "El módulo con la clase ':name' no se ha unido al controlador.",
    ],
    'page' => [
        'untitled' => 'Sin título',
        'access_denied' => [
            'label' => 'Acceso denegado.',
            'help' => 'No tiene permisos necesarios para ver esta página.',
            'cms_link' => 'Regresar al backend.',
        ],
    ],
    'partial' => [
        'not_found_name' => "No se encuentra el parcial ':name'.",
    ],
    'account' => [
        'sign_out' => 'Salir',
        'login' => 'Entrar',
        'reset' => 'Reiniciar',
        'restore' => 'Restaurar',
        'login_placeholder' => 'Usuario',
        'password_placeholder' => 'Contraseña',
        'forgot_password' => 'Olvidó su contraseña?',
        'enter_email' => 'Ingrese su email',
        'enter_login' => 'Ingrese su usuario',
        'email_placeholder' => 'email',
        'enter_new_password' => 'Ingrese una nueva contraseña.',
        'password_reset' => 'Reiniciar contraseña.',
        'restore_success' => 'Le hemos enviado un email con la nueva contraseña.',
        'restore_error' => "El usuario no es válido ':login'.",
        'reset_success' => 'Su contraseña fue correctamente reiniciada.',
        'reset_error' => 'La contraseña es inválida. Por favor, intente otra vez.',
        'reset_fail' => 'No se puede reiniciar su contraseña.',
        'apply' => 'Aplicar',
        'cancel' => 'Cancelar',
        'delete' => 'Borrar',
        'ok' => 'OK',
    ],
    'dashboard' => [
        'menu_label' => 'Tablero',
        'widget_label' => 'Módulo',
        'widget_width' => 'Ancho',
        'full_width' => 'Ancho completo',
        'add_widget' => 'Agregar módulo',
        'widget_inspector_title' => 'Configurar módulo',
        'widget_inspector_description' => 'Configurar el módulo de informe.',
        'widget_columns_label' => 'Ancho :columnas',
        'widget_columns_description' => 'Ancho del módulo, un número entre 1 y 10.',
        'widget_columns_error' => 'Por favor introduzca el ancho del módulo, un número entre 1 y 10.',
        'columns' => '{1} columna|[2,Inf] columnas',
        'widget_new_row_label' => 'Forzar nueva fila',
        'widget_new_row_description' => 'Coloca el módulo en una nueva fila.',
        'widget_title_label' => 'Título del módulo',
        'widget_title_error' => 'El título del módulo es requerido.',
        'status' => [
            'widget_title_default' => 'Estado del sistema',
            'online' => 'online',
            'update_available' => '{0} actualizaciones disponibles!|{1} actualizaciones disponibles!|[2,Inf] actualizaciones disponibles!',
        ],
    ],
    'user' => [
        'name' => 'Administrador',
        'menu_label' => 'Administradores',
        'menu_description' => 'Gestionar backend de administrador de usuarios, grupos y permisos.',
        'list_title' => 'Gestionar administradores',
        'new' => 'Nuevo administrador',
        'login' => 'Acceso',
        'first_name' => 'Nombre',
        'last_name' => 'Apellido',
        'full_name' => 'Nombre completo',
        'email' => 'Email',
        'groups' => 'Grupos',
        'groups_comment' => 'Especifique a qué grupos pertenece esta persona.',
        'avatar' => 'Avatar',
        'password' => 'Contraseña',
        'password_confirmation' => 'Confirmar contraseña',
        'superuser' => 'Super administrador',
        'superuser_comment' => 'Marque esta casilla para permitir que esta persona tenga acceso a todas las áreas.',
        'send_invite' => 'Enviar invitación por email.',
        'send_invite_comment' => 'Utilice esta casilla de verificación para enviar una invitación al usuario por email.',
        'delete_confirm' => 'Realmente desea eliminar este administrador?',
        'return' => 'Regresar a la lista de administradores',
        'allow' => 'Permitir',
        'inherit' => 'Heredar',
        'deny' => 'Denegar',
        'group' => [
            'name' => 'Grupo',
            'name_field' => 'Nombre',
            'menu_label' => 'Grupos',
            'list_title' => 'Gestionar Grupos',
            'new' => 'Nuevo Grupo',
            'delete_confirm' => 'Realmente desea eliminar este grupo de administradores?',
            'return' => 'Regresar a la lista de grupos',
        ],
        'preferences' => [
            'not_authenticated' => 'No existe un usuario autenticado para cargar o guardar las preferencias.',
        ],
    ],
    'list' => [
        'default_title' => 'Listar',
        'search_prompt' => 'Buscar...',
        'no_records' => 'No hay registros en esta lista.',
        'missing_model' => 'El comportamiento de lista utilizado en :class no tiene un modelo definido.',
        'missing_column' => 'No hay definiciones de columna para :columns.',
        'missing_columns' => 'La lista utilizada en :class no tiene columnas definidas.',
        'missing_definition' => "Comportamiento de lista no contiene una columna para ':field'.",
        'behavior_not_ready' => 'Comportamiento de lista no se ha inicializado, compruebe que ha llamado makeLists() en el controlador.',
        'invalid_column_datetime' => "Columna valor ':column' no es un objeto DateTime, has perdido la referencia \$dates en el Modelo?",
        'pagination' => 'Mostrando registros: :from-:to de :total',
        'prev_page' => 'Página anterior',
        'next_page' => 'Página siguiente',
        'loading' => 'Cargando...',
        'setup_title' => 'Configuración de la lista',
        'setup_help' => 'Utilice las casillas de verificación para seleccionar las columnas que desea ver en la lista. Puede cambiar la posición de las columnas arrastrándolas hacia arriba o hacia abajo.',
        'records_per_page' => 'Registros por página',
        'records_per_page_help' => 'Seleccione el número de registros por página para mostrar. Tenga en cuenta que un alto número de registros en una sola página puede reducir el rendimiento.',
    ],
    'fileupload' => [
        'attachment' => 'Adjunto',
        'help' => 'Añadir un título y una descripción para este Adjunto.',
        'title_label' => 'Título',
        'description_label' => 'Descripción',
    ],

    'form' => [
        'create_title' => 'Nuevo :name',
        'update_title' => 'Editar :name',
        'preview_title' => 'Vista previa :name',
        'create_success' => ':name ha sido creado con éxito.',
        'update_success' => ':name se ha actualizado correctamente.',
        'delete_success' => ':name se ha eliminado correctamente.',
        'missing_id' => 'El formulario de registro de identificación no se ha especificado.',
        'missing_model' => 'El comportamiento del formulario utilizado en :class no tiene un modelo definido.',
        'missing_definition' => "El comportamiento de formulario no contiene un campo para':field'.",
        'not_found' => 'El registro de formulario con el ID :id no se pudo encontrar.',
        'create' => 'Crear',
        'create_and_close' => 'Crear y cerrar',
        'creating' => 'Creando...',
        'save' => 'Guardar',
        'save_and_close' => 'Guardar y cerrar',
        'saving' => 'Guardando...',
        'delete' => 'Borrar',
        'deleting' => 'Borrando...',
        'undefined_tab' => 'Misc',
        'field_off' => 'Off',
        'field_on' => 'On',
        'add' => 'Agregar',
        'apply' => 'Aplicar',
        'cancel' => 'Cancelar',
        'close' => 'Cerrar',
        'ok' => 'OK',
        'or' => 'o',
        'confirm_tab_close' => 'Realmente desea cerrar la cuenta? Se perderán los cambios no guardados.',
        'behavior_not_ready' => 'Por favor compruebe que ha llamado a la funcion initForm() en el controlador.',
        'preview_no_files_message' => 'Los archivos no fueron cargados.',
        'select' => 'Seleccionar',
        'select_all' => 'Todo',
        'select_none' => 'Ninguno',
        'select_placeholder' => 'Seleccionar',
        'insert_row' => 'Insertar fila',
        'delete_row' => 'Eliminar fila',
        'concurrency-file-changed-title' => 'El archivo fue modificado',
        'concurrency-file-changed-description' => 'El archivo que se encuentra editando fue modificado por otro usuario. Puede recargar el archivo y perder los cambios o sobreescribir el archivo en el disco.',
        'reload' => 'Recargar',
    ],
    'relation' => [
        'missing_definition' => "Relación comportamiento no contiene una definición para ':field'.",
        'missing_model' => 'Relación comportamiento utilizado en :class no tiene un modelo definido.',
        'invalid_action_single' => 'Esta acción no se puede realizar en una relación singular.',
        'invalid_action_multi' => 'Esta acción no se puede realizar en una relación múltiple.',
        'help'  => 'Haga clic en un elemento para añadir.',
        'related_data' => 'Relacionar :name datos.',
        'add' => 'Agregar',
        'add_selected' => 'Agregar seleccionado',
        'add_a_new' => 'Agregar un nuevo :name',
        'cancel' => 'Cancelar',
        'add_name' => 'Agregar :name',
        'create' => 'Crear',
        'create_name' => 'Crear :name',
        'update' => 'Actualizar',
        'update_name' => 'Actualizar :name',
        'remove' => 'Remover',
        'remove_name' => 'Remover :name',
        'delete' => 'Borrar',
        'delete_name' => 'Borrar :name',
        'delete_confirm' => 'Está seguro?',
    ],
    'model' => [
        'name' => 'Modelo',
        'not_found' => "No se pudo encontrar el modelo ':class' con el ID :id.",
        'missing_id' => 'No se especificó un ID para encontrar el modelo guardado.',
        'missing_relation' => "El modelo ':class' no contiene una definición para ':relation'.",
        'invalid_class' => "El modelo :model utilizado en :class no es váildo, este debería heredar la clase del \Model.",
        'mass_assignment_failed' => "Asignación masiva falló para el atributo del modelo ':attribute'.",
    ],
    'warnings' => [
        'tips' => 'Consejos de configuración del sistema.',
        'tips_description' => 'Hay problemas que necesitan de su atención para configurar el sistema correctamente.',
        'permissions'  => 'El directorio :name o los subdirectorios no se puede escribir por PHP. Por favor establezca los permisos correctos para el servidor web en este directorio.',
        'extension' => 'La extensión PHP :name no está instalada. Por favor instale esta librería y active la extensión.',
    ],
    'editor' => [
        'menu_label' => 'Preferencias del editor de código',
        'menu_description' => 'Configurar preferencias del editor de código, como el tamaño de la letra y el color del esquema.',
        'font_size' => 'Tamaño de la letra',
        'tab_size' => '>Tamaño de la solapa',
        'use_hard_tabs' => 'Espacio entre solapas',
        'code_folding' => 'Código plegable',
        'word_wrap' => 'Ajuste de línea',
        'highlight_active_line' => 'Resaltar línea activa',
        'show_invisibles' => 'Mostrar caracteres invisibles',
        'show_gutter' => 'Mostrar canal',
        'theme' => 'Color del esquema',
    ],
    'tooltips' => [
        'preview_website' => 'Vista previa de la página web',
    ],
    'mysettings' => [
        'menu_label' => 'Mi configuración',
        'menu_description' => 'Ajustes relacionados con su cuenta de administración',
    ],
    'myaccount' => [
        'menu_label' => 'Mi cuenta',
        'menu_description' => 'Actualizar información de su cuenta, como nombre, dirección de correo electrónico y contraseña.',
        'menu_keywords' => 'Inicio seguro',
    ],
    'backend_preferences' => [
        'menu_label' => 'Preferencias de backend',
        'menu_description' => 'Gestionar preferencias de idioma y la apariencia del backend.',
        'locale' => 'Idioma',
        'locale_comment' => 'Seleccione la localización para el uso del lenguaje.',
    ],
    'access_log' => [
        'hint' => 'Este registro muestra la lista de ingresos al panel de administración. Los registros se mantienen por un total de :days días.',
        'menu_label' => 'Registro de acceso',
        'menu_description' => 'Ver registro de ingresos al panel de administracion.',
        'created_at' => 'Fecha y hora',
        'login' => 'Acceso',
        'ip_address' => 'IP',
        'first_name' => 'Nombre',
        'last_name' => 'Apellido',
        'email' => 'Email',
    ],
    'filter' => [
      'all' => 'Todo',
    ],
];
