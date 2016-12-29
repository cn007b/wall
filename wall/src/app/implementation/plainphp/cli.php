<?php

declare(strict_types=1);

use Kernel\Exception\UserInterface\BadCommandCallException;
use Psr\Http\Message\ResponseInterface;
use ValueObject\Exception\ValidationException;

require_once __DIR__ .'/../../../../bootstrap.php';

try {

    if ($argc < 3) {
        throw new BadCommandCallException('You have to specify command and action.');
    }

    list(, $controller, $action) = $argv;

    $className = "PlainPHP\\Command\\" . ucfirst($controller);
    $handler = new $className();
    /** @var ResponseInterface $response */
    $response = $handler->$action($argv);

    print $response->getBody();

} catch (ValidationException $e) {
    printf('VALIDATION EXCEPTION: %s'.PHP_EOL, json_encode($e->getMessages()));
} catch (\InvalidArgumentException $e) {
    printf('INVALID ARGUMENT EXCEPTION: %s'.PHP_EOL, $e->getMessage());
} catch (BadCommandCallException $e) {
    printf('BAD COMMAND CALL EXCEPTION: %s'.PHP_EOL, $e->getMessage());
} catch (\Error $e) {
    printf('Error: %s'.PHP_EOL, $e->getMessage());
}
