<?php

namespace App\Data\Repositories\Registration;

interface RegistrationRepository
{
    public function saveReg2(array $data);
    public function get($passport);
    public function getAll();
    public function getemail($passport);
    public function check_email(array $data);
    public function get_registration($id);
    public function getRegistrationByKey($key);
    public function saveConfData(array $data);
    public function getByAttribute($attribute, $value);
}
