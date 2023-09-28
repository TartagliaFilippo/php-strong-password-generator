<?php

function get_random_password($number)
{
  $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';

  $random_password = '';

  for ($i = 0; $i < $number; $i++) {

    $random_start = rand(0, 72);

    $random_password .= substr($chars, $random_start, 1);
  }

  return $random_password;
}