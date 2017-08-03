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

namespace Vainyl\Operation\Factory;

use Vainyl\Core\IdentifiableInterface;
use Vainyl\Operation\OperationInterface;

/**
 * Interface OperationFactoryInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface OperationFactoryInterface extends IdentifiableInterface
{
    /**
     * @param OperationInterface $operation
     *
     * @return OperationInterface
     */
    public function decorate(OperationInterface $operation): OperationInterface;
}