<?php
/**
 * Created by PhpStorm.
 * User: vitoravila
 * Date: 24/03/16
 * Time: 13:12
 */

use Illuminate\Support\Facades\DB;

        $res = DB::table('teste')->get();


                ?>

{{ dd(session('teste')) }}

