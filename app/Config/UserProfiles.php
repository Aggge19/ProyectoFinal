<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class UserProfiles extends BaseConfig{

    //------------- ROLES -----------

    //---------- Parte privada ------
    const SUPER_ADMIN_ROLE = "superadmin";
    const ADMIN_ROLE = "admin";
    const CONTENT_EDITOR_ROLE = "content_editor";

    //---------- Parte publica ------
    const APP_CLIENTE_ROLE = "app_client";
}
