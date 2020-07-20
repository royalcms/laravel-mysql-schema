<?php

namespace Royalcms\Laravel\MysqlSchema\DBAL\Schema;

use Illuminate\Database\Schema\Blueprint;

class MySqlBlueprint extends Blueprint
{

    /**
     * Convert the table to a given engine.
     *
     * @param  string  $to
     * @return \Royalcms\Component\Support\Fluent
     */
    public function convertEngine($to)
    {
        return $this->addCommand('convertEngine', compact('to'));
    }

    /**
     * Convert the table to a given encoding.
     *
     * @param  string  $charset
     * @param  string  $collation
     * @return \Royalcms\Component\Support\Fluent
     */
    public function convertEncoding($charset, $collation)
    {
        return $this->addCommand('convertEncoding', compact('charset', 'collation'));
    }

}
