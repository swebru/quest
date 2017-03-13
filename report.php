<?php

abstract class report
{
    //данные для отчета
    public $data = [];
    //инициализация данных с помощью DataSource 
    abstract public function initData();
    //выборка и подготовка данных
    abstract public function createReport();
    //вывод данных
    public function printResult(string $template)
    {
        switch ($template) {
            case 'csv' :

                break;
            default:
                break;
        }
    }
}
