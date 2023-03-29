<?php
declare(strict_types = 1);

namespace PhpstormGenericsTypeBug;

final class Cat extends Animal
{

    public function getName(): string
    {
        return 'Cat';
    }

}
