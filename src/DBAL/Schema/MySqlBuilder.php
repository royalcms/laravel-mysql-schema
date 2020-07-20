<?php

namespace Royalcms\Laravel\MysqlSchema\DBAL\Schema;

use Closure;
use Illuminate\Database\Schema\MySqlBuilder as BaseMySqlBuilder;

class MySqlBuilder extends BaseMySqlBuilder
{

    /**
     * Create a new command set with a Closure.
     *
     * @param  string  $table
     * @param  \Closure|null  $callback
     * @return \Ecjia\App\Database\DBAL\Schema\MySqlBlueprint
     */
    protected function createBlueprint($table, Closure $callback = null)
    {
        if (isset($this->resolver)) {
            return call_user_func($this->resolver, $table, $callback);
        }

        return new MySqlBlueprint($table, $callback);
    }

    /**
     * Convert a table charset and collation on the schema.
     *
     * @param  string  $from
     * @param  string  $charset
     * @param  string  $collation
     * @return void
     */
    public function convertEncoding($from, $charset, $collation)
    {
        $blueprint = $this->createBlueprint($from);

        $blueprint->convertEncoding($charset, $collation);

        $this->build($blueprint);
    }

    /**
     * Convert a table engine on the schema.
     *
     * @param  string  $from
     * @param  string  $to
     * @return void
     */
    public function convertEngine($from, $to)
    {
        $blueprint = $this->createBlueprint($from);

        $blueprint->convertEngine($to);

        $this->build($blueprint);
    }

}
