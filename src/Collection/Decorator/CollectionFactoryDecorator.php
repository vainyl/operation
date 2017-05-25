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

use Vainyl\Operation\Collection\CollectionInterface;
use Vainyl\Operation\Collection\Factory\CollectionFactoryInterface;

/**
 * Class CollectionFactoryDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class CollectionFactoryDecorator implements CollectionFactoryInterface
{
    private $collectionFactory;

    /**
     * CollectionFactoryDecorator constructor.
     *
     * @param CollectionFactoryInterface $collectionFactory
     */
    public function __construct(CollectionFactoryInterface $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @inheritDoc
     */
    public function create(array $operations = []): CollectionInterface
    {
        return $this->collectionFactory->create($operations);
    }
}