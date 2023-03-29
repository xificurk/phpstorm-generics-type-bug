<?php
declare(strict_types = 1);

namespace PhpstormGenericsTypeBug;

final class DogBuilder
{

    private string $name = 'Dog';

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function build(): Dog
    {
        return new Dog($this->name);
    }

}
