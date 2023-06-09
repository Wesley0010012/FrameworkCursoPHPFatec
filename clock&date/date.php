<?php

function getServerDate(): string {
  $clock = getServerClock();

  return date('Y-m-d', $clock);
}

function subtractDates(string $date1, string $date2): int|bool {
  $serverClock = getServerClock();

  $clock1 = convertStringToTime($date1);
  $clock2 = convertStringToTime($date2);

  return date('Y-m-d', subtractClocks($clock1, $clock2));
}

function convertStringToArrayDate(string $date): array|bool {
  return date_parse($date);
}