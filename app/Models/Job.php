<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all(): array{
        return [
        ["id"=> 1, "job" => "Desarrollador Web", "salary" => 45000],
        ["id"=> 2, "job" => "Diseñador Gráfico", "salary" => 38000],
        ["id"=> 3, "job" => "Ingeniero de Software", "salary" => 70000],
        ["id"=> 4, "job" => "Administrador de Sistemas", "salary" => 55000],
        ["id"=> 5, "job" => "Analista de Datos", "salary" => 60000],
        ["id"=> 6, "job" => "Gerente de Proyecto", "salary" => 75000],
        ["id"=> 7, "job" => "Técnico en Soporte", "salary" => 35000],
        ["id"=> 8, "job" => "Especialista en Ciberseguridad", "salary" => 85000],
        ["id"=> 9, "job" => "Arquitecto de Soluciones", "salary" => 90000],
        ["id"=> 10, "job" => "Marketing Digital", "salary" => 40000]
        ];
    }
    public static function find(int $id): array {
        
        $job = Arr::first(static::all(), function($job) use ($id){
            return $job["id"] == $id;
        });
        if($job == null) {
        abort(404);
        }
        return $job;
    }
}