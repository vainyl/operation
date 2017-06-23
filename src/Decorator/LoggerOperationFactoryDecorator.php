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

namespace Vainyl\Operation\Decorator;

use Psr\Log\LoggerInterface;
use Vainyl\Operation\Factory\OperationFactoryInterface;
use Vainyl\Operation\OperationInterface;

/**
 * Class LoggerOperationFactoryDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class LoggerOperationFactoryDecorator extends AbstractOperationFactoryDecorator
{
    private $logger;

    /**
     * LoggerOperationFactoryDecorator constructor.
     *
     * @param OperationFactoryInterface $operationFactory
     * @param LoggerInterface           $logger
     */
    public function __construct(OperationFactoryInterface $operationFactory, LoggerInterface $logger)
    {
        $this->logger = $logger;
        parent::__construct($operationFactory);
    }

    /**
     * @inheritDoc
     */
    public function decorate(OperationInterface $operation): OperationInterface
    {
        return new LoggerOperationDecorator(parent::decorate($operation), $this->logger);
    }
}