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

use Vainyl\Core\AbstractSuccessfulResult;

/**
 * Class SuccessfulResult
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class SuccessfulOperationResult extends AbstractSuccessfulResult
{

    private $operation;

    /**
     * SuccessfulOperationResult constructor.
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
        return [];
    }

    /**
     * @inheritDoc
     */
    public function isSuccessful(): bool
    {
        return true;
    }
}