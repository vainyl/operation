<?php
/**
 * Vainyl
 *
 * PHP Version 7
 *
 * @package   Operation
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://vainyl.com
 */
declare(strict_types=1);

namespace Vainyl\Operation\Collection;

use Vainyl\Core\AbstractIdentifiable;
use Vainyl\Core\Storage\StorageInterface;
use Vainyl\Operation\OperationInterface;

/**
 * Class AbstractCollection
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractCollection extends AbstractIdentifiable implements CollectionInterface
{
    private $storage;

    /**
     * OperationSet constructor.
     *
     * @param StorageInterface $storage
     */
    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    /**
     * @inheritDoc
     */
    public function add(OperationInterface $operation): CollectionInterface
    {
        $this->storage[] = $operation;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getOperations(): \Traversable
    {
        return $this->storage->getIterator();
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return static::class;
    }
}
