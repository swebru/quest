<?php

$report = new PaymentReport();
$report->initData();
$report->createReport();
$report->printResult('csv');
