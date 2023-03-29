<?php
declare(strict_types = 1);

namespace PhpstormGenericsTypeBug;

final class Test
{

    public function shortChainIsOk(): void
    {
        $dog = $this->createDogBuilder()->build();
        $this->cloneAnimal($dog)->bark(); // No error, autocomplete working properly
    }

    public function chainWithFluentSetterNotOk(): void
    {
        $dog = $this->createDogBuilder()->setName('Buggy')->build();
        $this->cloneAnimal($dog)->bark(); // "Potentially polymorphic call. Cat does not have members in its hierarchy" inspection error & autocomplete not working
    }

    /**
     * @template T of Animal
     * @param T $animal
     * @return T
     */
    public function cloneAnimal(Animal $animal): Animal
    {
        return clone $animal;
    }

    public function createDogBuilder(): DogBuilder
    {
        return new DogBuilder();
    }

}
