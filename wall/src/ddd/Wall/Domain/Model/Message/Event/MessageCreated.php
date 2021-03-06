<?php

namespace Wall\Domain\Model\Message\Event;

use Wall\EventInterface;
use Wall\Domain\Model\Message\DTO\Message as MessageDTO;

class MessageCreated implements EventInterface
{
    private $dto;

    /**
     * @param MessageDTO $dto
     */
    public function __construct(MessageDTO $dto)
    {
        $this->dto = $dto;
    }

    /**
     * @return MessageDTO
     */
    public function getDTO(): MessageDTO
    {
        return $this->dto;
    }
}
