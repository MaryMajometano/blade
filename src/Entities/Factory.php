<?php

namespace Flattens\Entities;

use Illuminate\Support\Stringable;
use Illuminate\Support\Facades\App;
use Flattens\Entries\Entry;

class Factory
{
    /**
     * The entry where the entity should build for.
     *
     * @var \Flattens\Entries\Entry
     */
    protected $entry;
    
    /**
     * Create a new factory instance.
     *
     * @param \Flattens\Entries\Entry
     * @return void
     */
    public function __construct(Entry $entry)
    {
        $this->entry = $entry;
    }

    /**
     * Create a new entity instance.
     *
     * @param \Flattens\Entries\Entry
     * @return \Flattens\Entities\Entity
     */
    public static function make(Entry $entry)
    {
        $factory = new static($entry);

        return $factory->build();
    }

    /**
     * Build the entity.
     *
     * @return \Flattens\Entities\Entity
     */
    protected function build()
    {
        $className = $this->getClassName();

        if (! class_exists($className)) {
            return new Entity($this->entry);
        }

        return new $className($this->entry);
    }

    /**
     * Get the full entity class name.
     *
     * @return string
     */
    protected function getClassName()
    {
        $className = new Stringable($this->entry->collectionHandle());
        return $this->getNamespace() . (string) $className->camel()->ucfirst()->singular();
    }

    /**
     * Get the entities namespace.
     *
     * @return string
     */
    protected function getNamespace()
    {
        return App::getNamespace() . 'Flattens\\Entities\\';
    }
}
