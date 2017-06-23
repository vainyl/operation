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

namespace Vainyl\Operation\Collection\Factory;

use Vainyl\Core\Storage\StorageInterface;
use Vainyl\Operation\Collection\CollectionInterface;
use Vainyl\Operation\Collection\OperationSet;

/**
 * Class SetCollectionFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class SetCollectionFactory implements CollectionFactoryInterface
{
    private $storage;

    /**
     * SetCollectionFactory constructor.
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
    public function create(array $operations = []): CollectionInterface
    {
        $storage = clone $this->storage;
        foreach ($operations as $operation) {
            $storage[] = $operation;
        }

        return new OperationSet($storage);
    }
}