<?php

namespace App\Data\Repositories\Registration;

interface RegistrationRepository
{
    public function saveReg2(array $data);
    public function get($passport);
    public function getemail($passport);
    public function check_email(array $data);
    public function get_registration($id);
    public function getRegistrationByKey($key);
}
