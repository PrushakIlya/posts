<?php

declare(strict_types=1);

namespace App;

class AbstractRepository extends EntityRepository
{
    protected function fetchAll(string $sql, array $params, int $pdoType = \PDO::FETCH_ASSOC): array
    {
        try {
            $stmt = $this->getConn()->prepare($sql);

            $stmt->execute($params);
        } catch (\PDOException $e) {
            return [];
        }

        $result = $stmt->fetchAll($pdoType);

        if (!$result) {
            return [];
        }

        return $result;
    }

    protected function fetch(string $sql, array $params, int $pdoType = \PDO::FETCH_ASSOC): array|int
    {
        try {
            $stmt = $this->getConn()->prepare($sql);

            $stmt->execute($params);
        } catch (\PDOException $e) {
            return [];
        }

        $result = $stmt->fetch($pdoType);

        if (!$result) {
            return [];
        }

        return $result;
    }

    protected function execute(string $sql, array $params, int $pdoType = \PDO::FETCH_ASSOC): bool
    {
        try {
            $stmt = $this->getConn()->prepare($sql);

            $stmt->execute($params);
        } catch (\PDOException $e) {
            return false;
        }

        return true;
    }
}