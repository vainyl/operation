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

namespace Vainyl\Operation\Collection\Factory;

use Vainyl\Core\AbstractIdentifiable;
use Vainyl\Operation\OperationInterface;

/**
 * Class OperationFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class OperationFactory extends AbstractIdentifiable implements OperationFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function decorate(OperationInterface $operation): OperationInterface
    {
        return $operation;
    }
}