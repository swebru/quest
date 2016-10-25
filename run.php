<?php

$app = new CliApp();
$app->loadData();
$app->createReport();
$app->printResult();