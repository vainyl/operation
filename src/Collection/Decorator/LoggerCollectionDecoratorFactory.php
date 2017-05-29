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

use Psr\Log\LoggerInterface;
use Vainyl\Operation\Collection\CollectionInterface;
use Vainyl\Operation\Collection\Factory\CollectionFactoryInterface;

/**
 * Class LoggerCollectionDecoratorFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class LoggerCollectionDecoratorFactory extends AbstractCollectionFactoryDecorator
{
    private $logger;

    /**
     * LoggerCollectionDecoratorFactory constructor.
     *
     * @param CollectionFactoryInterface $collectionFactory
     * @param LoggerInterface            $logger
     */
    public function __construct(CollectionFactoryInterface $collectionFactory, LoggerInterface $logger)
    {
        $this->logger = $logger;
        parent::__construct($collectionFactory);
    }

    /**
     * @inheritDoc
     */
    public function create(array $operations = []): CollectionInterface
    {
        return new LoggerCollectionDecorator(parent::create($operations), $this->logger);
    }
}