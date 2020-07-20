<?php

namespace Royalcms\Laravel\MysqlSchema\DBAL\Schema\Grammars;

use Doctrine\DBAL\Schema\Table;
use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\MySqlGrammar as BaseMySqlGrammar;

class MySqlGrammar extends BaseMySqlGrammar
{

    /**
     * Compile a convert table charset and collation command.
     *
     * @param  \Royalcms\Component\Database\Schema\Blueprint  $blueprint
     * @param  \Royalcms\Component\Support\Fluent  $command
     * @return string
     */
    public function compileConvertEncoding(Blueprint $blueprint, Fluent $command)
    {
        $from = $this->wrapTable($blueprint);

        return "alter table {$from} convert to character set {$command->charset} collate {$command->collation}";
    }

    /**
     * Compile a convert table engine command.
     *
     * @param  \Royalcms\Component\Database\Schema\Blueprint  $blueprint
     * @param  \Royalcms\Component\Support\Fluent  $command
     * @return string
     */
    public function compileConvertEngine(Blueprint $blueprint, Fluent $command)
    {
        $from = $this->wrapTable($blueprint);

        return "alter table {$from} engine = ".$command->to;
    }


    /**
     * Get a copy of the given Doctrine table after making the column changes.
     *
     * @override
     *
     * @param  \Royalcms\Component\Database\Schema\Blueprint  $blueprint
     * @param  \Doctrine\DBAL\Schema\Table  $table
     * @return \Doctrine\DBAL\Schema\TableDiff
     */
    protected function getTableWithColumnChanges(Blueprint $blueprint, Table $table)
    {
        $table = clone $table;

        foreach ($blueprint->getChangedColumns() as $fluent) {
            $column = $this->getDoctrineColumnForChange($table, $fluent);

            // Here we will spin through each fluent column definition and map it to the proper
            // Doctrine column definitions - which is necessary because Laravel and Doctrine
            // use some different terminology for various column attributes on the tables.
            foreach ($fluent->getAttributes() as $key => $value) {
                if (! is_null($option = $this->mapFluentOptionToDoctrine($key))) {
                    if (method_exists($column, $method = 'set'.ucfirst($option))) {
                        $column->{$method}($this->mapFluentValueToDoctrine($option, $value));
                    }
                    /**
                     * add field modification options
                     * @royalcms 5.15
                     * @author royalwang
                     */
                    else {
                        $column->setCustomSchemaOption($option, $this->mapFluentValueToDoctrine($option, $value));
                    }
                }
            }
        }

        return $table;
    }

}
