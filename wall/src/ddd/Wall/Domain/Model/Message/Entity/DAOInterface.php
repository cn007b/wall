<?php

namespace Wall\Domain\Model\Message\Entity;

interface DAOInterface
{
    public function getById(int $vo): Message;
}
