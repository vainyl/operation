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

namespace Vainyl\Operation;

use Vainyl\Core\AbstractFailedResult;

/**
 * Class FailedOperationResult
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class FailedOperationResult extends AbstractFailedResult
{
    private $operation;

    /**
     * FailedOperationResult constructor.
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
    public function toArray(): array
    {
        return ['operation' => $this->operation->getId()];
    }
}