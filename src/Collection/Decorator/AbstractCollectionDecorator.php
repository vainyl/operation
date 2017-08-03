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

namespace Vainyl\Operation\Collection\Decorator;

use Vainyl\Core\AbstractIdentifiable;
use Vainyl\Core\ResultInterface;
use Vainyl\Operation\Collection\CollectionInterface;
use Vainyl\Operation\OperationInterface;

/**
 * Interface AbstractCollectionDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractCollectionDecorator extends AbstractIdentifiable implements CollectionInterface
{
    private $collection;

    /**
     * AbstractCollectionDecorator constructor.
     *
     * @param CollectionInterface $collection
     */
    public function __construct(CollectionInterface $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @inheritDoc
     */
    public function getOperations(): \Traversable
    {
        return $this->collection->getOperations();
    }

    /**
     * @inheritDoc
     */
    public function add(OperationInterface $operation): CollectionInterface
    {
        $this->collection->add($operation);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->collection->getName();
    }

    /**
     * @inheritDoc
     */
    public function execute(): ResultInterface
    {
        return $this->collection->execute();
    }
}