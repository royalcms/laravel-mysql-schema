<?php

namespace Royalcms\Laravel\MysqlSchema\DBAL;

use Doctrine\DBAL\Event\SchemaColumnDefinitionEventArgs;

class EventListener
{

    public function onSchemaColumnDefinition(SchemaColumnDefinitionEventArgs $event)
    {
        // Your EventListener code
//        dd($event);

//        $event->preventDefault();

//        return $event;
    }

}