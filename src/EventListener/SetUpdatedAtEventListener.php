<?php

namespace App\EventListener;

use Doctrine\Persistence\Event\LifecycleEventArgs;

class SetUpdatedAtEventListener
{
    // the listener methods receive an argument which gives you access to
    // both the entity object of the event and the entity manager itself
    public function preUpdate(LifecycleEventArgs $args): void
    {
        // Whatever the entity, if there is an UpdateAt to do, Doctrine will
        // trigger the preUpdate () method before actually making the request in DB
        $entity = $args->getObject();

        // We apply a setUpdatedAt () only if this method exists on $entity
        // It allows us to filter the entities that do not have this method and to avoid error messages
        if (method_exists($entity, 'setUpdatedAt')) {
            $entity->setUpdatedAt(new \DateTimeImmutable());
        }
    }
}