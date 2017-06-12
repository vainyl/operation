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
use Vainyl\Operation\OperationInterface;

/**
 * Class LoggerOperationDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class LoggerOperationDecorator extends AbstractOperationDecorator
{
    private $logger;

    /**
     * LoggerOperationDecorator constructor.
     *
     * @param OperationInterface $operation
     * @param LoggerInterface    $logger
     */
    public function __construct(OperationInterface $operation, LoggerInterface $logger)
    {
        $this->logger = $logger;
        parent::__construct($operation);
    }

    /**
     * @inheritDoc
     */
    public function execute(): ResultInterface
    {
        $this->logger->debug(
            sprintf('Preparing to execute operation %s with id %s', $this->getName(), $this->getId())
        );
        $result = parent::execute();
        if ($result->isSuccessful()) {
            $this->logger->debug(
                sprintf('Successfully executed operation %s with id %s ', $this->getName(), $this->getId())
            );
        } else {
            $this->logger->debug(
                sprintf('Failed to execute operation %s with id %s', $this->getName(), $this->getId())
            );
        }

        return $result;
    }
}