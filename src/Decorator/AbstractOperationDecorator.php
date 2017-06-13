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

use Vainyl\Core\ResultInterface;
use Vainyl\Operation\OperationInterface;

/**
 * Class AbstractOperationDecorator
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
abstract class AbstractOperationDecorator implements OperationInterface
{
    private $operation;

    /**
     * AbstractOperationDecorator constructor.
     *
     * @param OperationInterface $operation
     */
    public function __construct(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    /**
     * @inheritDoc
     */
    public function getId(): string
    {
        return $this->operation->getId();
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->operation->getName();
    }

    /**
     * @inheritDoc
     */
    public function execute(): ResultInterface
    {
        return $this->operation->execute();
    }
}