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

use Vainyl\Operation\Factory\OperationFactoryInterface;
use Vainyl\Operation\OperationInterface;

/**
 * Class AbstractOperationFactoryDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractOperationFactoryDecorator implements OperationFactoryInterface
{
    private $operationFactory;

    /**
     * AbstractOperationFactoryDecorator constructor.
     *
     * @param OperationFactoryInterface $operationFactory
     */
    public function __construct(OperationFactoryInterface $operationFactory)
    {
        $this->operationFactory = $operationFactory;
    }

    /**
     * @inheritDoc
     */
    public function getId(): string
    {
        return $this->operationFactory->getId();
    }

    /**
     * @inheritDoc
     */
    public function decorate(OperationInterface $operation): OperationInterface
    {
        return $this->operationFactory->decorate($operation);
    }
}