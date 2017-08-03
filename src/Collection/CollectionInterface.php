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

namespace Vainyl\Operation\Collection;

use Vainyl\Operation\OperationInterface;

/**
 * Interface CollectionInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface CollectionInterface extends OperationInterface
{
    /**
     * @return \Traversable
     */
    public function getOperations(): \Traversable;

    /**
     * @param OperationInterface $operation
     *
     * @return CollectionInterface
     */
    public function add(OperationInterface $operation): CollectionInterface;
}