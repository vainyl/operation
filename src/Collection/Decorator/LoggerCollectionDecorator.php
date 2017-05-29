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
use Vainyl\Core\ResultInterface;
use Vainyl\Operation\Collection\CollectionInterface;

/**
 * Class LoggerCollectionDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class LoggerCollectionDecorator extends AbstractCollectionDecorator
{

    private $logger;

    /**
     * LoggerCollectionDecorator constructor.
     *
     * @param CollectionInterface $collection
     * @param LoggerInterface     $logger
     */
    public function __construct(CollectionInterface $collection, LoggerInterface $logger)
    {
        $this->logger = $logger;
        parent::__construct($collection);
    }

    /**
     * @inheritDoc
     */
    public function execute(): ResultInterface
    {
        $this->logger->debug('Preparing to execute collection %s', $this->getId());
        $result = parent::execute();
        if ($result->isSuccessful()) {
            $this->logger->debug('Successfully executed collection %s', $this->getId());
        } else {
            $this->logger->debug('Failed to execute collection %s', $this->getId());
        }

        return $result;
    }
}