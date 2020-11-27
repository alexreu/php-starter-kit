<?php


class Product
{
    public static function findAll () {
        try {
            return json_decode(fopen('database/database.json', 'rb'), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new \RuntimeException($e);
        }
    }
}
