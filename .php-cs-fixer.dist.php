<?php

$header = <<<EOM
This file is part of the rcdesign/rcgallery package.

Copyright (C) 2022  rc design visual concepts <https://rc-design.at>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.

The TYPO3 project - inspiring people to share!
EOM;

$config = \TYPO3\CodingStandards\CsFixerConfig::create();
$config
    ->setHeader($header, true)
    ->getFinder()
    ->exclude('config')
    ->exclude('public')
    ->exclude('var')
    ->exclude('vendor')
    ->in(__DIR__)
;

return $config;
