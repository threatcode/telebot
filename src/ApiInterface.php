<?php

namespace telebot;

interface ApiInterface
{
    function Request(string $method, array $data);
}
