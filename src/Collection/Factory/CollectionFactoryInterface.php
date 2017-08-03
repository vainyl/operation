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

use Vainyl\Operation\Collection\CollectionInterface;
use Vainyl\Operation\OperationInterface;

/**
 * Interface CollectionFactoryInterface
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
interface CollectionFactoryInterface
{
    /**
     * @param OperationInterface[] $operations
     *
     * @return CollectionInterface
     */
    public function create(array $operations = []): CollectionInterface;
}