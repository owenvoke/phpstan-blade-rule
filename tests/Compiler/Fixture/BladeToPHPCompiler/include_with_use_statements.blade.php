@php
use Illuminate\Support\Facades\URL;

URL::current();
@endphp
-----
<?php

/** file: foo.blade.php, line: 1 */
/** file: foo.blade.php, line: 2 */
use Illuminate\Support\Facades\URL;
/** file: foo.blade.php, line: 4 */
URL::current();
/** file: foo.blade.php, line: 5 */